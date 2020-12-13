<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Alternatif_model extends CI_Model {

        public function list()
        {
            $query = $this->db->get('data_daron');
            return $query->result();
        }

        public function getTotal()
        {
            return $this->db->count_all('data_daron');
        }

        public function insert($data = [])
        {
            $result = $this->db->insert('data_daron', $data);
            return $result;
        }

        public function show($id_daron)
        {
            $this->db->where('id_daron', $id_daron);
            $query = $this->db->get('data_daron');
            return $query->row();
        }

        public function update($id_daron, $data = [])
        {
            $ubah = array(
                'nama'  => $data['nama'],
                'type'  => $data['type'],
                'status'  => $data['status'],
            );

            $this->db->where('id_daron', $id_daron);
            $this->db->update('data_daron', $ubah);
        }


        public function delete($id_daron)
        {
            $this->db->where('id_daron', $id_daron);
            $this->db->delete('data_daron');
        }

        public function type()
	{
		$query = $this->db->query("SELECT * FROM sub_kriteria WHERE id_kriteria='1';");
		return $query->result();		
    }

   

       

        
    }
    
    /* End of file Kategori_model.php */
    