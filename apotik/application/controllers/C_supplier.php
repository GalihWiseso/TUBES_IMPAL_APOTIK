<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_supplier extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->model('m_obat');
			$this->load->library('session');
        }
        public function index(){
            $data['data']=$this->m_obat->getobat();
            $this->load->view('data_obat',$data);
        }
    }
?>