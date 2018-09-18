<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanan extends CI_Model {

    public function getpesanan() {
        return $this->db->query("select * from pesanan")->result();
    }
    public function search_mobil($nama,$harga){
        return $this->db->query("select * from mobil where nama like '%".$nama."%' or harga <= ".$harga)->result();
    }
	public function delete_mobil($id_mobil){
        $table = 'mobil';
        $this->db->where('id_mobil', $id_mobil);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}