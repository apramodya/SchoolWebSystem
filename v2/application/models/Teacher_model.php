<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/24/17
 * Time: 12:24 AM
 */

class Teacher_model extends CI_Model{
    // insert news post for teachers
    public function insert_post($posted_by){
        $data = array(
            'title' => $this->input->post('title'),
            'news' => $this->input->post('news'),
            'posted_by' => $posted_by,

        );

        return $this->db->insert('news_feed',$data);
    }

    // get news
    public function get_news(){
        $query = $this->db->order_by('news_id','DESC' )->where('type','1')->select('title, news, posted_by','timestamp')->from('news_feed')->get();
        return $query->result_array();
    }
}