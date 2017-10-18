<?php
/**
 * Created by PhpStorm.
 * Register: apramodya
 * Date: 10/6/17
 * Time: 12:37 PM
 */

class Register extends CI_Controller{
    public function index(){
        $data['title'] = "Registration Home";

        $this->load->view('includes/header');
        $this->load->view('register/index',$data);
    }


}