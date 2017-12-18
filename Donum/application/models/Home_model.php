<?php
	/**
	* 
	*/
	class Home_model extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}
		public function get_Announce($slug = False){
			if($slug == False){
				$this->db->order_by('id','DESC');
				$query = $this->db->get('Announcement');
				return $query->result_array();
			}
			$query = $this->db->get_where('Announcement' , array('slug' => $slug));
			return $query->row_array();
		}

		public function create_announce(){
		//	$slug =url_title($this->input->post('body'));
			$data = array(
		//		'slug' => $slug,
				'Announce' =>$this->input->post('body')
				);
			return $this->db->insert('Announcement', $data);
		}
	

	public function show_Announce(){
	return $this->db->get('announcement');
	}
}