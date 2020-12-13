<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Alternatif extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url', 'form');
            $this->load->library('pagination');
            $this->load->library('form_validation');
            $this->load->model('Alternatif_model');

            // if($this->session->privilege != 'Administrator')
            // {
            //     redirect('home');
            // }
        }

        public function index()
        {
            $data = [
                'list' => $this->Alternatif_model->list(),
                'type' => $this->Alternatif_model->type()  
            ];
            $this->load->view('alternatif/index', $data);
        }
        
        //menampilkan view create
        public function create()
        {
            $data['type'] = $this->Alternatif_model->type();
            $this->load->view('alternatif/create',$data);
        }

        //menambahkan data ke database
        public function store()
        {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'type' => $this->input->post('type'),
                    'status' => $this->input->post('status')
                ];
                
                $this->form_validation->set_rules('nama', 'Nama', 'required');
                $this->form_validation->set_rules('type', 'Type', 'required');

                
    
                if ($this->form_validation->run() != false) {
                    $result = $this->Alternatif_model->insert($data);
                    helper_log("add", "menambahkan alternatif");
                    if ($result) {
                        redirect('alternatif');
                    }
                } else {
                    $this->session->set_flashdata('message', 'Semua Data Harus Diisi');
                    redirect('alternatif/create');
                    
                }
            

        }

        public function show($id_daron)
        {
            $alternatif = $this->Alternatif_model->show($id_daron);
            $data = [
                'data' => $alternatif
            ];
            $this->load->view('alternatif/show', $data);
        }

        public function edit($id_daron)
        {
            $alternatif = $this->Alternatif_model->show($id_daron);
            $data = [
                'alternatif' => $alternatif,
                'type' => $this->Alternatif_model->type()
            ];
            $this->load->view('alternatif/edit', $data);
        }
    
        public function update($id_daron)
        {
            // TODO: implementasi update data berdasarkan $id_naker
            $id_daron = $this->input->post('id_daron');
            $data = array(
                'nama' => $this->input->post('nama'),
                'type' => $this->input->post('type'),
                'status' => $this->input->post('status')
            );

            $this->Alternatif_model->update($id_daron, $data);
            helper_log("edit", "mengubah data alternatif");
            redirect('alternatif');
        }
    
        public function destroy($id_daron)
        {
            $this->Alternatif_model->delete($id_daron);
            helper_log("delete", "menghapus data alternatif");
            redirect('alternatif');
        }
    
    }
    
    /* End of file Kategori.php */
    