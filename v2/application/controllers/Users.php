<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/22/17
 * Time: 9:50 PM
 */

class Users extends CI_Controller{
    // register controllers
    public function register(){
        // check session is for an admin only
        if ($this->session->userdata('type') != '1') // type 1 is for admin only
            redirect('users/login');

        $data['title'] = 'Registration Page';

        $this->load->view('includes/header');
        $this->load->view('users/register/index',$data);
    }

    // register parent
    public function registerParent()
    {
        // check session is for an admin only
        if ($this->session->userdata('type') != '1') // type 1 is for admin only
            redirect('users/login');

        $data['title'] = "Register Parent";

        $this->form_validation->set_rules('student_id','Student ID','required');
        $this->form_validation->set_rules('password','Password','required|min_length[1]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/header');
            $this->load->view('users/register/parent',$data);
        }else{
            $this->user_model->insert_parent();
            redirect('register');
        }

    }

    // register non academic
    public function registerNonacademic()
    {
        // check session is for an admin only
        if ($this->session->userdata('type') != '1') // type 1 is for admin only
            redirect('users/login');

        $data['positions'] = $this->user_model->get_positions();

        $data['title'] = "Register Non-Academic";

        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('dob','Date of Birth','required');
        $this->form_validation->set_rules('home_address','Address','required');
        $this->form_validation->set_rules('id','ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('password','Password','required|min_length[1]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/header');
            $this->load->view('users/register/nonAcademic',$data);
        }else{
            $this->user_model->insert_nonAcademic();
            redirect('register');
        }
    }

    //register student
    public function registerStudent()
    {
        // check session is for an admin only
        if ($this->session->userdata('type') != '1') // type 1 is for admin only
            redirect('users/login');

        $data['title'] = "Register Student";

        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('dob','Date of Birth','required');
        $this->form_validation->set_rules('home_address','Address','required');
        $this->form_validation->set_rules('mothers_name','Mothers Name','required');
        $this->form_validation->set_rules('mothers_id','Mothers ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('fathers_name','Fathers Name','required');
        $this->form_validation->set_rules('fathers_id','Fathers ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');


        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/header');
            $this->load->view('users/register/student',$data);
        }else{
            $this->user_model->insert_student();
            redirect('register');
        }
    }

    // register teacher
    public function registerTeacher()
    {
        // check session is for an admin only
        if ($this->session->userdata('type') != '1') // type 1 is for admin only
            redirect('users/login');

        $data['title'] = "Register Teacher";

        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('dob','Date of Birth','required');
        $this->form_validation->set_rules('home_address','Address','required');
        $this->form_validation->set_rules('id','ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/header');
            $this->load->view('users/register/teacher',$data);
        }else{
            $this->user_model->insert_teacher();
            redirect('register');
        }
    }

    // logout controller
    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('type');
        $this->session->unset_userdata('username');

        //set message
        $this->session->set_flashdata('user_logged_out', 'You are now logged out');
        redirect('welcome');
    }

    // login controller
    public function login()
    {
        $data['title'] = 'Login';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('includes/header');
            $this->load->view('users/login');
        } else {
            $type = $this->input->post('type');
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $temp = $this->user_model->login($type, $username, $password);

            if ($temp) {
                // create session
                $user_data = array(
                    'type' => $type,
                    'username' => $username,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);

                //set message
                $this->session->set_flashdata('user_logged_in', 'You are now logged in');
                redirect('users/register');
            } else {
                //set message
                $this->session->set_flashdata('login_failed', 'Login failed');
                redirect('users/login');
            }
        }
    }

}