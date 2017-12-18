<?php

class News_Model extends CI_Model{

    // get news
    public function get_news($type){
        $query = $this->db
            ->order_by('news_id','DESC' )
            ->select('title, news, posted_by, timestamp')
            ->from('news_feed')
            ->where('type',$type)
            ->get();

        return $query->result_array();
    }

    // insert news post
    public function insert_post($posted_by){
        $data = array(
            'title' => $this->input->post('title'),
            'news' => $this->input->post('news'),
            'posted_by' => $posted_by,
            'type' => $this->input->post('type')
        );

        return $this->db->insert('news_feed',$data);
    }
}