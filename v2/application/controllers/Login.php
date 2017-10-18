<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/17/17
 * Time: 1:23 PM
 */
class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('login');

    }
}