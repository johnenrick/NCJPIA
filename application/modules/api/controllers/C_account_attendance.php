<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_account_attendance extends API_Controller {
    /*
     * Access Control List
     * 1    - createAccountAttendance
     * 2    - retrieveAccountAttendance
     * 4    - updateAccountAttendance
     * 8    - deleteAccountAttendance
     * 16   - batchCreateAccountAttendance
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("m_account_attendance");
        $this->APICONTROLLERID = 1;
    }
    public function createAccountAttendance(){
        $this->accessNumber = 1;
        if($this->checkACL()){
            $this->form_validation->set_rules('account_ID', 'Account ID', 'required');
            
            if($this->form_validation->run()){
                $result = $this->m_account_attendance->createAccountAttendance(
                        $this->input->post("account_ID"),
                        user_id()
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
    public function retrieveAccountAttendance(){
        $this->accessNumber = 2;
        if($this->checkACL()){
            $result = $this->m_account_attendance->retrieveAccountAttendance(
                    $this->input->post("retrieve_type"),
                    $this->input->post("limit"),
                    $this->input->post("offset"), 
                    $this->input->post("sort"),
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    );
            if($this->input->post("limit")){
                $this->responseResultCount($this->m_account_attendance->retrieveAccountAttendance(
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
    public function updateAccountAttendance(){
        $this->accessNumber = 4;
        if($this->checkACL()){
            
            $result = $this->m_account_attendance->updateAccountAttendance(
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
    public function deleteAccountAttendance(){
        $this->accessNumber = 8;
        if($this->checkACL()){
            $result = $this->m_account_attendance->deleteAccountAttendance(
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
