<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    parent::__construct();
		error_reporting(0);
		// $this->load->helper('security');
    $this->load->model('M_Pegawai');
		// $this->load->library('Pdf');
    $this->load->library('pdfgenerator');
  }
	
	public function index(){
		$this->f_pegawai();

		// $data['userlist'] = $this->M_Pegawai->getUsers();
		// $this->load->view('user_view', $data);
	}

	public function f_pegawai($mode = ''){
		$judul			= 'Data Pegawai';
		// $hSQL				= str_replace(' ', '+', $this->input->get('hSQL'));
		$rNum				= $this->input->get('rNum');
		// $rNum2			= $this->input->get('rNum2');

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

		// keluarga
		$pf_nama				= '';
		$pf_hubungan		= '';
		$pf_tgl_lahir		= '';
		$pf_pendidikan	= '';
		$pf_kerja				= '';
		// die(print_r($pc_tgl_lahir));
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


		//keluarga
		$data['pf_nama']				= $pf_nama;
		$data['pf_hubungan']		= $pf_hubungan;
		$data['pf_tgl_lahir']		= $pf_tgl_lahir;
		$data['pf_pendidikan']	= $pf_pendidikan;
		$data['pf_kerja']				= $pf_kerja;
				
		$this->load->view('v_home', $data);
	}

	public function export_tcpdf($pc_id){
    $data['data_pribadi'] = $this->M_Pegawai->getPdf($pc_id);
		$this->load->view('laporan_tcpdf', $data);
  }

  public function laporan_pdfmn(){
   // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
	//  $data['data_pribadi'] = $this->M_Pegawai->getPdf($pc_id);
	 $data['data_pribadi'] = $this->db->query("SELECT * FROM public.pgw_calon WHERE pc_id=".$rNum);
	//  $data['data_pribadi'] = $this->M_Pegawai->show_combo("public.pgw_calon", "pc_id", "pc_nama", "pc_id=".$rNum, "pa_nama", $pc_nama);
   $this->load->library('Pdfgenerator');
    
   // title dari pdf
   $this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';
   // filename dari pdf ketika didownload
   $file_pdf = 'laporan_penjualan_toko_kita';
   // setting paper
   $paper = 'A4';
   //orientasi paper potrait / landscape
   $orientation = "portrait";
   
   $html = $this->load->view('laporan_pdf',$this->data, true);	    
     
   // run dompdf
   $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);   
  }

  public function laporan_pdf(){
		$this->load->model('M_pegawai');
		$data['siswa'] = $this->M_pegawai->getData();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-siswa.pdf";
		$this->pdf->load_view('laporan_pdf', $data);
	}

	public function updateuser(){
		// POST values
		$id = $this->input->post('id');
		$field = $this->input->post('field');
		$value = $this->input->post('value');

		// Update records
		$this->M_Pegawai->updateUser($id, $field, $value);

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
