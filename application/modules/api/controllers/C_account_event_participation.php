<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_account_event_participation extends API_Controller {
    /*
     * Access Control List
     * 1    - createAccountEventParticipation
     * 2    - retrieveAccountEventParticipation
     * 4    - updateAccountEventParticipation
     * 8    - deleteAccountEventParticipation
     * 16   - batchCreateAccountEventParticipation
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("m_account_event_participation");
        $this->APICONTROLLERID = 1;
    }
    public function createAccountEventParticipation(){
        $this->accessNumber = 1;
        if($this->checkACL()){
            $this->form_validation->set_rules('account_ID', 'Account ID', 'required');
            $this->form_validation->set_rules('event_ID', 'Event ID', 'required');
            
            if($this->form_validation->run()){
                $result = $this->m_account_event_participation->createAccountEventParticipation(
                        $this->input->post("account_ID"),
                        $this->input->post("event_ID")
                        );
                if($result){
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
    public function retrieveAccountEventParticipation(){
        $this->accessNumber = 2;
        if($this->checkACL()){
            $result = $this->m_account_event_participation->retrieveAccountEventParticipation(
                    $this->input->post("retrieve_type"),
                    $this->input->post("limit"),
                    $this->input->post("offset"), 
                    $this->input->post("sort"),
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    );
            if($this->input->post("limit")){
                $this->responseResultCount($this->m_account_event_participation->retrieveAccountEventParticipation(
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
    public function updateAccountEventParticipation(){
        $this->accessNumber = 4;
        if($this->checkACL()){
            
            $result = $this->m_account_event_participation->updateAccountEventParticipation(
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
    public function deleteAccountEventParticipation(){
        $this->accessNumber = 8;
        if($this->checkACL()){
            $result = $this->m_account_event_participation->deleteAccountEventParticipation(
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
}
