<?php

/* Created by John Enrick Pleños */
class Queue extends FE_Controller {
    public function index(){
        $this->loadPage("queue", array( "queue_script"), array("message" => false));
        $this->load->view("system_application/system");
        $this->load->view("system_application/system_script");
    }
}
