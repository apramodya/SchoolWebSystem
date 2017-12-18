<?php
class Student_Model extends CI_Model{
    public function get_students(){
        // get students details
        $query = $this->db
            ->select('*')
            ->from('student')
            ->get();
        return $query->result_array();
    }

    public function get_student($sid){
        // get student details
        $query = $this->db
            ->select('*')
            ->from('student')
            ->where('student_id',$sid)
            ->get();
        return $query->row_array();
    }

    public function update_student($sid){
        $data = array(
            'middle_name' => $this->input->post('middle_name'),
            'home_address' => $this->input->post('home_address'),
            'current_address' => $this->input->post('current_address'),
            'email' => $this->input->post('email'),
            'mothers_job' => $this->input->post('mothers_job'),
            'mothers_working_address' => $this->input->post(''),
            'mothers_email' => $this->input->post(''),
            'fathers_job' => $this->input->post(''),
            'fathers_working_address' => $this->input->post(''),
            'fathers_email' => $this->input->post('')
        );

        return $this->db
            ->where('student_id',$sid)
            ->update('student',$data);
    }
}