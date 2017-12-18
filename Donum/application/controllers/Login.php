<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    // direct to portal
    public function portal(){
        $type = $this->session->userdata('type');

        if ($type == 1){
            redirect('admin/panel');
        }
        else if ($type == 2){
            $sid = $this->session->userdata('username');
            redirect('student/profile/'.$sid);
        }
        else if ($type == 3){
            redirect('teacher/profile');
        }
    }

    // login controller
    public function index()
    {
        $data['title'] = 'Login';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        }
        else {
            $type = $this->input->post('type');
            $username = $this->input->post('username');
            if ($type == 1){
                $password = $this->input->post('password'); // because admin password is not encrypted
            }
            else{
                $password = md5($this->input->post('password'));
            }

            $temp = $this->login_model->login($type, $username, $password);

            if ($temp){
                // create session
                $user_data = array(
                    'type' => $type,
                    'username' => $username,
                    'logged_in' => true,
                    'name' => $temp->first_name
                );
                $this->session->set_userdata($user_data);

                if ($type == 1){
                    //set message for admin
                    $this->session->set_flashdata('user_logged_in', 'You are now logged in as admin');
                    redirect('admin/panel');
                }
                else if ($type == 2){
                    //set message for student
                    $this->session->set_flashdata('user_logged_in', 'You are now logged in as student');
                    $sid = $this->session->userdata('username');
                    redirect('student/profile/'.$sid);
                }
                else if ($type == 3){
                    //set message for teacher
                    $this->session->set_flashdata('user_logged_in', 'You are now logged in as teacher');
                    $tid = $this->session->userdata('username');
                    redirect('teacher/profile/'.$tid);
                }
            }
            else {
                //set message
                $this->session->set_flashdata('login_failed', 'Login failed');
                redirect('login');
            }
        }
    }
}
