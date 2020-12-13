<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url', 'form');
            $this->load->library('pagination');
            $this->load->library('form_validation');
            $this->load->model('User_model');

            // if($this->session->privilege != 'Administrator')
            // {
            //     redirect('home');
            // }
        }

        public function index()
        { 
            $data = [
                'list' => $this->User_model->list(),
                'user_level'=> $this->User_model->user_level()
                
            ];
            $this->load->view('user/index', $data);
        }
        
        public function create()
        {
            $data['user_level'] = $this->User_model->user_level();
            $this->load->view('User/create',$data);
        }

        public function store()
        {
            
                $data = [
                    'id_user_level' => $this->input->post('privilege'),
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password'))
                ];
                
                $this->form_validation->set_rules('email', 'email', 'required');
                $this->form_validation->set_rules('privilege', 'ID User Level', 'required');
                $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
                $this->form_validation->set_rules('password', 'Password', 'required');

                
    
                if ($this->form_validation->run() != false) {
                    $result = $this->User_model->insert($data);
                    helper_log("add", "menambahkan user");
                    if ($result) {
                        redirect('User');
                    }
                } else {
                    $this->session->set_flashdata('message', 'Semua Data Harus Diisi');
                    redirect('User/create');
                    
                }
            

        }

        public function show($id_user)
        {
            $User = $this->User_model->show($id_user);
            $user_level = $this->User_model->user_level();
            $data = [
                'data' => $User,
                'user_level'=>$user_level
            ];
            $this->load->view('User/show', $data);
        }

        public function edit($id_user)
        {
            $User = $this->User_model->show($id_user);
            $user_level = $this->User_model->user_level();
            $data = [
                'User' => $User,
                'user_level'=>$user_level
            ];
            $this->load->view('User/edit', $data);
        }
    
        public function update($id_user)
        {
            // TODO: implementasi update data berdasarkan $id_user
            $id_user = $this->input->post('id_user');
            $data = array(
                'id_user_level' => $this->input->post('privilege'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
            );

            $this->User_model->update($id_user, $data);
            helper_log("edit", "mengubah data user");
            redirect('User');
        }
    
        public function destroy($id_user)
        {
            $this->User_model->delete($id_user);
            helper_log("delete", "menghapus data user");
            redirect('User');
        }
    
    }
    
    /* End of file Kategori.php */
    