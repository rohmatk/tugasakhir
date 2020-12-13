<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class History extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url', 'form');
            $this->load->model('M_log');
           $this->load->model('User_model');
        }

        public function index()
        {
            
            $user = $this->User_model->get_user();
            $riwayat = $this->M_log->histori_admin();
            $data = [
                'user' => $user,
                'riwayat'=>$riwayat
            ];
            $this->load->view('history/history_admin', $data);
        }

        // public function riwayat_user()
        // {
        //     $id_user = $this->session->userdata('id_user');
        //     $data['riwayat'] = $this->User_model->getRiwayat($id_user);
        //     $this->load->view('sippko/historiorder', $data);
        // }

    }
    
    /* End of file .php */
