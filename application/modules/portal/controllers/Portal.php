<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of portal
 *
 * @author johnenrick
 */
class Portal extends FE_Controller{
    //put your code here
    function index(){
        $this->loadPage("portal", array("portal_script"), array("message" => false));
        $this->load->view("system_application/system");
        $this->load->view("system_application/system_script");
    }
    public function visitPage($pageLink = "portal", $pageLink2 = false, $extraData = false){
        if(user_id()*1 == 0){ //if not logged in
            exit();
        }
        $data = array(
            "defaultPage" => ($pageLink2 !== "false" && $pageLink2 !== false) ? $pageLink."/".$pageLink2 : $pageLink, //if index or function in controller
            "extra_data" => ($extraData) ? base64_decode($extraData) : false
        );
        $this->load->view("system_application/system_frame", $data);
        $this->load->view("system_application/system");
        $this->load->view("system_application/system_script");
        $this->load->view("system_application/system_frame_script");
    }
    function login(){
        $this->form_validation->set_rules('username', 'Username/Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()){
            $this->load->model("api/M_account");
            $condition = array();
            $condition["password"] = sha1($this->input->post("password"));
            $condition[(filter_var($this->input->post("username"), FILTER_VALIDATE_EMAIL)) ? "email__detail" : "username"] = $this->input->post("username");
            $result = $this->M_account->retrieveAccount(NULL, NULL, NULL, NULL, NULL,$condition);
            $this->responseDebug($result);
            $this->responseDebug("email__detail");
            if($result && ($result[0]["account_type_ID"]*1 == 2 || $result[0]["account_type_ID"]*1 == 3 || $result[0]["account_type_ID"]*1 == 4 || $result[0]["account_type_ID"]*1 == 8 )){
                $this->responseDebug($result);
                $this->createSession($result[0]["first_name"], $result[0]["last_name"], $result[0]["middle_name"], $result[0]["account_type_ID"], $result[0]["ID"], $result[0]["username"]);
                $this->responseData(true);
            }else{
                $this->responseError(5, "Username/Email and Password Mismatch");
            }
        }else{
           if(count($this->form_validation->error_array())){
                $this->responseError(102, $this->form_validation->error_array());
            }else{
                $this->responseError(100, "Required Fields are empty");
            }
        }
        $this->outputResponse();
    }
    public function refreshSession(){
        $this->responseDebug(user_id());
        if(user_id()){
            $this->load->model("api/M_account");
            $result = $this->M_account->retrieveAccount(NULL, NULL, NULL, NULL, user_id(), array("status" => 1));
            $this->responseDebug($result);
            if($result){
                $this->createSession($result["first_name"], $result["last_name"], $result["middle_name"], $result["account_type_ID"], user_id(), $result["username"]);
                $this->responseData($result);
            }else{
                $this->responseError(2, "Account Not Found");
            }
        }else{
            $this->responseError(1, "Log In Required");
        }
        $this->outputResponse();
    }
    function logout(){
        $this->createSession(false, false, false, false, false, false);
        header("Location: ".base_url());
    }
    protected function createSession($firstName, $lastName, $middleName, $userType, $userID, $username){
        $this->session->set_userdata(array(
            "first_name" => $firstName,
            "last_name" => $lastName,
            "middle_name" => $middleName,
            "user_type" => $userType,
            "user_ID" => $userID,
            "username" => $username
        ));
    }
}
