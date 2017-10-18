<?php

class Register_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }



    // get non academic positions
    public function get_positions(){
        $query = $this->db->select('position,position_id')->from('non_academic_positions')->get();
        return $query->result();
    }

    //insert a non academic
    public function insert_nonAcademic(){
        $temp = 'position';
        $position = $this->db->select('position')->from('non_academic_positions')->where('position_id','2')->get();
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
            'password' => $this->input->post('password'),
        );
        //echo ($position);
        return $this->db->insert('nonAcademic',$data);
    }

    //insert a teacher
    public function insert_teacher(){
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'middle_name' => $this->input->post('middle_name'),
            'last_name' => $this->input->post('last_name'),
            'dob' => $this->input->post('dob'),
            'home_address' => $this->input->post('home_address'),
            'current_address' => $this->input->post('current_address'),
            'previous_school' => $this->input->post('previous_school'),
            'email' => $this->input->post('email'),
            'nid' => $this->input->post('nid'),
            'password' => $this->input->post('password'),
            );

        return $this->db->insert('teacher',$data);
    }

    // insert a student
    public function insert_student(){
        //$s_id = date(date_timestamp_get());
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
            'password' => $this->input->post('password'),
            //'student_id' => $this->$s_id
        );

        return $this->db->insert('student',$data);
    }
}