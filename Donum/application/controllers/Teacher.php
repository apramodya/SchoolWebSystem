<?php
class Teacher extends CI_Controller{
    public function profile($tid){
        $data['teacher'] = $this->teacher_model->get_teacher($tid);


        if ($this->session->userdata('type') == 1)
            $this->load->view('includes/admin_header');
        elseif ($this->session->userdata('logged_in') == 3)
            $this->load->view('includes/teacher_header');
        $this->load->view('teacher/profile',$data);
    }

    public function edit($tid){
        $data['teacher'] = $this->teacher_model->get_teacher($tid);

        $this->load->view('includes/admin_header');
        $this->load->view('teacher/edit',$data);
    }

    public function update($tid){
        $this->form_validation->set_rules('email','Email','required');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/admin_header');
            $this->load->view('teacher/edit/'.$tid);
        }else{
            $this->teacher_model->update_teacher($tid);
            redirect('teacher/profile/'.$tid);
        }
    }
}