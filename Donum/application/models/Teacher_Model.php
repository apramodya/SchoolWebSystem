<?php
class Teacher_Model extends CI_Model{
    public function get_teachers(){
        // get teacher details
        $query = $this->db->select('*')->from('teacher')->get();
        return $query->result_array();
    }

    public function get_teacher($tid){
        // get teacher details
        $query = $this->db
            ->select('*')
            ->from('teacher')
            ->where('nid',$tid)
            ->get();
        return $query->row_array();
    }

    public function update_teacher($tid){
        //update teacher details
        $data = array(
            'middle_name' => $this->input->post('middle_name'),
            'home_address' => $this->input->post('home_address'),
            'current_address' => $this->input->post('current_address'),
            'email' => $this->input->post('email'),
        );

        return $this->db
            ->where('nid',$tid)
            ->update('teacher',$data);
    }
}