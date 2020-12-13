<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Sub_kriteria extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url', 'form');
            $this->load->library('pagination');
            $this->load->library('form_validation');
            $this->load->model('Sub_Kriteria_model');

            // if($this->session->privilege != 'Administrator')
            // {
            //     redirect('home');
            // }
        }

        public function index()
        {
            $data = [
                'list' => $this->Sub_Kriteria_model->list(),
                'kriteria'=> $this->Sub_Kriteria_model->get_kriteria(),
                'count_kriteria'=> $this->Sub_Kriteria_model->count_kriteria(),
                'sub_kriteria' => $this->Sub_Kriteria_model->list()
                
            ];
            $this->load->view('sub_kriteria/index', $data);
        }
        
        //menampilkan view create
        public function create()
        {
            $data = [
                'kriteria'=> $this->Sub_Kriteria_model->get_kriteria()
                
            ];
            $this->load->view('sub_kriteria/create',$data);
        }

        //menambahkan data ke database
        public function store()
        {
                $data = [
                    'id_kriteria' => $this->input->post('id_kriteria'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'nilai' => $this->input->post('nilai')
                ];
                
                $this->form_validation->set_rules('id_kriteria', 'ID Kriteria', 'required');
                $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
                $this->form_validation->set_rules('nilai', 'Nilai', 'required');

                
    
                if ($this->form_validation->run() != false) {
                    $result = $this->Sub_Kriteria_model->insert($data);
                    helper_log("add", "menambahkan sub_kriteria");
                    if ($result) {
                        redirect('sub_kriteria');
                    }
                } else {
                    $this->session->set_flashdata('message', 'Semua Data Harus Diisi');
                    redirect('sub_kriteria/create');
                    
                }
            

        }

        public function show($id_sub_kriteria)
        {
            $sub_kriteria = $this->Sub_Kriteria_model->show($id_sub_kriteria);
            $get_kriteria = $this->Sub_Kriteria_model->get_kriteria();
            $data = [
                'data' => $sub_kriteria
            ];
            $this->load->view('sub_kriteria/show', $data);
        }

        public function edit($id_sub_kriteria)
        {
            $sub_kriteria = $this->Sub_Kriteria_model->show($id_sub_kriteria);
            $data = [
                'sub_kriteria' => $sub_kriteria,
                'kriteria'=> $this->Sub_Kriteria_model->get_kriteria()
            ];
            $this->load->view('sub_kriteria/edit', $data);
        }
    
        public function update($id_sub_kriteria)
        {
            // TODO: implementasi update data berdasarkan $id_sub_kriteria
            $id_sub_kriteria = $this->input->post('id_sub_kriteria');
            $data = array(
                'id_kriteria' => $this->input->post('id_kriteria'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'nilai' => $this->input->post('nilai')
            );

            $this->Sub_Kriteria_model->update($id_sub_kriteria, $data);
            helper_log("edit", "mengubah data sub_kriteria");
            redirect('sub_kriteria');
        }
    
        public function destroy($id_sub_kriteria)
        {
            $this->Sub_Kriteria_model->delete($id_sub_kriteria);
            helper_log("delete", "menghapus data sub_kriteria");
            redirect('sub_kriteria');
        }
    
    }
    
    /* End of file Kategori.php */
    