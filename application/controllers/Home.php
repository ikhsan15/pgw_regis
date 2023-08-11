<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    parent::__construct();
		error_reporting(0);
		// $this->load->helper('security');
    $this->load->model('M_pegawai');
  }
	
	public function index($mode = ''){
		$judul			= 'Data Pegawai';
		$hSQL				= str_replace(' ', '+', $this->input->get('hSQL'));
		$rNum				= $this->input->get('rNum');
		// $pc_id	= '';
		$pc_nama		= '';
		$pf_nama		= '';
		$ppend_nama	= '';
		

		if($mode == 'crud'){
      $action		= $this->input->post('submit_crud');

			if($action == 'simpan'){
				// insert into table pgw_calon
				$nama_peg		= $this->input->post('nama_peg');
				$data	= array(
					'pc_nama'		=> $nama_peg
				);
				$rNum	= $this->M_pegawai->insert_table('public.pgw_calon', $data);

				// insert into table pgw_test
				// $jumlah = count($this->input->post('pt_nama'));
				// for($i=0; $i<$jumlah; $i++){
				// 	$test_nama = $this->input->post('pt_nama')[$i];
				// 	$test_ket = $this->input->post('pt_ket')[$i];
				// 	$data = array(
				// 		'pc_id'	=> $rNum,
				// 		'pt_nama'=> $test_nama,
				// 		'pt_ket'=> $test_ket
				// 	);
				// 	$this->M_pegawai->insert_table('public.pgw_test', $data);
				// }
				
				// insert into table pgw_keluarga
				$jumlah = count($this->input->post('pf_nama'));
				for($i=0; $i<$jumlah; $i++){
					$nama_kel 			= $this->input->post('pf_nama')[$i];
					$hubungan_kel		= $this->input->post('pf_hubungan')[$i];
					$data = array(
						'pc_id'				=> $rNum,
						'pf_nama'			=> $nama_kel,
						'pf_hubungan'	=> $hubungan_kel
					);
					$this->M_pegawai->insert_table('public.pgw_keluarga', $data);
				}

				// $pf_nama		= $this->input->post('pf_nama');
				// $data	= array(
				// 	'pc_id'				=> $rNum,
				// 	'pf_nama'			=> $pf_nama,
				// 	'pf_hubungan'	=> $pf_hubungan
				// );
				// $this->M_pegawai->insert_table('public.pgw_keluarga', $data);

				// insert into table pgw_pendidikan
				$ppend_nama	= $this->input->post('ppend_nama');
				$data	= array(
					'pc_id'   		=> $rNum,
					'ppend_nama'	=> $ppend_nama
				);
				$this->M_pegawai->insert_table('public.pgw_pendidikan', $data);

				redirect($this->router->fetch_class().'/'.$this->router->fetch_method().'/?rNum='.$rNum);
			}
			elseif($action == 'hapus'){
				$this->Mainmodel->delete_table('public.pgw_keluarga', 'pc_id='.$rNum);
				redirect($this->router->fetch_class().'/'.$this->router->fetch_method());
			}
			elseif($action == 'reset'){
				redirect(base_url());
			}
		}

		$data['judul']				= $judul;
		$data['current_url']	= current_url();
		$data['class']				= $this->router->fetch_class();
		$data['method']				= $this->router->fetch_method();
		$data['hSQL']			  	= $hSQL;
		$data['rNum']			  	= $rNum;
		// $data['pc_id']				= $pc_id;
		$data['pc_nama']			= $pc_nama;
		$data['pf_nama']			= $pf_nama;
		$data['ppend_nama']		= $ppend_nama;
		$data['rec_v_peg']		= $this->db->query("SELECT * FROM public.v_data_calon_pegawai");
		$data['rec_peg']			= $this->db->query("SELECT * FROM public.pgw_calon");
		$data['rec_test']			= $this->db->query("SELECT * FROM public.pgw_keluarga");
		
		$this->load->view('v_index', $data);
	}

	public function hapus($pc_id){
		$this->db->delete('pgw_calon', ['pc_id' => $pc_id]);
		redirect(base_url());
	}

	public function hapus_test($pt_id){
		$this->db->delete('pgw_test', ['pt_id' => $pt_id]);
		redirect(base_url());
	}


}
