<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/24/17
 * Time: 12:25 AM
 */

class Teacher extends CI_Controller{
    public function index(){
        $this->load->view('includes/teachers_header');
        $this->load->view('users/teacher/index');
    }

    public function newsFeed(){
        // check session
        if ($this->session->userdata('type') != '3') //  is teacher?
            redirect('users/login');

        $data['news'] = $this->teacher_model->get_news();

        $this->load->view('includes/teachers_header');
        $this->load->view('users/teacher/newsfeed',$data);
    }

    public function myClass(){
        $this->load->view('includes/teachers_header');
        $this->load->view('users/teacher/myclass');
    }

    public function profile(){
        $this->load->view('includes/teachers_header');
        $this->load->view('users/teacher/profile');
    }

    // post news
    public function postNews(){
        // check session is for a teacher only
        if ($this->session->userdata('type') != '3')
            redirect('users/login');

        $posted_by = $this->session->userdata('name');

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('news','News','required');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/teachers_header');
            $this->load->view('users/register/postNews');
        }else{
            $this->teacher_model->insert_post($posted_by);
            redirect('teacher/newsFeed');
        }
    }

}