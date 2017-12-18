<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function panel(){

        $data['students'] = $this->student_model->get_students();
        $data['teachers'] = $this->teacher_model->get_teachers();

        $this->load->view('includes/admin_header');
        $this->load->view('admin/panel',$data);
    }

    public function register(){
        $this->load->view('includes/admin_header');
        $this->load->view('admin/register/index');
    }

    public function register_student(){

        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('dob','Date of Birth','required');
        $this->form_validation->set_rules('home_address','Address','required');
        $this->form_validation->set_rules('mothers_name','Mothers Name','required');
        $this->form_validation->set_rules('mothers_id','Mothers ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('fathers_name','Fathers Name','required');
        $this->form_validation->set_rules('fathers_id','Fathers ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');
        $this->form_validation->set_rules('date_entered','Date Entered','required');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/admin_header');
            $this->load->view('admin/register/student');
        }else{
            $this->admin_model->insert_student();
            $this->session->set_flashdata('student_registration_success', 'Student Registration Success');
            redirect('admin/register_student');
        }


    }

    public function register_teacher(){

        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('dob','Date of Birth','required');
        $this->form_validation->set_rules('date_entered','Date Entered','required');
        $this->form_validation->set_rules('home_address','Address','required');
        $this->form_validation->set_rules('nid','ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/admin_header');
            $this->load->view('admin/register/teacher');
        }else{
            $this->admin_model->insert_teacher();
            $this->session->set_flashdata('teacher_registration_success', 'Teacher Registration Success');
            redirect('admin/register_teacher');
        }

    }
}