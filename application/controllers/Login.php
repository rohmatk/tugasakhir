<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url', 'form');
        $this->load->model('Login_model');
        $this->load->model('User_model');
    }
    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $passwordx = md5($password);
        $set = $this->Login_model->login($username, $passwordx);
        if($set)
        { 
            $log = [
                'id_user' => $set->id_user,
                'username' => $set->username,
                'id_user_level' => $set->id_user_level,
                'status' => 'Logged'
            ];
            $this->session->set_userdata($log);            

            helper_log("Login", "Login");
            $this->load->view('admin/index');
          
        }
        else
        {
            $this->session->set_flashdata('message', 'Username atau Password Salah');
            redirect('login');
        }
        
    }

    public function register()
    { 
        $this->load->view('register');
    }

    public function daftar()
        {
            
                $data = [
                    'id_user_level' => '2',
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password'))
                ];
                
                $this->form_validation->set_rules('email', 'email', 'required');
                $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
                $this->form_validation->set_rules('password', 'Password', 'required');

                
    
                if ($this->form_validation->run() != false) {
                    $result = $this->User_model->insert($data);
                    //helper_log("add", "menambahkan user");
                    if ($result) {
                        redirect('login');
                    }
                } else {
                    redirect('login/register');
                    
                }
            

        }
    public function logout()
    { 
        $this->session->sess_destroy();
        helper_log("logout", "Logout");
        redirect('login');
    }

    public function home()
    { 
        $this->load->view('admin/index');
    }
}

/* End of file Login.php */
?>
