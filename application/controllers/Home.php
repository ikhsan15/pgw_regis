<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    parent::__construct();
		error_reporting(0);
    $this->load->model('M_pegawai');
  }
	
	public function index($mode = ''){
		$hSQL		= str_replace(' ', '+', $this->input->get('hSQL'));
		$rNum		= $this->input->get('rNum');
		// $pc_id	= '';
		$pc_nama		= '';
		$pf_nama		= '';
		$ppend_nama	= '';

		if($mode == 'crud'){
			// die('abc');
      $action		= $this->input->post('submit_crud');
			if($action == 'simpan'){
				// die(print_r('tessssss'));
				$nama_peg		= $this->input->post('nama_peg');
				$data	= array(
					'pc_nama'		=> pg_escape_string($nama_peg)
				);
				// die(print_r($data));
				$rNum	= $this->M_pegawai->insert_table('public.pgw_calon', $data);
				
				$pf_nama		= $this->input->post('pf_nama');
				$data	= array(
					'pc_id'   => $rNum,
					'pf_nama'			=> pg_escape_string($pf_nama)
				);
				$this->M_pegawai->insert_table('public.pgw_keluarga', $data);

				$ppend_nama	= $this->input->post('ppend_nama');
				$data	= array(
					'pc_id'   => $rNum,
					'ppend_nama'	=> pg_escape_string($ppend_nama)
				);
				$this->M_pegawai->insert_table('public.pgw_pendidikan', $data);

				redirect($this->router->fetch_class().'/'.$this->router->fetch_method().'/?rNum='.$rNum);
				// redirect(base_url());
			}
			elseif($action == 'reset'){
				redirect(base_url());
			}
		}

		$data['current_url']	  = current_url();
		$data['class']			= $this->router->fetch_class();
		$data['method']			= $this->router->fetch_method();
		$data['hSQL']			  = $hSQL;
		$data['rNum']			  = $rNum;
		// $data['pc_id']			= $pc_id;
		$data['pc_nama']		= $pc_nama;
		$data['pf_nama']		= $pf_nama;
		$data['ppend_nama']	= $ppend_nama;
		$data['rec_peg']		= $this->db->query("SELECT * FROM public.v_data_calon_pegawai");
		
		$this->load->view('v_index', $data);
	}

	public function hapus($pc_id){
		$this->db->delete('pgw_calon', ['pc_id' => $pc_id]);
	}


}
