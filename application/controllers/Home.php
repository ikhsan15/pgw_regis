<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    parent::__construct();
		error_reporting(0);
		// $this->load->helper('security');
    $this->load->model('M_pegawai');
  }
	
	public function index(){
		$this->test();

		// $data['userlist'] = $this->M_pegawai->getUsers();
		// $this->load->view('user_view', $data);
	}

	public function test($mode = ''){
		$judul			= 'Data Pegawai';
		// $hSQL				= str_replace(' ', '+', $this->input->get('hSQL'));
		$rNum				= $this->input->get('rNum');
		$rNum2			= $this->input->get('rNum2');
		// $pc_id	= '';
		$pc_nama		= '';
		$pf_nama		= '';
		$ppend_nama	= '';
		

		if($mode == 'crud'){
      $action		= $this->input->post('submit_crud');

			if($action == 'simpan'){
				// insert into table pgw_calon
				$inp_pc_nama		= $this->input->post('inp_pc_nama');
				// die(print_r('A'.$inp_pc_nama.'B'));
				if($inp_pc_nama != ''){
					$data	= array(
						'pc_nama'		=> $inp_pc_nama
					);
					if($rNum > 0){
						$this->M_pegawai->update_table('public.pgw_calon', $data, 'pc_id='.$rNum);
					}
					elseif($rNum > 0 && $rNum2 > 0){
						$this->M_pegawai->update_table('public.pgw_calon', $data, 'pc_id='.$rNum);
					}
					else{
						// die(print_r('masuk'));
						$rNum	= $this->M_pegawai->insert_table('public.pgw_calon', $data);
					}
				}
				else{
					die(print_r('kosonggg'));
				}
								 
				// insert into table pgw_keluarga
				$jumlah = count($this->input->post('inp_pf_nama'));
				for($i=0; $i<$jumlah; $i++){
					$inp_pf_nama 			= $this->input->post('inp_pf_nama')[$i];
					$inp_pf_hubungan	= $this->input->post('inp_pf_hubungan')[$i];
					$data = array(
						'pc_id'				=> $rNum,
						'pf_nama'			=> $inp_pf_nama,
						'pf_hubungan'	=> $inp_pf_hubungan
					);
					if($rNum2 > 0){
						$this->M_pegawai->update_table('public.pgw_keluarga', $data, 'pf_id='.$rNum2);
					}
					else{
						$this->M_pegawai->insert_table('public.pgw_keluarga', $data);
					}
				}

				// insert into table pgw_pendidikan
				$ppend_nama	= $this->input->post('ppend_nama');
				$data	= array(
					'pc_id'   		=> $rNum,
					'ppend_nama'	=> $ppend_nama
				);
				
				if($rNum2 > 0){
					$this->M_pegawai->update_table('public.pgw_pendidikan', $data, 'pc_id='.$rNum);
				}
				else{
					$this->M_pegawai->insert_table('public.pgw_pendidikan', $data);
				}

				redirect($this->router->fetch_class().'/'.$this->router->fetch_method().'/?rNum='.$rNum);
			}
			elseif($action == 'hapus'){
				print_r('asd');
				// $this->db->delete('pgw_test', ['pt_id' => $pt_id]);
				$this->Mainmodel->delete_table('public.pgw_keluarga', 'pc_id='.$rNum);
				redirect($this->router->fetch_class().'/'.$this->router->fetch_method());
			}
			elseif($action == 'reset'){
				redirect(base_url());
			}
		}

		if($rNum > 0){
			// $orderByrNum	= " ORDER BY pc_id=".$rNum." desc, pc_id";
			$query_rnum		= "SELECT * FROM public.v_data_calon_pegawai WHERE pc_id = ".$rNum;
			$rhNum				= $this->db->query($query_rnum);
			$rrNum				= $rhNum->row();

			$nama_calon			= $rrNum->nama_calon;
			$nama_keluarga	= $rrNum->nama_keluarga;
			$status_di_keluarga	= $rrNum->status_di_keluarga;
    }
		if($rNum2 > 0){
			// $orderByrNum	= " ORDER BY pc_id=".$rNum." desc, pc_id";
			$query_rnum		= "SELECT * FROM public.v_data_calon_pegawai WHERE pc_id = ".$rNum." AND ( pf_id = ".$rNum2." OR ppend_id = ".$rNum2.")";
			$rhNum				= $this->db->query($query_rnum);
			$rrNum				= $rhNum->row();

			$nama_calon			= $rrNum->nama_calon;
			$nama_keluarga	= $rrNum->nama_keluarga;
			$status_di_keluarga	= $rrNum->status_di_keluarga;

			$nama_pendidikan	= $rrNum->nama_pendidikan;
    }

		// if($rNum2 > 0){
		// 	$query_rnum		= "SELECT * FROM public.pgw_keluarga WHERE pc_id = ".$rNum." AND pf_id = ".$rNum2;
		// 	$rhNum				= $this->db->query($query_rnum);
		// 	$rrNum				= $rhNum->row();

		// 	$pf_nama			= $rrNum->pf_nama;
		// 	$pf_hubungan	= $rrNum->pf_hubungan;
    // }

		$data['judul']				= $judul;
		$data['current_url']	= current_url();
		$data['class']				= $this->router->fetch_class();
		$data['method']				= $this->router->fetch_method();
		// $data['hSQL']			  	= $hSQL;
		$data['rNum']			  	= $rNum;
		$data['rNum2']				= $rNum2;
		
		// $data['pc_id']				= $pc_id;
		$data['nama_calon']					= $nama_calon;
		$data['nama_keluarga']			= $nama_keluarga;
		$data['status_di_keluarga']	= $status_di_keluarga;
		$data['nama_pendidikan']		= $nama_pendidikan;

		$data['pc_nama']						= $pc_nama;
		$data['pf_nama']						= $pf_nama;
		$data['pf_hubungan']				= $pf_hubungan;
		$data['ppend_nama']					= $ppend_nama;
		
		$data['rec_v_peg']		= $this->db->query("SELECT * FROM public.v_data_calon_pegawai");
		$data['rec_peg']			= $this->db->query("SELECT * FROM public.pgw_calon");
		$data['rec_kel']			= $this->db->query("SELECT * FROM public.pgw_keluarga");
		$data['rec_pend']			= $this->db->query("SELECT * FROM public.pgw_pendidikan");
		
		$this->load->view('v_index', $data);
	}

	public function updateuser(){
		// POST values
		$id = $this->input->post('id');
		$field = $this->input->post('field');
		$value = $this->input->post('value');

		// Update records
		$this->M_pegawai->updateUser($id, $field, $value);

		echo 1;
		exit;
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
