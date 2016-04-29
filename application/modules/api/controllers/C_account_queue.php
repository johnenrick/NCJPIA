<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_account_queue extends API_Controller {
    /*
     * Access Control List
     * 1    - createAccountQueue
     * 2    - retrieveAccountQueue
     * 4    - updateAccountQueue
     * 8    - deleteAccountQueue
     * 16   - batchCreateAccountQueue
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("m_account_queue");
        $this->APICONTROLLERID = 1;
    }
    public function createAccountQueue(){
        $this->accessNumber = 1;
        if($this->checkACL()){
            $this->form_validation->set_rules('registration_number', 'registration_number', 'required');
            
            if($this->form_validation->run()){
                $result = $this->m_account_queue->createAccountQueue(
                        $this->input->post("registration_number")
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
    public function retrieveAccountQueue(){
        $this->accessNumber = 2;
        if($this->checkACL()){
            $result = $this->m_account_queue->retrieveAccountQueue(
                    $this->input->post("retrieve_type"),
                    $this->input->post("limit"),
                    $this->input->post("offset"), 
                    $this->input->post("sort"),
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    );
            if($this->input->post("limit")){
                $this->responseResultCount($this->m_account_queue->retrieveAccountQueue(
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
    public function updateAccountQueue(){
        $this->accessNumber = 4;
        if($this->checkACL()){
            
            $result = $this->m_account_queue->updateAccountQueue(
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
    public function deleteAccountQueue(){
        $this->accessNumber = 8;
        if($this->checkACL()){
            $result = $this->m_account_queue->deleteAccountQueue(
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
