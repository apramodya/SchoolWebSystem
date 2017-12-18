<?php
	
	class Pages extends CI_Controller{

        public function home(){
            $data['title'] = 'ANNOUNCEMENTS';

            $data['Announce']=$this->home_model->get_Announce();

            $this->load->view('templates/header');
            $this->load->view('Home/index' , $data);
            $this->load->view('templates/footer');

        }
		
		public function view($page='home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title']=ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}

        public function history(){

            $this->load->view('templates/header');
            $this->load->view('pages/History');
            $this->load->view('templates/footer');
        }
         public function anthem(){

            $this->load->view('templates/header');
            $this->load->view('pages/School Anthem');
            $this->load->view('templates/footer');
        }
         public function rules(){

            $this->load->view('templates/header');
            $this->load->view('pages/Rules and Reg');
            $this->load->view('templates/footer');
        }
         public function primary(){

            $this->load->view('templates/header');
            $this->load->view('pages/primary');
            $this->load->view('templates/footer');
        }
        public function admission(){

            $this->load->view('templates/header');
            $this->load->view('pages/admission');
            $this->load->view('templates/footer');
        }

        public function pre(){

            $this->load->view('templates/header');
            $this->load->view('pages/nursary');
            $this->load->view('templates/footer');
        }
         public function secondary(){

            $this->load->view('templates/header');
            $this->load->view('pages/secondary');
            $this->load->view('templates/footer');
        }
      
         public function events(){

            $this->load->view('templates/header');
            $this->load->view('posts/index');
            $this->load->view('templates/footer');
        }
	}
