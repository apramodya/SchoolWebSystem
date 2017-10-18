<?php

/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/17/17
 * Time: 1:36 PM
 */
class Register extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('register/register');

    }

    public function student()
    {
        $data['title'] = "Register Student";

        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('dob','Date of Birth','required');
        $this->form_validation->set_rules('home_address','Address','required');
        $this->form_validation->set_rules('mothers_name','Mothers Name','required');
        $this->form_validation->set_rules('mothers_id','Mothers ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('fathers_name','Fathers Name','required');
        $this->form_validation->set_rules('fathers_id','Fathers ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');


        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/header');
            $this->load->view('register/student',$data);
        }else{
            $this->register_model->insert_student();
            redirect('register');
        }
    }

    public function teacher()
    {
        $data['title'] = "Register Teacher";

        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('dob','Date of Birth','required');
        $this->form_validation->set_rules('home_address','Address','required');
        $this->form_validation->set_rules('id','ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/header');
            $this->load->view('register/teacher',$data);
        }else{
            $this->register_model->insert_teacher();
            redirect('register');
        }

    }

    public function parent()
    {
        $data['title'] = "Register Parent";
        $this->load->view('includes/header');
        $this->load->view('register/parent',$data);
    }

    public function nonAcademic()
    {
        $data['positions'] = $this->register_model->get_positions();

        $data['title'] = "Register Non-Academic";

        //$this->form_validation->set_rules('first_name','First Name','required');
        //$this->form_validation->set_rules('last_name','Last Name','required');
        //$this->form_validation->set_rules('dob','Date of Birth','required');
        //$this->form_validation->set_rules('home_address','Address','required');
        //$this->form_validation->set_rules('id','ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('password','Password','required|min_length[1]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/header');
            $this->load->view('register/nonAcademic',$data);
        }else{
            $this->register_model->insert_nonAcademic();
            redirect('register');
        }



    }
}