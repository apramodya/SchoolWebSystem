<?php
class News extends CI_Controller{

    // news feed
    public function feed(){
        // get user type
        $type = $this->session->userdata('type');

        // get news according to user type
        $data['news'] = $this->news_model->get_news($type);

        if ($type == 1)
            $this->load->view('includes/admin_header');
        elseif ($type == 2)
            $this->load->view('includes/student_header');
        elseif ($type == 3)
            $this->load->view('includes/teacher_header');

        $this->load->view('news/feed',$data);
    }

    public function post(){
        $type = $this->session->userdata('type');
        $posted_by = $this->session->userdata('username');

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('news','News','required');

        if ( $this->form_validation->run() === FALSE){
            if ($type == 1)
                $this->load->view('includes/admin_header');
            elseif ($type == 3)
                $this->load->view('includes/teacher_header');
            $this->load->view('news/post');
        }else{
            $this->news_model->insert_post($posted_by);
            redirect('news/feed');
        }
    }
}