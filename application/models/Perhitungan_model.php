<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Perhitungan_model extends CI_Model {

        public function list()
        {
            $query = $this->db->get('penilaian');
            return $query->result();
        }

      
        public function tambah_penilaian($id_user,$id_daron,$id_kriteria,$nilai)
        {
            $query = $this->db->simple_query("INSERT INTO penilaian VALUES (DEFAULT,'$id_user','$id_daron','$id_kriteria',$nilai);");
            return $query;	
        }

      

       
        public function edit_penilaian($id_user,$id_daron,$id_kriteria,$nilai)
        {
            $query = $this->db->simple_query("UPDATE penilaian SET nilai=$nilai WHERE id_user='$id_user' AND id_daron='$id_daron' AND id_kriteria='$id_kriteria';");
            return $query;	
        }


        public function delete($id_penilaian)
        {
            $this->db->where('id_penilaian', $id_penilaian);
            $this->db->delete('penilaian');
        }

       
        public function get_kriteria()
        {
            $query = $this->db->get('kriteria');
            return $query->result();
        }
        public function get_daron()
        {
            $query = $this->db->query("SELECT * FROM data_daron WHERE status='aktif';");
            return $query->result();
        }
        public function get_sub_kriteria()
        {
            $query = $this->db->get('sub_kriteria');
            return $query->result();
        }
        public function penilaian_type($id_daron)
        {
            $query = $this->db->query("SELECT * FROM sub_kriteria JOIN data_daron ON sub_kriteria.id_sub_kriteria=data_daron.type WHERE data_daron.id_daron='$id_daron';");
            return $query->row_array();		
        }
        public function cek_data_penilaian($id_user)
        {
            $query = $this->db->query("SELECT * FROM penilaian WHERE id_user='$id_user';");
            return $query->row_array();
        }

        public function data_penilaian($id_user,$id_daron,$id_kriteria)
        {
            $query = $this->db->query("SELECT * FROM penilaian WHERE  id_user='$id_user' AND id_daron='$id_daron' AND id_kriteria='$id_kriteria';");
            return $query->row_array();
        }
        public function untuk_tombol($id_user,$id_daron)
	{
		$query = $this->db->query("SELECT * FROM penilaian WHERE id_user='$id_user' AND id_daron='$id_daron';");
		return $query->num_rows();
    }
    public function data_sub_kriteria($id_kriteria)
	{
		$query = $this->db->query("SELECT * FROM sub_kriteria WHERE id_kriteria='$id_kriteria' ORDER BY nilai DESC;");
		return $query->result_array();
    }
    public function data_nilai($id_user,$id_daron,$id_kriteria)
	{
		$query = $this->db->query("SELECT * FROM penilaian JOIN sub_kriteria WHERE penilaian.nilai=sub_kriteria.id_sub_kriteria AND penilaian.id_user='$id_user'  AND penilaian.id_daron='$id_daron' AND penilaian.id_kriteria='$id_kriteria';");
		return $query->row_array();
    }
    
    //mengambil nilai dari penilaian untuk dihitung
    //1. mengambil nilai masing" kriteria untuk dicari nilai min dan max
    
    public function get_nilai($id_user,$id_kriteria)
	{
		$query = $this->db->query("SELECT sub_kriteria.nilai FROM `penilaian` JOIN sub_kriteria ON penilaian.nilai=sub_kriteria.id_sub_kriteria WHERE penilaian.id_user='$id_user' AND penilaian.id_kriteria='$id_kriteria';");
		return $query->result_array();
    }
    public function get_jenis($id_user,$id_kriteria)
	{
		$query = $this->db->query("SELECT kriteria.jenis FROM `penilaian` JOIN kriteria ON penilaian.id_kriteria=kriteria.id_kriteria WHERE penilaian.id_user='$id_user' AND penilaian.id_kriteria='$id_kriteria';");
		return $query->result_array();
    }
    public function get_jenis_nilai($id_user,$id_daron,$id_kriteria)
	{
    $query = $this->db->query("SELECT sub_kriteria.nilai,kriteria.jenis FROM `penilaian` 
    JOIN sub_kriteria ON penilaian.nilai=sub_kriteria.id_sub_kriteria
    JOIN kriteria ON penilaian.id_kriteria=kriteria.id_kriteria
    WHERE penilaian.id_user='$id_user' AND penilaian.id_daron='$id_daron'  AND penilaian.id_kriteria='$id_kriteria';");
    return $query->row_array();
    }

    public function get_max_min($id_user,$id_kriteria)
	{
    $query = $this->db->query("SELECT max(sub_kriteria.nilai) as max, min(sub_kriteria.nilai) as min, sub_kriteria.nilai as nilai, 
    kriteria.jenis FROM `penilaian` 
    JOIN sub_kriteria ON penilaian.nilai=sub_kriteria.id_sub_kriteria 
    JOIN kriteria ON penilaian.id_kriteria=kriteria.id_kriteria 
    WHERE penilaian.id_user='$id_user' AND penilaian.id_kriteria='$id_kriteria';");
    return $query->row_array();
    }
    public function hasil($id_daron)
	{
		$query = $this->db->query("SELECT * FROM data_daron WHERE id_daron='$id_daron';");
		return $query->row_array();		
    }


    //menyimpan, mengubah db hasil keputusan
        public function simpan_hasil($data = [])
        {
            $result = $this->db->insert('hasil_keputusan', $data);
            return $result;
        }

        public function update_hasil($id_user,$id_daron)
        {
            $query = $this->db->simple_query("UPDATE hasil_keputusan SET hasil='$id_daron' WHERE id_user='$id_user' ;");
            return $result;	
        }

        public function cek_simpan($id_user,$id_daron)
        {
            $query = $this->db->query("SELECT * FROM hasil_keputusan WHERE id_user='$id_user' AND hasil='$id_daron';");
            return $query->num_rows();
        }

    
       

        
    }
    
    /* End of file Kategori_model.php */
    