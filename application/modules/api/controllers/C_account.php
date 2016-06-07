<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_account extends API_Controller {
    /*
     * Access Control List
     * 1    - createAccount
     * 2    - retrieveAccount
     * 4    - updateAccount
     * 8    - deleteAccount
     * 16   - batchCreateAccount
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("m_account");
        $this->load->model("M_account_information");
        $this->APICONTROLLERID = 9;
    }
    public function createAccount(){
        $this->accessNumber = 1;
        //registration
        if($this->input->post("account_type_ID") == 9 || (($this->input->post("account_type_ID") != 9) && (user_type() == 2))){
            if(!$this->validReCaptcha() && $this->input->post("account_type_ID") == 9){
                $this->responseError(5, "Invalid Captcha");
                $this->outputResponse();
            }
            $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|callback_is_unique_username');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('account_type_ID', 'Account Type', 'required');
            
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|callback_alpha_dash_space');
            ($this->input->post("middle_name")) ? $this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|callback_alpha_dash_space') : null;
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|callback_alpha_dash_space');
            $this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email');
            if($this->form_validation->run()){
                $result = $this->m_account->createAccount(
                        $this->input->post("username"),
                        $this->input->post("password"),
                        $this->input->post("account_type_ID"),
                        $this->input->post("status")
                        );
                
                if($result){
                    $this->load->model("m_account_information");
                    $this->M_account_information->createAccountInformation(
                            $result,
                            $this->input->post("first_name"),
                            "",
                            $this->input->post("last_name"),
                            0,
                            $this->input->post("contact_number"),
                            $this->input->post("email_address"),
                            0,
                            0,
                            $this->input->post("complete_address")     
                            );
                                        
                    $this->actionLog($result);
                    $this->responseData($result);
                }else{
                    $this->responseError(3, "Failed to create");
                }
            }else{
                if(count($this->form_validation->error_array())){
                    $this->responseError(102, $this->form_validation->error_array());
                }else{
                    $this->responseError(100, "Required Fields are empty");
                }
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    
    public function retrieveAccount(){
        $this->accessNumber = 2;
        if($this->checkACL()){
            if(!$this->checkACL(32)){// accessNumber = 16 if not admin
                $this->form_validation->set_rules('ID', 'ID', 'required');
            }
            if($this->checkACL(32) || $this->form_validation->run()){//accessNumber 32 
                $ID = $this->input->post("ID");
                $result = $this->m_account->retrieveAccount(
                        $this->input->post("retrieve_type"),
                        $this->input->post("limit"),
                        $this->input->post("offset"),
                        $this->input->post("sort"),
                        $ID,
                        $this->input->post("condition"),
                        $this->input->post("having")
                        );
                if($this->input->post("limit")){
                    $this->responseResultCount($this->m_account->retrieveAccount(
                        1,
                        NULL,
                        NULL,
                        NULL,
                        $ID, 
                        $this->input->post("condition")
                        ));
                }
                if($result){
                    if($this->input->post("has_payment_accumulation")){
                        $this->load->model("M_account_payment");
                        foreach($result as $key => $value){
                            $result[$key]["payment_accumulated"] = $this->M_account_payment->retrieveAccountPayment(false, NULL, 0, array(), NULL, array(
                                "receiver_account_ID" => $value["account_ID"]
//                                ,"payment_mode" => array(2, 4)
                                ));
                        }
                    }
                    if($this->input->post("has_payment")){
                        $this->load->model("M_account_payment");
                        foreach($result as $key => $value){
                            $result[$key]["payment_list"] = $this->M_account_payment->retrieveAccountPayment(false, NULL, 0, array(), NULL, array(
                                "account_ID" => $value["account_ID"]
//                                ,"payment_mode" => array(2, 4)
                                ));
                        }
                    }
                    if($this->input->post("with_event_participation") || $this->input->post("all_information")){
                        $this->load->model("M_account_event_participation");

                        if($this->input->post("ID")){
                            $condition = array("account_ID" => $result["account_ID"]);
                            $result["event_participation"] = $this->M_account_event_participation->retrieveAccountEventParticipation(NULL, NULL, NULL, NULL, NULL, $condition);
                        }
                    }
                    $this->actionLog(json_encode($this->input->post()));
                    $this->responseData($result);
                }else{
                    $this->responseError(2, "No Result");
                }
            }else{
                if(count($this->form_validation->error_array())){
                    $this->responseError(102, $this->form_validation->error_array());
                }else{
                    $this->responseError(100, "Required Fields are empty");
                }
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    
    public function confirmGroupRegistration(){
        $this->accessNumber = 4;
        if($this->checkACL() && (user_type() == 2 ||user_type() == 3 )){
            $this->form_validation->set_rules('local_chapter_group_ID', 'Local Group', 'alpha_numeric|callback_is_unique_username');
            
            if($this->form_validation->run()){
                $this->load->model("M_account");
                $result = $this->m_account->retrieveAccount(
                        NULL, NULL, 0, array(), NULL, array(
                            "account_local_chapter_group__local_chapter_group_ID" => $this->input->post("local_chapter_group_ID")
                        )
                        );
                if($result){
                    $this->load->model("M_account_information");
                    foreach($result as $groupMember){
                        $this->M_account_information->updateAccountInformation(NULL, array(
                            "account_ID" => $groupMember["account_ID"] 
                        ), array(
                            "confirmation" => 2
                        ));
                    }
                    $this->actionLog(json_encode($this->input->post()));
                    $this->responseData($result);
                }else{
                    $this->responseError(3, "Failed to Update");
                }
            }else{
                if(count($this->form_validation->error_array())){
                    $this->responseError(102, $this->form_validation->error_array());
                }else{
                    $this->responseError(100, "Required Fields are empty");
                }
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    public function updateAccount(){
        $this->accessNumber = 4;
        if($this->checkACL()){
            if($this->input->post("updated_data[username]") && $this->input->post("updated_data[username]") != username()){
                $this->form_validation->set_rules('updated_data[username]', 'Username', 'alpha_numeric|callback_is_unique_username');
            }
            $this->form_validation->set_rules('updated_data[password]', 'Password', 'min_length[6]');
            if($this->input->post("updated_data[account_address_longitude]") !== NULL){
                $this->form_validation->set_rules('updated_data[account_address_description]', 'Complete Address', 'trim|required|min_length[2]');
            }
            ($this->input->post('updated_data[first_name]')) ? $this->form_validation->set_rules('updated_data[first_name]', 'First Name', 'trim|callback_alpha_dash_space') : null;
            ($this->input->post('updated_data[last_name]')) ? $this->form_validation->set_rules('updated_data[last_name]', 'Last Name', 'trim|callback_alpha_dash_space') : null;
            ($this->input->post('updated_data[middle_name]')) ? $this->form_validation->set_rules('updated_data[middle_name]', 'Last Name', 'trim|callback_alpha_dash_space') : null;
            if($this->input->post("updated_data[account_address_description]")){
                $this->form_validation->set_rules('updated_data[account_address_longitude]', 'Your Map Location', 'required|greater_than[0]');
                $this->form_validation->set_message('updated_data[account_address_longitude]');
                $this->form_validation->set_message('required', 'Click the map on the right to indicate your location');
                $this->form_validation->set_message('greater_than', 'Click the map on the right to indicate your location');
                
            }
            if($this->form_validation->run()){
                $updatedData = $this->input->post('updated_data');
                $ID = $this->input->post('ID');
                $condition = $this->input->post("condition");
                //if(!$this->checkACL(32)){// accessNumber 32 Dont allow to change account type if not admin or LGU
                if(user_type() != 2){
                    if($this->input->post("account_type_ID")){
                        $updatedData["account_type_ID"] = user_type();
                    }
                    if(isset($updatedData["status"])){ // Dont allow to change status
                        unset($updatedData["status"]);
                    }
                    $ID = user_id();
                }
                
                $result = $this->m_account->updateAccount(
                        $ID,
                        $condition,
                        $updatedData
                        );
                $condition["account_ID"] = $ID;
                $result1 = $this->M_account_information->updateAccountInformation(
                        NULL,
                        array("account_information__account_ID" => $ID),
                        $updatedData
                        );
                if(user_type() == 2 && $this->input->post("event_participation")){
                    $this->load->model("M_account_event_participation");
                    $this->M_account_event_participation->deleteAccountEventParticipation(NULL, array("account_ID" => $ID));
                    $eventParticipation = $this->input->post("event_participation");
                    foreach($eventParticipation as $eventParticipationValue){
                        $this->M_account_event_participation->createAccountEventParticipation($ID, $eventParticipationValue);
                    }
                }
                if($result || $result1){
                    $this->actionLog(json_encode($this->input->post()));
                    $this->responseData($result || $result1);
                }else{
                    $this->responseError(3, "Failed to Update");
                }
            }else{
                if(count($this->form_validation->error_array())){
                    $this->responseError(102, $this->form_validation->error_array());
                }else{
                    $this->responseError(100, "Required Fields are empty");
                }
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    
    public function deleteAccount(){
        $this->accessNumber = 8;
        if($this->checkACL()){
            $result = $this->m_account->deleteAccount(
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
    public function alpha_dash_space($str){
        $this->form_validation->set_message('alpha_dash_space', '{field} only accepts alphabets and spaces');
        return ( !preg_match('/^[ a-z - ñÑ]+$/iu', $str)) ? false : true;
    }
    public function is_unique_username($str){
        $this->load->model("M_account");
        $result = $this->m_account->retrieveAccount(false, NULL, 0, array(), NULL, array(
            "username"=>$str
        ));
        $this->form_validation->set_message('is_unique_username', '{field} already used.');
        if($result){
            return false;
        }else{
            return true;
        }
    }
    public function validReCaptcha(){
        return true;
        /*
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => '6Ld26BkTAAAAAHFkrfknWzaQhRkey-edRO5KEMU0', 
            'response' => $this->input->post("g-recaptcha-response")
                );

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result, true);
        return $response["success"];*/
    }
}