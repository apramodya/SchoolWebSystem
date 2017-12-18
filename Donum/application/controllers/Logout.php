<?php

class Logout extends CI_Controller{
// logout controller
    public function index(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('type');
        $this->session->unset_userdata('username');

        //set message
        $this->session->set_flashdata('user_logged_out', 'You are now logged out');
        redirect('login');
    }
}