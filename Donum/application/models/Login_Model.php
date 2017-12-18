<?php

class Login_Model extends CI_Model{
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
}