<?php
	class Home extends CI_Controller{
		public function index(){
		$data['title'] = 'ANNOUNCEMENTS';

		$data['Announce']=$this->home_model->get_Announce();

		$this->load->view('templates/header');
		$this->load->view('Home/index' , $data);
		$this->load->view('templates/footer');

	}

		 public function view($slug = NULL){
		$result = $this->home_model->show_Announce();
			$data= array('alist' => $result );
			$this->load->view('Ann',$data);

			if (empty($data['Announce'])) {
				show_404();
			}

			$data['title']=$data['Announce']['title'];

			$this->load->view('templates/header');
			$this->load->view('Home/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
		
		$data['title'] = 'Create Announcements';

		$this->form_validation->set_rules('body','Body','required');

		if($this->form_validation->run() === FALSE){
		$this->load->view('templates/header');
		$this->load->view('Home/create' , $data);
		$this->load->view('templates/footer');
	}else{
		$this->home_model->create_announce();
		redirect('Home');
	}
}
}