<?php

class Admin_Model extends CI_Model{

    //insert a teacher to db
    public function insert_teacher(){
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'middle_name' => $this->input->post('middle_name'),
            'last_name' => $this->input->post('last_name'),
            'nid' => $this->input->post('nid'),
            'dob' => $this->input->post('dob'),
            'date_entered' => $this->input->post('date_entered'),
            'home_address' => $this->input->post('home_address'),
            'current_address' => $this->input->post('current_address'),
            'previous_school' => $this->input->post('previous_school'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
        );

        return $this->db->insert('teacher',$data);
    }

    //insert a student to db
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
            'date_entered' => $this->input->post('date_entered'),
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
