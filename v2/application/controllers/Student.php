<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/24/17
 * Time: 11:45 AM
 */

class Student extends CI_Controller{
    public function index(){
        $this->load->view('includes/students_header');
        $this->load->view('users/student/index');
    }

    public function newsFeed(){
        // check session
        if ($this->session->userdata('type') != '2') //  is student?
            redirect('users/login');

        $data['news'] = $this->student_model->get_news();

        $this->load->view('includes/students_header');
        $this->load->view('users/student/newsfeed',$data);
    }

    public function myClass(){
        $this->load->view('includes/students_header');
        $this->load->view('users/student/myclass');
    }

    public function profile(){
        $this->load->view('includes/students_header');
        $this->load->view('users/student/profile');
    }
}