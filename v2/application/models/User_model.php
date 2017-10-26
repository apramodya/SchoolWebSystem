<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/22/17
 * Time: 9:48 PM
 */

class User_model extends CI_Model{
    // login model
    public function login($type, $username, $password){
        if ($type == 1) {
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $query = $this->db->get('admin');
        }
        else if ($type == 2){
            $this->db->where('student_id', $username);
            $this->db->where('password', $password);
            $query = $this->db->get('student');
        }

        else if ($type == 3){
            $this->db->where('nid', $username);
            $this->db->where('password', $password);
            $query = $this->db->get('teacher');
        }
        else if ($type == 4){
            $query = $this->db->get('parent');
        }
        else if ($type == 5){
            $this->db->where('nid', $username);
            $this->db->where('password', $password);
            $query = $this->db->get('nonAcademic');
        }

        if ($query)
            return $query->row();
        else
            return false;
    }

    // get non academic positions
    public function get_positions(){
        $query = $this->db->select('position,position_id')->from('non_academic_positions')->get();
        return $query->result_array();
    }

    // get news
    public function get_news(){
        $query = $this->db->order_by('news_id','DESC' )->select('title, news, posted_by, timestamp')->from('news_feed')->get();
        return $query->result_array();
    }

    // insert news post for teachers
    public function insert_post($posted_by){
        $data = array(
            'title' => $this->input->post('title'),
            'news' => $this->input->post('news'),
            'posted_by' => $posted_by,
            'type' => $this->input->post('type')
        );

        return $this->db->insert('news_feed',$data);
    }

    //insert a non academic
    public function insert_nonAcademic(){
        $position_id = $this->input->post('position');
        //$position = $this->db->select('position')->from('non_academic_positions')->where('position_id',$position_id)->get();
        $query = $this->db->query('SELECT position FROM non_academic_positions WHERE position_id = '.$position_id.' LIMIT 1');
        $position = $query->row()->position;
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'middle_name' => $this->input->post('middle_name'),
            'last_name' => $this->input->post('last_name'),
            'dob' => $this->input->post('dob'),
            'home_address' => $this->input->post('home_address'),
            'current_address' => $this->input->post('current_address'),
            'email' => $this->input->post('email'),
            'nid' => $this->input->post('nid'),
            'position' => $position,
            //$position => $this->input->post('position'),
            'password' => md5($this->input->post('password'))




        );
        //return $position;
        //echo ($position);
        return $this->db->insert('nonAcademic',$data);
    }

    //insert a teacher
    public function insert_teacher(){
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'middle_name' => $this->input->post('middle_name'),
            'last_name' => $this->input->post('last_name'),
            'nid' => $this->input->post('nid'),
            'dob' => $this->input->post('dob'),
            'home_address' => $this->input->post('home_address'),
            'current_address' => $this->input->post('current_address'),
            'previous_school' => $this->input->post('previous_school'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
        );

        return $this->db->insert('teacher',$data);
    }

    // insert a student
    public function insert_student(){
        $year = date("Y"); // year
        $month = date("m"); // month
        $random = rand(10,99); // random
        $s_id = $year.$month.$random;
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'middle_name' => $this->input->post('middle_name'),
            'last_name' => $this->input->post('last_name'),
            'dob' => $this->input->post('dob'),
            'home_address' => $this->input->post('home_address'),
            'current_address' => $this->input->post('current_address'),
            'previous_school' => $this->input->post('previous_school'),
            'entering_class' => $this->input->post('entering_class'),
            'email' => $this->input->post('email'),
            'mothers_name' => $this->input->post('mothers_name'),
            'mothers_id' => $this->input->post('mothers_id'),
            'mothers_job' => $this->input->post('mothers_job'),
            'mothers_working_address' => $this->input->post('mothers_working_address'),
            'mothers_email' => $this->input->post('mothers_email'),
            'fathers_name' => $this->input->post('fathers_name'),
            'fathers_id' => $this->input->post('fathers_id'),
            'fathers_job' => $this->input->post('fathers_job'),
            'fathers_working_address' => $this->input->post('fathers_working_address'),
            'fathers_email' => $this->input->post('fathers_email'),
            'password' => md5($this->input->post('password')),
            'student_id' => $s_id
        );

        return $this->db->insert('student',$data);
    }
}