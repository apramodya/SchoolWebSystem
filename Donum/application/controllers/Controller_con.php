<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_con extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/contact');
        $this->load->view('templates/footer');
    }

    public function sentmessage()
    {
        $this->form_validation->set_rules('yourname', 'Your name', 'required');
        $this->form_validation->set_rules('youremail', 'Your email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('Controller_con/index');
        } else {
            $this->load->model('model_contact');
            $this->model_contact->insertvalue();
            //set message
            $this->session->set_flashdata('msg_sent', 'Your message have been sent.');
            redirect('Controller_con/index');

        }
    }

    public function get_message()
    {
        $this->load->model('model_contact');
        $data["fetch_data"] = $this->model_contact->fetch_data();
        $this->load->view('includes/admin_header');
        $this->load->view('admin/view_message', $data);


    }
}
