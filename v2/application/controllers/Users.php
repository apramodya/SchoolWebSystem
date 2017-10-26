<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/22/17
 * Time: 9:50 PM
 */

class Users extends CI_Controller{
    // register controllers
    public function index(){
        if ($this->session->userdata('type') == '1')
            $this->load->view('includes/header');
        else if ($this->session->userdata('type') == '3')
            $this->load->view('includes/teachers_header');
        $this->load->view('welcome');
    }

    // admins news feed
    public function newsFeed(){
        // check session
        if ($this->session->userdata('type') != '1') //  is admin?
            redirect('users/login');

        $data['news'] = $this->user_model->get_news();

        $this->load->view('includes/header');
        $this->load->view('users/register/newsfeed',$data);
    }

    // admins post news
    public function postNews(){
        // check session is for a admin only
        if ($this->session->userdata('type') != '1')
            redirect('users/login');

        $posted_by = $this->session->userdata('username');

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('news','News','required');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/header');
            $this->load->view('users/register/postNews');
        }else{
            $this->user_model->insert_post($posted_by);
            redirect('users/newsFeed');
        }
    }

    // register users
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
            redirect('users/register');
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
        $this->form_validation->set_rules('nid','ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('password','Password','required|min_length[1]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/header');
            $this->load->view('users/register/nonAcademic',$data);
        }else{
            print_r($this->user_model->insert_nonAcademic());
            redirect('users/register');
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
            redirect('users/register');
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
        $this->form_validation->set_rules('nid','ID','required|min_length[10]|max_length[12]');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');
        $this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');

        if ( $this->form_validation->run() === FALSE){
            $this->load->view('includes/header');
            $this->load->view('users/register/teacher',$data);
        }else{
            $this->user_model->insert_teacher();
            redirect('users/register');
        }
    }

    // logout controller
    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('type');
        $this->session->unset_userdata('username');

        //set message
        $this->session->set_flashdata('user_logged_out', 'You are now logged out');
        redirect('users/login');
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
            if ($type == 1){
                $password = $this->input->post('password'); // because admin password is not encrypted
            }
            else{
                $password = md5($this->input->post('password'));
            }

            $temp = $this->user_model->login($type, $username, $password);

            if ($temp) {
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
                    redirect('users/register');
                }
                else if ($type == 2){
                    //set message for student
                    $this->session->set_flashdata('user_logged_in', 'You are now logged in as student');
                    redirect('student/index');
                }
                else if ($type == 3){
                    //set message for teacher
                    $this->session->set_flashdata('user_logged_in', 'You are now logged in as teacher');
                    //redirect('users/index');
                    redirect('teacher/index');
                }
                else if ($type == 4){
                    //set message for parent
                    $this->session->set_flashdata('user_logged_in', 'You are now logged in as parent');
                    redirect('parent/index');
                }
                else if ($type == 5){
                    //set message for non academic
                    $this->session->set_flashdata('user_logged_in', 'You are now logged in as non academic');
                    redirect('nonAcademic/index');
                }

            } else {
                //set message
                $this->session->set_flashdata('login_failed', 'Login failed');
                redirect('users/login');
            }
        }
    }

}