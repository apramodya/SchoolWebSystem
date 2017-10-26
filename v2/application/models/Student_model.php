<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/24/17
 * Time: 4:02 PM
 */
class Student_model extends CI_Model{
    // get news
    public function get_news(){
        $query = $this->db->order_by('news_id','DESC' )->where('type','2')->select('title, news, posted_by, timestamp')->from('news_feed')->get();
        return $query->result_array();
    }
}