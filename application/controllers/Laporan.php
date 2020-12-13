<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Laporan extends CI_Controller {
    
        public function __construct()
        {
            parent ::__construct();
            $this->load->library('pdf');
            $this->load->model('Perhitungan_model');
            
        }
 public function cetak_laporan()
    {
        
        $id_user= $this->session->userdata('id_user');
        $data = [
            'list' => $this->Perhitungan_model->list(),
            'kriteria'=> $this->Perhitungan_model->get_kriteria(),
            'alternatif'=> $this->Perhitungan_model->get_daron(),
            'sub_kriteria'=> $this->Perhitungan_model->get_sub_kriteria(),
            'perhitungan' => $this->Perhitungan_model->list(),
            'cek_penilaian' => $this->Perhitungan_model->cek_data_penilaian($id_user),
            
        ];
        
        
        $this->load->view('laporan', $data);
    }

    
    }
    
    /* End of file Laporan.php */
    