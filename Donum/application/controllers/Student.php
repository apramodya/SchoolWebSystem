<?php

class Student extends CI_Controller{
    public function profile($sid){
        $data['student'] = $this->student_model->get_student($sid);


        if ($this->session->userdata('type') == 1)
            $this->load->view('includes/admin_header');
        elseif ($this->session->userdata('logged_in') == 2)
            $this->load->view('includes/student_header');
        elseif ($this->session->userdata('logged_in') == 3)
            $this->load->view('includes/teacher_header');
        $this->load->view('student/profile',$data);
    }

    public function edit($sid){
        $data['student'] = $this->student_model->get_student($sid);

        $this->load->view('includes/admin_header');
        $this->load->view('student/edit',$data);
    }

    public function update($sid){
        $this->form_validation->set_rules('email','Email','required');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/admin_header');
            $this->load->view('student/edit/'.$sid);
        }else{
            $this->student_model->update_student($sid);
            redirect('student/profile/'.$sid);
        }
    }
}