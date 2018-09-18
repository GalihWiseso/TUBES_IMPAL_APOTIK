<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_obat extends CI_Model {

    public function getobat() {
        return $this->db->query("select * from obat")->result();
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