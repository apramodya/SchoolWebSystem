<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_con extends CI_Controller {

	
	
	public function index()
	{
		$this->load->view('webpage/contact');
	}
	public function sentmessage()
	{
		$this->form_validation->set_rules('yourname','Your name','required');
		$this->form_validation->set_rules('youremail', 'Your email', 'required|valid_email');
		$this->form_validation->set_rules('subject','Subject','required');
		$this->form_validation->set_rules('message','Message','required');

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('webpage/contact');
                }
                else
                {
                       $this->load->model('model_contact');
                       $this->model_contact->insertvalue();
                }
	}
}
