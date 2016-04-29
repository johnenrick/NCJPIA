<?php

class Template extends FE_Controller{
    public function index(){
        $this->load->view('design_1');
    }
    public function portal(){
        $this->load->view('design_2');
    }
    public function master_list(){
        $this->load->view('design_3');
    }
    public function queue(){
        $this->load->view('design_4');
    }
}
