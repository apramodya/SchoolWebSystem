<?php
/**
 * Created by PhpStorm.
 * Register: apramodya
 * Date: 10/6/17
 * Time: 10:29 AM
 */

class Landing extends CI_Controller{
    public function index(){
        $this->load->view('includes/header');
        $this->load->view('landing');
    }
}