<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalonPgw extends CI_Controller {

	function __construct(){
    parent::__construct();
		error_reporting(0);
		// $this->load->helper('security');
    $this->load->model('M_Pegawai');
  }
	
	function index(){
		if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){
      $this->f_pegawai();
    }
    else{
      redirect(base_url('login'));
    }
		// $this->f_pegawai();
    // $this->load->view('public/v_dataPribadi');
	}

  function f_pegawai($mode = '', $pc_id=0){
		if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){
			$judul			= 'Data Pegawai';
			// $hSQL				= str_replace(' ', '+', $this->input->get('hSQL'));
			$rNum				= $this->input->get('rNum');

			// umum
			$pc_nama							= '';
			$pc_no_ktp						= '';
			$pc_tmp_lahir					= '';
			$pc_tgl_lahir					= date('d/m/Y');
			$pc_alamat_ktp				= '';
			$pc_alamat_sekarang		= '';
			$pc_telp							= '';
			$pc_email							= '';
			$pc_gender						= '';
			$pa_id_agama					= '';
			$pc_kewarganegaraan		= '';
			$pc_anak_ke						= '';
			$pc_anak_ke_dari			= '';
			$psn_id_status_nikah	= '';
			$pc_jumlah_anak				= '';

			// $pd_id_divisi_lamar = '';

			if($mode == 'crud'){
				$action		= $this->input->post('submit_crud');

				if($action == 'simpan'){
					
					// insert into table pgw_calon
					$config['upload_path']    = './foto_pgw/';
					$config['allowed_types']  = 'gif|jpg|png';

					$this->load->library('upload', $config);
					$this->upload->do_upload();

					$hasil          					= $this->upload->data();
					$inp_pc_nama							= $this->input->post('inp_pc_nama');
					$inp_pc_no_ktp						= $this->input->post('inp_pc_no_ktp');
					$inp_pc_tmp_lahir					= $this->input->post('inp_pc_tmp_lahir');
					$inp_pc_tgl_lahir					= $this->input->post('inp_pc_tgl_lahir');
					$pc_tgl_lahir							= $this->input->post('pc_tgl_lahir');
					$inp_pc_alamat_ktp				= $this->input->post('inp_pc_alamat_ktp');
					$inp_pc_alamat_sekarang		= $this->input->post('inp_pc_alamat_sekarang');
					$inp_pc_telp							= $this->input->post('inp_pc_telp');
					// $res_inp_pc_telp 					= preg_replace("/[^0-9]/", "", $inp_pc_telp);
					$inp_pc_email							= $this->input->post('inp_pc_email');
					$inp_pc_gender						= $this->input->post('inp_pc_gender');
					$inp_pa_id_agama					= $this->input->post('inp_pa_id_agama');
					$inp_pc_kewarganegaraan		= $this->input->post('inp_pc_kewarganegaraan');
					$inp_pc_anak_ke						= $this->input->post('inp_pc_anak_ke');
					// if(empty($inp_pc_anak_ke)){
					// 	$inp_pc_anak_ke = 1;
					// }
					$inp_pc_anak_ke_dari			= $this->input->post('inp_pc_anak_ke_dari');
					$inp_psn_id_status_nikah	= $this->input->post('inp_psn_id_status_nikah');
					$inp_pc_jumlah_anak				= $this->input->post('inp_pc_jumlah_anak');
					
					// die(print_r($inp_pc_telp));
					// die(print_r('qwerty'));

					if($inp_pc_nama != ''){
						$data	= array(
							'pc_foto'         		=> "'".pg_escape_string($hasil['file_name'])."'",
							'pc_nama'							=> "'".pg_escape_string($inp_pc_nama)."'",
							'pc_no_ktp'						=> "'".pg_escape_string($inp_pc_no_ktp)."'",
							'pc_tmp_lahir'				=> "'".pg_escape_string($inp_pc_tmp_lahir)."'",
							'pc_tgl_lahir'				=> "'".pg_escape_string($inp_pc_tgl_lahir)."'",
							'pc_alamat_ktp'				=> "'".pg_escape_string($inp_pc_alamat_ktp)."'",
							'pc_alamat_sekarang'	=> "'".pg_escape_string($inp_pc_alamat_sekarang)."'",
							'pc_telp'							=> "'".pg_escape_string($inp_pc_telp)."'",
							'pc_email'						=> "'".pg_escape_string($inp_pc_email)."'",
							'pc_gender'						=> "'".pg_escape_string($inp_pc_gender)."'",
							'pa_id_agama'					=> $inp_pa_id_agama,
							'pc_kewarganegaraan'	=> "'".pg_escape_string($inp_pc_kewarganegaraan)."'",
							'pc_anak_ke'					=> $inp_pc_anak_ke,
							'pc_anak_ke_dari'			=> $inp_pc_anak_ke_dari,
							'psn_id_status_nikah'	=> $inp_psn_id_status_nikah,
							'pc_jumlah_anak'			=> $inp_pc_jumlah_anak
						);
						// die(print_r($data));
						if($rNum > 0){
							$this->M_Pegawai->update_table('public.pgw_calon', $data, 'pc_id='.$rNum);
						}
						// elseif($rNum > 0 && $rNum2 > 0){
						// 	$this->M_Pegawai->update_table('public.pgw_calon', $data, 'pc_id='.$rNum);
						// }
						else{
							// die(print_r('masuk'));
							$rNum	= $this->M_Pegawai->insert_table('public.pgw_calon', $data);
						}
					}
					else{
						die(print_r('kosonggg'));
					}
					
				
					// insert into table pgw_keluarga
					$jumlah = count($this->input->post('inp_pf_nama'));
					for($i=0; $i<$jumlah; $i++){
						$inp_pf_nama 				= $this->input->post('inp_pf_nama')[$i];
						$inp_pf_hubungan		= $this->input->post('inp_pf_hubungan')[$i];
						$inp_pf_tgl_lahir		= $this->input->post('inp_pf_tgl_lahir')[$i];
						$inp_pf_pendidikan	= $this->input->post('inp_pf_pendidikan')[$i];
						$inp_pf_kerja				= $this->input->post('inp_pf_kerja')[$i];

						$data = array(
							'pc_id'					=> $rNum,
							'pf_nama'				=> "'".pg_escape_string($inp_pf_nama)."'",
							'pf_hubungan'		=> "'".pg_escape_string($inp_pf_hubungan)."'",
							'pf_tgl_lahir'	=> "'".pg_escape_string($inp_pf_tgl_lahir)."'",
							'pf_pendidikan'	=> "'".pg_escape_string($inp_pf_pendidikan)."'",
							'pf_kerja'			=> "'".pg_escape_string($inp_pf_kerja)."'"
						);
						// if($rNum2 > 0){
						// 	$this->M_Pegawai->update_table('public.pgw_keluarga', $data, 'pf_id='.$rNum2);
						// }
						// else{
							$this->M_Pegawai->insert_table('public.pgw_keluarga', $data);
						// }
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

			$data['judul']				= $judul;
			$data['current_url']	= current_url();
			$data['class']				= $this->router->fetch_class();
			$data['method']				= $this->router->fetch_method();
			// $data['hSQL']			  	= $hSQL;
			$data['rNum']			  	= $rNum;
			// $data['rNum2']				= $rNum2;

			// $data['pd_nama_divisi']							= $pd_nama_divisi;
			
			// umum
			$data['pc_nama']							= $pc_nama;
			$data['pc_no_ktp']						= $pc_no_ktp;
			$data['pc_tmp_lahir']					= $pc_tmp_lahir;
			$data['pc_tgl_lahir']					= $pc_tgl_lahir;
			$data['pc_alamat_ktp']				= $pc_alamat_ktp;
			$data['pc_alamat_sekarang']		= $pc_alamat_sekarang;
			$data['pc_telp']							= $pc_telp;
			$data['pc_email']							= $pc_email;
			$data['pc_gender']						= $pc_gender;
			$data['list_agama']						= $this->M_Pegawai->show_combo("public.pgw_agama", "pa_id", "pa_nama", "pa_id > 0", "pa_nama", $pa_nama);
			$data['pc_kewarganegaraan']		= $pc_kewarganegaraan;
			$data['pc_anak_ke']						= $pc_anak_ke;
			$data['pc_anak_ke_dari']			= $pc_anak_ke_dari;
			$data['list_status_nikah']		= $this->M_Pegawai->show_combo("public.pgw_status_nikah", "psn_id", "psn_nama", "psn_id > 0", "psn_nama", $psn_nama);
			$data['pc_jumlah_anak']				= $pc_jumlah_anak;
			$data['pc_tgl_lamar']					= $pc_tgl_lamar;
			$data['pc_foto']							= $pc_foto;

			// $data['rec_pgwcalon']					= $this->M_Pegawai->show_combo("public.pgw_calon", "pc_id", "pc_nama", "pc_id > 0", "pc_nama", $pc_nama);
			// $data['rec_pgwcalon']					= $this->db->query("SELECT * FROM public.pgw_calon");
			$data['rec_pgwcalon']					= $this->db->query("SELECT * FROM public.v_dt_pgw_calon ");
			
		}
		// $this->load->view('public/v_dataPribadi', $data);
		$this->load->view('public/v_dataCPeg', $data);
	}

	function f_open_div($mode='', $pd_id=0){
    if($this->session->userdata('access') == 'Administrator'){
      $u_name   = '';

      if($mode=='do_update'){
        $query  = "select * from public.pgw_divisi where pd_id = ".$pd_id;
        $row    = $this->db->query($query);
        $rr     = $row->row();

        $u_name   = $rr->user_name;
      }
      elseif($mode == 'do_save'){
        $u_name   = $this->input->post('u_name');

        $data= array(
          'user_name'     => "'".$u_name."'"
        );

        if($pd_id > 0){       
          $this->M_User->edit($data, $pd_id);
        }else{
          $this->M_User->insert($data);
        }
        redirect('user');
      }
      elseif($mode == 'do_delete'){
        // die(print_r('asdadsad'));
        // $this->M_User->delete($data, $pd_id);
        $this->db->delete('public.user', ['pd_id' => $pd_id]);
        redirect('user');
      }
      
      $data['pd_id']  = $pd_id;
      $data['u_name']   = $u_name;
      $data['record']   = $this->M_User->show_user();
    }
    $this->load->view('public/v_dataDivisi', $data);
  }

}



?>