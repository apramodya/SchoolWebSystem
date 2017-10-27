<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_contact extends CI_model {
	public function insertvalue(){
		$data=array(
		        	'name'=>$this->input->post('yourname'),
		        	'email'=>$this->input->post('youremail'),

					'subject'=>$this->input->post('subject'),
					'message'=>$this->input->post('message'),


			);
	
	$this->db->insert ('message',$data);
	
	}
}