<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_local_chapter_group extends API_Controller {
    /*
     * Access Control List
     * 1    - createLocalChapterGroup
     * 2    - retrieveLocalChapterGroup
     * 4    - updateLocalChapterGroup
     * 8    - deleteLocalChapterGroup
     * 16   - batchCreateLocalChapterGroup
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("m_local_chapter_group");
        $this->APICONTROLLERID = 1;
    }
    public function createLocalChapterGroup(){
        $this->accessNumber = 1;
        if($this->checkACL()){
            $this->form_validation->set_rules('first_parameter', 'First Parameter', 'required');
            
            if($this->form_validation->run()){
                $result = $this->m_local_chapter_group->createLocalChapterGroup(
                        $this->input->post("leader_account_ID"),
                        $this->input->post("local_chapter_ID")
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
    public function retrieveLocalChapterGroup(){
        $this->accessNumber = 2;
        if($this->checkACL()){
            $result = $this->m_local_chapter_group->retrieveLocalChapterGroup(
                    $this->input->post("retrieve_type"),
                    $this->input->post("limit"),
                    $this->input->post("offset"), 
                    $this->input->post("sort"),
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    );
            if($this->input->post("limit")){
                $this->responseResultCount($this->m_local_chapter_group->retrieveLocalChapterGroup(
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
    public function updateLocalChapterGroup(){
        $this->accessNumber = 4;
        if($this->checkACL()){
            
            $result = $this->m_local_chapter_group->updateLocalChapterGroup(
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
    public function deleteLocalChapterGroup(){
        $this->accessNumber = 8;
        if($this->checkACL()){
            $result = $this->m_local_chapter_group->deleteLocalChapterGroup(
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
