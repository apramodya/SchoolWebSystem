<?php
	
	class Post_model extends CI_Model{
		
		public function __construct(){
			$this->load->database();
		}
		public function get_posts($slug = FALSE){
			if ($slug === FALSE) {
				$this->db->order_by('id','DESC');
				$query = $this->db->get('event_gallery');
				return $query->result_array();
			}
			$query = $this->db->get_where('event_gallery',array('slug' =>$slug));
			return $query->row_array();
		} 

		public function create_post($post_image){
			$slug = url_title($this->input->post('title'));

			$data=array(
				'title' =>$this->input->post('title'),
				'slug' =>$slug,
				'post_image' => $post_image,
				'body' =>$this->input->post('body')

			);
			return $this->db->insert('event_gallery',$data);
		}

		public function delete_post($id){
			$this->db->where('id',$id);
			$this->db->delete('event_gallery');
			return true;
		}

		public function update_post(){
			$slug = url_title($this->input->post('title'));

			$data=array(
				'title' =>$this->input->post('title'),
				'slug' =>$slug,
				'body' =>$this->input->post('body')
			);

			$this->db->where('id',$this->input->post('id'));
			return $this->db->update('event_gallery',$data);
		}
		
	}