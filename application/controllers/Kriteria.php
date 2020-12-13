<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kriteria extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url', 'form');
            $this->load->library('pagination');
            $this->load->library('form_validation');
            $this->load->model('Kriteria_model');

            // if($this->session->privilege != 'Administrator')
            // {
            //     redirect('home');
            // }
        }

        public function index()
        {
            $data = [
                'list' => $this->Kriteria_model->list()
                
            ];
            $this->load->view('kriteria/index', $data);
        }
        
        //menampilkan view create
        public function create()
        {
     
            $this->load->view('kriteria/create');
        }

        //menambahkan data ke database
        public function store()
        {
                $data = [
                    'keterangan' => $this->input->post('keterangan'),
                    'kode_kriteria' => $this->input->post('kode_kriteria'),
                    'bobot' => $this->input->post('bobot'),
                    'jenis' => $this->input->post('jenis')
                ];
                
                $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
                $this->form_validation->set_rules('kode_kriteria', 'Kode Kriteria', 'required');
                $this->form_validation->set_rules('bobot', 'Bobot', 'required');
                $this->form_validation->set_rules('jenis', 'Jenis', 'required');

                
    
                if ($this->form_validation->run() != false) {
                    $result = $this->Kriteria_model->insert($data);
                    helper_log("add", "menambahkan kriteria");
                    if ($result) {
                        redirect('Kriteria');
                    }
                } else {
                    $this->session->set_flashdata('message', 'Semua Data Harus Diisi');
                    redirect('Kriteria/create');
                    
                }
            

        }

        public function show($id_kriteria)
        {
            $kriteria = $this->Kriteria_model->show($id_kriteria);
            $kriteria_level = $this->Kriteria_model->kriteria_level();
            $data = [
                'data' => $kriteria
            ];
            $this->load->view('kriteria/show', $data);
        }

        public function edit($id_kriteria)
        {
            $kriteria = $this->Kriteria_model->show($id_kriteria);
            $data = [
                'kriteria' => $kriteria
            ];
            $this->load->view('kriteria/edit', $data);
        }
    
        public function update($id_kriteria)
        {
            // TODO: implementasi update data berdasarkan $id_kriteria
            $id_kriteria = $this->input->post('id_kriteria');
            $data = array(
                'keterangan' => $this->input->post('keterangan'),
                'kode_kriteria' => $this->input->post('kode_kriteria'),
                'bobot' => $this->input->post('bobot'),
                'jenis' => $this->input->post('jenis')
            );

            $this->Kriteria_model->update($id_kriteria, $data);
            helper_log("edit", "mengubah data kriteria");
            redirect('kriteria');
        }
    
        public function destroy($id_kriteria)
        {
            $this->Kriteria_model->delete($id_kriteria);
            helper_log("delete", "menghapus data kriteria");
            redirect('kriteria');
        }
    
    }
    
    /* End of file Kategori.php */
    