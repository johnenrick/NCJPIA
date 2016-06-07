<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_registration extends API_Controller {
    /*
     * Access Control List
     * 1    - createRegistration
     * 2    - retrieveRegistration
     * 4    - updateRegistration
     * 8    - deleteRegistration
     * 16   - batchCreateRegistration
     */
    public function __construct() {
        parent::__construct();
        $this->APICONTROLLERID = 1;
    }
    public function createRegistration(){
        $this->accessNumber = 1;
        if($this->checkACL()){
            if(!$this->input->post("first_agreement") && !$this->input->post("second_agreement")){
                $this->responseError(4, "You have to agree with the terms before you can proceed.");
                $this->outputResponse();
            }
            /*
             * group_member_list = [
             *  [0] => {
             *      first_name =>
             *      middle_name =>
             *      last_name =>
             *      local_chapter_position_ID =>
             *      contact_number =>
             *      complete_address =>
             *      email_address =>
             *      tshirt_size =>
             *      member_type =>
             *      event_participation => {
             *          academic => [0,1,2]//id sa event
             *          non_academic => []
             *      }
             *      
             *  } 
             * 
             * ]
             *              
             */
            $this->form_validation->set_rules('local_chapter_description', 'Local Chapter', 'required');
            $this->form_validation->set_rules('local_chapter_chapter_type', 'Local Chapter Type', 'required');
            $this->form_validation->set_rules('local_chapter_address', 'Local Chapter Address', 'required');
            $this->form_validation->set_rules('local_chapter_region', 'Local Chapter Region', 'required');
            $leaderCount = 0;
            $groupMemberList = $this->input->post("group_member_list");
            if($groupMemberList){
                foreach($groupMemberList as $key =>$value){
                    $this->formValidationSetRule("group_member_list[$key][first_name]", "Member ".$key." First Name", "required");
//                    $this->formValidationSetRule("group_member_list[$key][middle_name]", "Member ".$key." Middle Name", "required");
                    $this->formValidationSetRule("group_member_list[$key][last_name]", "Member ".$key." Last Name", "required");
                    $this->formValidationSetRule("group_member_list[$key][local_chapter_position_ID]", "Member ".$key." Position", "required");
                    $this->formValidationSetRule("group_member_list[$key][contact_number]", "Member ".$key." Contact Number", "required|max_length[11]");
                    $this->formValidationSetRule("group_member_list[$key][complete_address]", "Member ".$key." Complete Address", "required");
                    $this->formValidationSetRule("group_member_list[$key][email_address]", "Member ".$key." Email Address", "required|valid_email");
                    $this->formValidationSetRule("group_member_list[$key][tshirt_size]", "Member ".$key." T-shirt Size", "required");
                    $this->formValidationSetRule("group_member_list[$key][member_type]", "Member ".$key." Member Type", 'required|numeric');
                    if(isset($value["event_participation"]["academic"]) && count($value["event_participation"]["academic"]) > 2){
                        $this->formValidationError["member_".$key."_event_participation_academic"] = 'Member '.$key."Participation in academic exceeds the limit";
                    }
                    if(isset($value["event_participation"]["non_academic"]) && count($value["event_participation"]["non_academic"]) > 2){
                        $this->formValidationError["member_".$key."_event_participation_non_academic"] = 'Member '.$key."Participation in non academic exceeds the limit";
                    }
                    if($this->input->post("group_member_list[$key][member_type]")*1 == 1){
                        $leaderCount++;
                    }
                }
            }
            if($leaderCount != 1){
                $this->formValidationError["group_leader"] = "There must be only one group leader";
            }
            $imageError = $this->hasFileUploadError(count($groupMemberList));
            $this->responseDebug($this->input->post());
            if($this->formValidationRun() && !$imageError){
                $this->load->model("M_local_chapter_group");
                $this->load->model("M_account_information");
                $this->load->model("M_account");
                $this->load->model("M_account_event_participation");
                $this->load->model("M_account_local_chapter_group");
                $this->load->model("M_file_uploaded");
                $this->load->model("M_local_chapter");
                /*Local Chapter*/
                $localChapterResult = $this->M_local_chapter->createLocalChapter(
                        $this->input->post("local_chapter_description"),
                        $this->input->post("local_chapter_chapter_type"),
                        $this->input->post("local_chapter_address"),
                        $this->input->post("local_chapter_region")
                        );
                /*Create Local Group*/
                $localChapterGroupResult = $this->M_local_chapter_group->createLocalChapterGroup(
                        $localChapterResult
                        );
                /*Create account for member*/
                foreach($groupMemberList as $key => $value){
                    $accountResult = $this->M_account->createAccount(
                            time()+  rand(1, 1000), 
                            time()+  rand(1, 1000), 
                            9,//account type
                            1//status
                            );
                    $fileUploaded = $this->do_upload_images($key, 'assets/images/identification_card');
                        
                    if($accountResult && $fileUploaded){
                        
                        $this->M_account_information->createAccountInformation(
                                $accountResult,
                                $value["first_name"], 
                                isset($value["middle_name"]) ? $value["middle_name"] : "",
                                $value["last_name"],
                                $value["local_chapter_position_ID"],
                                $value["contact_number"],
                                $value["email_address"],
                                $fileUploaded["file_uploaded_ID"],
                                $value["tshirt_size"],
                                $value["complete_address"]
                                );
                        /*Add local chapter group member*/
                        $this->M_account_local_chapter_group->createAccountLocalChapterGroup($accountResult, $localChapterGroupResult, $value["member_type"]);
                        
                        /*Event participation*/
                        if(isset($value["event_participation"]["academic"])){
                            foreach($value["event_participation"]["academic"] as $academicValue){
                                $this->M_account_event_participation->createAccountEventParticipation($accountResult, $academicValue);
                            }
                        }
                        if(isset($value["event_participation"]["non_academic"])){
                            foreach($value["event_participation"]["non_academic"] as $nonAcademicValue){
                                $this->M_account_event_participation->createAccountEventParticipation($accountResult, $nonAcademicValue);
                            }
                        }
                    }
                }
                if($localChapterGroupResult){
                    $this->actionLog($localChapterGroupResult);
                    $this->responseData($localChapterGroupResult);
                }else{
                    $this->responseError(3, "Failed to create");
                }
            }else{
                if(count($this->formValidationError())){
                    $this->responseError(102, $this->formValidationError());
                }
                if($imageError){
                    if(is_array($imageError)){
                        $this->responseError(1005, $imageError);
                    }else{
                        $this->responseError(6, "Number of images does not match with the number of group member");
                    }
                }
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    public function createPaymentReceipt(){
        $this->accessNumber = 1;
        if($this->checkACL()){
            $this->formValidationSetRule('registration_number', 'Registraton Number', 'required|numeric');
            $imageError = $this->hasFileUploadError();
            if($this->formValidationRun() && !$imageError){
                $this->load->model("M_payment_receipt");
                for($key = 0; $key < count($_FILES['images'] ['name']); $key++){
                    $fileUploaded = $this->do_upload_images($key, 'assets/images/payment_receipt');
                    if($fileUploaded){
                        $this->M_payment_receipt->createPaymentReceipt($this->input->post("registration_number"), $fileUploaded["file_uploaded_ID"]);
                    }
                }
                $this->responseData(true);
            }else{
                if(count($this->formValidationError())){
                    $this->responseError(102, $this->formValidationError());
                }
                if($imageError){
                    if(is_array($imageError)){
                        $this->responseError(1002, $imageError);
                    }else{
                        $this->responseError(6, "No image found");
                    }
                }
            }
        }
        $this->outputResponse();
        
    }
    public function retrieveRegistration(){
        $this->accessNumber = 2;
        if($this->checkACL()){
            $result = $this->m_registration->retrieveRegistration(
                    $this->input->post("retrieve_type"),
                    $this->input->post("limit"),
                    $this->input->post("offset"), 
                    $this->input->post("sort"),
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    );
            if($this->input->post("limit")){
                $this->responseResultCount($this->m_registration->retrieveRegistration(
                    1,
                    NULL,
                    NULL,
                    NULL,
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    ));
            }
            if($result){
                $this->actionLog(json_encode($this->input->post()));
                $this->responseData($result);
            }else{
                $this->responseError(2, "No Result");
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    public function updateRegistration(){
        $this->accessNumber = 4;
        if($this->checkACL()){
            
            $result = $this->m_registration->updateRegistration(
                    $this->input->post("ID"),
                    $this->input->post("condition"),
                    $this->input->post("updated_data")
                    );
            if($result){
                $this->actionLog(json_encode($this->input->post()));
                $this->responseData($result);
            }else{
                $this->responseError(3, "Failed to Update");
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    public function deleteRegistration(){
        $this->accessNumber = 8;
        if($this->checkACL()){
            $result = $this->m_registration->deleteRegistration(
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    );
            if($result){
                $this->actionLog(json_encode($this->input->post()));
                $this->responseData($result);
            }else{
                $this->responseError(3, "Failed to delete");
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    /**
     * 
     * @return bolean/array true if exceeds limit, array if multiple errors, false if no errors
     */
    function hasFileUploadError($expectedFileQuantity = 0){
        if(!isset($_FILES['images'] ['name'])){
            return true;
        }
        $files = $_FILES;
        $cpt = count($_FILES['images'] ['name']);
        if($expectedFileQuantity != 0){
            if($cpt != $expectedFileQuantity ){
                return true;
            }
        }
        $errorList = array();
        for($i = 0; $i < $cpt; $i ++) {
            if(!($files ['images'] ['type'] [$i] == "image/jpeg" || $files ['images'] ['type'] [$i] == "image/png" || $files ['images'] ['type'] [$i] == "image/jpg")){
                if(!isset($errorList[$i])){
                    $errorList[$i] = array();
                }
                $errorList[$i]["type"] = "Invalid image type";
            }
            if($files ['images'] ['size'] [$i] > 10000000){//maximum 10MB
                if(!isset($errorList[$i])){
                    $errorList[$i] = array();
                }
                $errorList[$i]["size"] = $files ['images'] ['name'][$i]." exceeded file size limit";
            }
        }
        return (count($errorList) > 0) ? $errorList : false;
    }
    function do_upload_images($i, $path) {
        $files = $_FILES;
        $this->load->library('upload');
        $cpt = count ( $_FILES ['images'] ['name'] );
        if($i > $cpt-1){
            return false;
        }
        $_FILES ['userfile'] ['name'] = $files ['images'] ['name'] [$i];
        $_FILES ['userfile'] ['type'] = $files ['images'] ['type'] [$i];
        $_FILES ['userfile'] ['tmp_name'] = $files ['images'] ['tmp_name'] [$i];
        $_FILES ['userfile'] ['error'] = $files ['images'] ['error'] [$i];
        $_FILES ['userfile'] ['size'] = $files ['images'] ['size'] [$i];
        $this->upload->initialize ( $this->set_upload_options ($path) );
        $this->upload->do_upload();
        
        $photoinfo = $this->upload->data();
        if($photoinfo["file_name"] != ""){
            $this->load->model("M_file_uploaded");
            $fileUploadedResult = $this->M_file_uploaded->createFileUploaded($photoinfo["image_type"], $photoinfo["file_name"], $photoinfo["file_path"], $photoinfo["file_size"]);
            $photoinfo["file_uploaded_ID"] = $fileUploadedResult;
            return $photoinfo;
        }else{
            return false;
        }
    }
    private function set_upload_options($path) {
        // upload an image options
        $config = array ();
        $config ['upload_path'] = $path;
        $config ['allowed_types'] = 'gif|jpg|png';
        $config ['encrypt_name'] = TRUE;

        return $config;
    }
    
}
