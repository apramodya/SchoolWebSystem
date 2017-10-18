<?php
/**
 * Created by PhpStorm.
 * Register: apramodya
 * Date: 10/6/17
 * Time: 11:27 AM
 */

class Login extends CI_Controller{

    public function index(){
        $this->load->view('includes/header');
        $this->load->view('user/login');
    }
}