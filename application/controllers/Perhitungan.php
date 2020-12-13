<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Perhitungan extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url', 'form');
            $this->load->library('pagination');
            $this->load->library('form_validation');
            $this->load->model('Perhitungan_model');

            // if($this->session->privilege != 'Administrator')
            // {
            //     redirect('home');
            // }
        }

        public function index()
        {
            $id_user = $this->session->userdata('id_user');
            $data = [
                'list' => $this->Perhitungan_model->list(),
                'kriteria'=> $this->Perhitungan_model->get_kriteria(),
                'alternatif'=> $this->Perhitungan_model->get_daron(),
                'sub_kriteria'=> $this->Perhitungan_model->get_sub_kriteria(),
                'perhitungan' => $this->Perhitungan_model->list(),
                'cek_penilaian' => $this->Perhitungan_model->cek_data_penilaian($id_user),
                
            ];
            // $tenaga_kerja=$this->Perhitungan_model->get_naker();
            // echo var_dump($tenaga_kerja);
            $this->load->view('Perhitungan/perhitungan', $data);
        }
        
  
        public function tambah_penilaian()
        {
            
            $id_user = $this->session->userdata('id_user');
            $id_daron = $this->input->post('id_daron');
            $id_kriteria = $this->input->post('id_kriteria');
            $nilai = $this->input->post('nilai');
            $i = 0;
            echo var_dump($nilai);
            foreach ($nilai as $key) {
                $this->Perhitungan_model->tambah_penilaian($id_user,$id_daron,$id_kriteria[$i],$key);
                $i++;
            }
            redirect('perhitungan');
        }

        

        public function update_penilaian()
	{
		$id_user = $this->session->userdata('id_user');
		$id_daron = $this->input->post('id_daron');
		$id_kriteria = $this->input->post('id_kriteria');
		$nilai = $this->input->post('nilai');
		$i = 0;

		foreach ($nilai as $key) {
			$cek = $this->Perhitungan_model->data_penilaian($id_user,$id_daron,$id_kriteria[$i]);
			if ($cek==0) {
				$this->Perhitungan_model->tambah_penilaian($id_user,$id_daron,$id_kriteria[$i],$key);
			} else {
				$this->Perhitungan_model->edit_penilaian($id_user,$id_daron,$id_kriteria[$i],$key);	
			}
			$i++;
		}

		redirect('perhitungan');
    }
    public function simpan_hasil($id_user,$id_daron)
    {
        
        $data = array(
            'id_user' => $id_user,
            'hasil' => $id_daron
        );

        $this->Perhitungan_model->simpan_hasil($data);
        helper_log("add", "menambahkan data keputusan");
        redirect('Perhitungan');
    }

    public function update_hasil($id_user,$id_daron)
    {
        
        $this->Perhitungan_model->update_hasil($id_user,$id_daron);
        helper_log("edit", "mengubah data keputusan");
        redirect('Perhitungan');
    }

    
    
    }
    
    /* End of file Kategori.php */
    