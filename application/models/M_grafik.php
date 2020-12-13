<?php
class M_grafik extends CI_Model{
 
    function get_data_stok(){
        $query = $this->db->query("SELECT id_user,SUM(kriteria) AS kriteria FROM id_kriteria GROUP BY id_user");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_user_stok($id_user, $tahun){
        $query = $this->db->query("SELECT * FROM id_kriteria WHERE id_user=$id_user AND YEAR(tgl_setoran)=$tahun");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
 
}