<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_admin extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
			$this->load->helper(array('url','form'));
			#$this->load->model('m_staff');
			$this->load->model('m_obat');
            $this->load->model('m_laporan');
            $this->load->model('m_pesanan');
            $this->load->model('m_komplain');
			$this->load->library('session');
        }
        public function index(){
            $data['data']=$this->m_obat->getobat();
            $this->load->view('v_index',$data);
        }
        public function data_obat(){
            $data['data']=$this->m_obat->getobat();
            $this->load->view('data_obat',$data);
        }
        public function searchmobil(){
            $this->load->view('searchmobil');
        }
        public function data_pesanan(){
            $data['data']=$this->m_pesanan->getpesanan();
            $this->load->view('data_pesanan',$data);
        }
        public function data_komplain(){
            $data['data']=$this->m_komplain->getkomplain();
            $this->load->view('data_komplain',$data);
        }
        public function tambahobat(){
            $data['data']=$this->m_obat->getobat();
            $this->load->view('tambahobat',$data);
        }
        public function laporan(){
            $data['data']=$this->m_laporan->getlaporan();
            $this->load->view('laporan',$data);
        }
        public function search_data_obat(){
            $nama_obat = $this->input->post('nama_obat');
            $harga = $this->input->post('harga');
            $data['data']=$this->m_obat->search_obat($nama_obat,$harga);
            $this->load->view('tambahobat',$data);
        }
        public function proses_tambah_obat(){
            $data = array(
                'nama_obat' => $this->input->post('nama_obat'),
                'jenis' => $this->input->post('jenis'),
                'stock' => $this->input->post('stock'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pict' => $this->input->post('pict'),
            );
            $query
            $this->db->insert('obat',$data);

        redirect('C_admin/tambahobat');
	    }
	public function proses_tambah_komplain(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'komplain' => $this->input->post('komplain'),
            );
            $query
            $this->db->insert('komplain',$data);
        redirect('C_admin/tambahkomplain');
	    }	
		
        public function proses_update_obat(){
            $data = array(
                'nama_obat' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis'),
                'stock' => $this->input->post('stock'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pict' => $this->input->post('pict'),
            );
            $no_obat=$this->input->post('no_obat');
            $this->db->where('no_obat',$no_obat);
            $this->db->update('obat',$data);

            redirect('C_admin/tambahobat');
        }        
        public function proses_delete_obat(){
            $this->m_obat->delete_obat($this->input->post('no_obat'));
            redirect('C_admin/tambahobat');

        }
	}
?>
