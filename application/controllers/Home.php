<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->model('Pegawai_model', 'model');
		$data = [
			'judul'		=> 'Data Pegawai',
			'pegawai'	=> $this->model->ambil()
		];
		$this->load->view('v_index', $data);
	}

	public function tambah(){
		$this->load->model('Pegawai_model', 'model');
		$this->model->tambah();
	}

	public function hapus($pc_id){
		$this->db->delete('pgw_calon', ['pc_id' => $pc_id]);
	}


}
