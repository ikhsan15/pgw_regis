<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    parent::__construct();
		error_reporting(0);
		// $this->load->helper('security');
    $this->load->model('M_Pegawai');
		$this->load->library('pdf_report');
    // $this->load->library('pdfgenerator');
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

		//pgw_calon
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

		//pgw_keluarga
		$pf_nama				= '';
		$pf_hubungan		= '';
		$pf_tgl_lahir		= '';
		$pf_pendidikan	= '';
		$pf_kerja				= '';		

		//pgw_pendidikan
		$ppend_nama					= '';
		$ppend_alamat				= '';
		$ppend_tingkat			= '';
		$ppend_jurusan			= '';
		$ppend_masuk				= '';
		$ppend_keluar				= '';
		$ppend_keterangan		= '';

		//pgw_kerja
		$pk_nama								= '';
		$pk_alamat							= '';
		$pk_divisi							= '';
		$pk_jabatan							= '';
		$pk_masuk								= '';
		$pk_keluar							= '';
		$pk_gapok								= '';
		$pk_tunjangan_lainnya		= '';
		$pk_tugas_kerja					= '';
		$pk_alasan_pindah				= '';

		//pgw_referensi_pro
		$prp_nama				= '';
		$prp_hubungan		= '';
		$prp_jabatan		= '';
		$prp_telp				= '';

		//pgw_referensi_kerabat
		$prk_nama				= '';
		$prk_hubungan		= '';
		$prk_jabatan		= '';

		//pgw_kursus
		$ps_nama			= '';
		$ps_status		= '';
		$ps_masuk			= '';
		$ps_keluar		= '';

		//pgw_request
		$ppreq_gaji_min			= '';
		$ppreq_fasilitas		= '';
		$ppreq_gabung				= '';
		$ppreq_penempatan		= '';

		//pgw_pertanyaan
		$pp_hobi						= '';
		$pp_buta_warna			= '';
		$pp_penyakit				= '';
		$pp_lama_rawat			= '';
		$pp_sakit_turunan		= '';
		$pp_sakit_sekarang	= '';
		$pp_kriminal				= '';
		$pp_kriminal_waktu	= '';
		$pp_kriminal_alasan	= '';
		$pp_organisasi			= '';

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
					// if($rNum > 0){
					// 	$this->M_Pegawai->update_table('public.pgw_calon', $data, 'pc_id='.$rNum);
					// }
					// elseif($rNum > 0 && $rNum2 > 0){
					// 	$this->M_Pegawai->update_table('public.pgw_calon', $data, 'pc_id='.$rNum);
					// }
					// else{
						// die(print_r('masuk'));
						$rNum	= $this->M_Pegawai->insert_table('public.pgw_calon', $data);
						// $this->M_Pegawai->insert_table('public.pgw_calon', $data);
						// redirect(base_url());
					// }
				}
				// else{
				// 	die(print_r('kosonggg'));
				// }
				
				// die($rNum);

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
						// redirect(base_url());
					// }
				}

				// insert into table pgw_pendidikan
				$jumlah = count($this->input->post('inp_ppend_nama'));
				for($i=0; $i<$jumlah; $i++){
					$inp_ppend_nama 						= $this->input->post('inp_ppend_nama')[$i];
					$inp_ppend_keterangan 			= $this->input->post('inp_ppend_keterangan')[$i];
					$inp_ppend_alamat						= $this->input->post('inp_ppend_alamat')[$i];
					$inp_ppend_tingkat					= $this->input->post('inp_ppend_tingkat')[$i];
					$inp_ppend_jurusan					= $this->input->post('inp_ppend_jurusan')[$i];
					$inp_ppend_masuk						= $this->input->post('inp_ppend_masuk')[$i];
					$inp_ppend_keluar 					= $this->input->post('inp_ppend_keluar')[$i];
					$inp_pk_tunjangan_lainnya		= $this->input->post('inp_pk_tunjangan_lainnya')[$i];
					$inp_pk_tugas_kerja					= $this->input->post('inp_pk_tugas_kerja')[$i];
					$inp_pk_alasan_pindah				= $this->input->post('inp_pk_alasan_pindah')[$i];

					$data = array(
						'pc_id'								=> $rNum,
						'ppend_nama'					=> "'".pg_escape_string($inp_ppend_nama)."'",
						'ppend_keterangan'		=> "'".pg_escape_string($inp_ppend_keterangan)."'",
						'ppend_alamat'				=> "'".pg_escape_string($inp_ppend_alamat)."'",
						'ppend_tingkat'				=> "'".pg_escape_string($inp_ppend_tingkat)."'",
						'ppend_jurusan'				=> "'".pg_escape_string($inp_ppend_jurusan)."'",
						'ppend_masuk'					=> "'".pg_escape_string($inp_ppend_masuk)."'",
						'ppend_keluar'				=> "'".pg_escape_string($inp_ppend_keluar)."'"
					);
					$this->M_Pegawai->insert_table('public.pgw_pendidikan', $data);
					// redirect(base_url());
				}

				// insert into table pgw_kerja
				$jumlah = count($this->input->post('inp_pk_nama'));
				for($i=0; $i<$jumlah; $i++){
					$inp_pk_nama 								= $this->input->post('inp_pk_nama')[$i];
					$inp_pk_alamat 							= $this->input->post('inp_pk_alamat')[$i];
					$inp_pk_divisi							= $this->input->post('inp_pk_divisi')[$i];
					$inp_pk_jabatan							= $this->input->post('inp_pk_jabatan')[$i];
					$inp_pk_masuk								= $this->input->post('inp_pk_masuk')[$i];
					$inp_pk_keluar							= $this->input->post('inp_pk_keluar')[$i];
					$inp_pk_gapok 							= $this->input->post('inp_pk_gapok')[$i];
					$inp_pk_tunjangan_lainnya		= $this->input->post('inp_pk_tunjangan_lainnya')[$i];
					$inp_pk_tugas_kerja					= $this->input->post('inp_pk_tugas_kerja')[$i];
					$inp_pk_alasan_pindah				= $this->input->post('inp_pk_alasan_pindah')[$i];

					$data = array(
						'pc_id'									=> $rNum,
						'pk_nama'								=> "'".pg_escape_string($inp_pk_nama)."'",
						'pk_alamat'							=> "'".pg_escape_string($inp_pk_alamat)."'",
						'pk_divisi'							=> "'".pg_escape_string($inp_pk_divisi)."'",
						'pk_jabatan'						=> "'".pg_escape_string($inp_pk_jabatan)."'",
						'pk_masuk'							=> "'".pg_escape_string($inp_pk_masuk)."'",
						'pk_keluar'							=> "'".pg_escape_string($inp_pk_keluar)."'",
						// $angka1= str_replace(".", "", $angkaa);
						'pk_gapok'							=> "'".pg_escape_string(str_replace(".", "",$inp_pk_gapok))."'",
						'pk_tunjangan_lainnya'	=> "'".pg_escape_string(str_replace(".", "",$inp_pk_tunjangan_lainnya))."'",
						'pk_tugas_kerja'				=> "'".pg_escape_string($inp_pk_tugas_kerja)."'",
						'pk_alasan_pindah'			=> "'".pg_escape_string($inp_pk_alasan_pindah)."'"
					);
					$this->M_Pegawai->insert_table('public.pgw_kerja', $data);
					// redirect(base_url());
				}

				// insert into table pgw_referensi_pro
				$jumlah = count($this->input->post('inp_prp_nama'));
				for($i=0; $i<$jumlah; $i++){
					$inp_prp_nama 			= $this->input->post('inp_prp_nama')[$i];
					$inp_prp_hubungan 	= $this->input->post('inp_prp_hubungan')[$i];
					$inp_prp_jabatan		= $this->input->post('inp_prp_jabatan')[$i];
					$inp_prp_telp				= $this->input->post('inp_prp_telp')[$i];

					$data = array(
						'pc_id'					=> $rNum,
						'prp_nama'			=> "'".pg_escape_string($inp_prp_nama)."'",
						'prp_hubungan'	=> "'".pg_escape_string($inp_prp_hubungan)."'",
						'prp_jabatan'		=> "'".pg_escape_string($inp_prp_jabatan)."'",
						'prp_telp'			=> "'".pg_escape_string($inp_prp_telp)."'"
					);
					$this->M_Pegawai->insert_table('public.pgw_referensi_pro', $data);
					// redirect(base_url());
				}

				// insert into table pgw_referensi_kerabat
				$jumlah = count($this->input->post('inp_prk_nama'));
				for($i=0; $i<$jumlah; $i++){
					$inp_prk_nama 			= $this->input->post('inp_prk_nama')[$i];
					$inp_prk_hubungan 	= $this->input->post('inp_prk_hubungan')[$i];
					$inp_prk_jabatan		= $this->input->post('inp_prk_jabatan')[$i];

					$data = array(
						'pc_id'					=> $rNum,
						'prk_nama'			=> "'".pg_escape_string($inp_prk_nama)."'",
						'prk_hubungan'	=> "'".pg_escape_string($inp_prk_hubungan)."'",
						'prk_jabatan'		=> "'".pg_escape_string($inp_prk_jabatan)."'"
					);
					$this->M_Pegawai->insert_table('public.pgw_referensi_kerabat', $data);
					// redirect(base_url());
				}

				// insert into table pgw_request
					// $jumlah = count($this->input->post('inp_ppreq_gaji_min'));
					// for($i=0; $i<$jumlah; $i++){
						$inp_ppreq_gaji_min 		= $this->input->post('inp_ppreq_gaji_min');
						$inp_ppreq_fasilitas 		= $this->input->post('inp_ppreq_fasilitas');
						$inp_ppreq_gabung				= $this->input->post('inp_ppreq_gabung');
						$inp_ppreq_penempatan		= $this->input->post('inp_ppreq_penempatan');

						$data = array(
							'pc_id'							=> $rNum,
							'ppreq_gaji_min'		=> "'".pg_escape_string($inp_ppreq_gaji_min)."'",
							'ppreq_fasilitas'		=> "'".pg_escape_string($inp_ppreq_fasilitas)."'",
							'ppreq_gabung'			=> "'".pg_escape_string($inp_ppreq_gabung)."'",
							'ppreq_penempatan'	=> "'".pg_escape_string($inp_ppreq_penempatan)."'"
						);
						$this->M_Pegawai->insert_table('public.pgw_request', $data);
						// redirect(base_url());
					// }
					
				// insert into table pgw_kursus
				$jumlah = count($this->input->post('inp_ps_nama'));
				for($i=0; $i<$jumlah; $i++){
					$inp_ps_nama 			= $this->input->post('inp_ps_nama')[$i];
					$inp_ps_status 		= $this->input->post('inp_ps_status')[$i];
					$inp_ps_masuk			= $this->input->post('inp_ps_masuk')[$i];
					$inp_ps_keluar		= $this->input->post('inp_ps_keluar')[$i];

					$data = array(
						'pc_id'				=> $rNum,
						'ps_nama'			=> "'".pg_escape_string($inp_ps_nama)."'",
						'ps_status'		=> "'".pg_escape_string($inp_ps_status)."'",
						'ps_masuk'		=> "'".pg_escape_string($inp_ps_masuk)."'",
						'ps_keluar'		=> "'".pg_escape_string($inp_ps_keluar)."'"
					);
					$this->M_Pegawai->insert_table('public.pgw_kursus', $data);
					// redirect(base_url());
				}

				// insert into table pgw_bahasa
				$jumlah = count($this->input->post('inp_pb_nama'));
				for($i=0; $i<$jumlah; $i++){
					$inp_pb_nama 				= $this->input->post('inp_pb_nama')[$i];
					$inp_pb_keterangan 	= $this->input->post('inp_pb_keterangan')[$i];
					$inp_pb_tulis				= $this->input->post('inp_pb_tulis')[$i];
					$inp_pb_lisan				= $this->input->post('inp_pb_lisan')[$i];

					$data = array(
						'pc_id'						=> $rNum,
						'pb_nama'					=> "'".pg_escape_string($inp_pb_nama)."'",
						'pb_keterangan'		=> "'".pg_escape_string($inp_pb_keterangan)."'",
						'pb_tulis'				=> $inp_pb_tulis,
						'pb_lisan'				=> $inp_pb_lisan
					);
					$this->M_Pegawai->insert_table('public.pgw_bahasa', $data);
					// redirect(base_url());
				}

				// insert into table pgw_pertanyaan
				$inp_pp_hobi 						= $this->input->post('inp_pp_hobi');
				$inp_ppreq_fasilitas 		= $this->input->post('inp_ppreq_fasilitas');
				$inp_pp_buta_warna			= $this->input->post('inp_pp_buta_warna');
				$inp_pp_penyakit				= $this->input->post('inp_pp_penyakit');
				$inp_pp_lama_rawat 			= $this->input->post('inp_pp_lama_rawat');
				$inp_pp_sakit_turunan		= $this->input->post('inp_pp_sakit_turunan');
				$inp_pp_sakit_sekarang	= $this->input->post('inp_pp_sakit_sekarang');
				$inp_pp_kriminal 				= $this->input->post('inp_pp_kriminal');
				$inp_pp_kriminal_waktu	= $this->input->post('inp_pp_kriminal_waktu');
				$inp_pp_kriminal_alasan	= $this->input->post('inp_pp_kriminal_alasan');
				$inp_pp_organisasi			= $this->input->post('inp_pp_organisasi');

				$data = array(
					'pc_id'								=> $rNum,
					'pp_hobi'							=> "'".pg_escape_string($inp_pp_hobi)."'",
					'pp_buta_warna'				=> "'".pg_escape_string($inp_ppreq_fasilitas)."'",
					'ppreq_gabung'				=> "'".pg_escape_string($inp_pp_buta_warna)."'",
					'pp_penyakit'					=> "'".pg_escape_string($inp_pp_penyakit)."'",
					'pp_lama_rawat'				=> "'".pg_escape_string($inp_pp_lama_rawat)."'",
					'pp_sakit_turunan'		=> "'".pg_escape_string($inp_pp_sakit_turunan)."'",
					'pp_sakit_sekarang'		=> "'".pg_escape_string($inp_pp_sakit_sekarang)."'",
					'pp_kriminal'					=> "'".pg_escape_string($inp_pp_kriminal)."'",
					'pp_kriminal_waktu'		=> "'".pg_escape_string($inp_pp_kriminal_waktu)."'",
					'pp_kriminal_alasan'	=> "'".pg_escape_string($inp_pp_kriminal_alasan)."'",
					'pp_organisasi'				=> "'".pg_escape_string($inp_pp_organisasi)."'"
				);
				$this->M_Pegawai->insert_table('public.pgw_pertanyaan', $data);

				
				// redirect($this->router->fetch_class().'/'.$this->router->fetch_method().'/?rNum='.$rNum);
				redirect(base_url());
			}
			// elseif($action == 'hapus'){
			// 	$this->Mainmodel->delete_table('public.pgw_keluarga', 'pc_id='.$rNum);
			// 	redirect($this->router->fetch_class().'/'.$this->router->fetch_method());
			// }
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


		//pgw_keluarga
		$data['pf_nama']				= $pf_nama;
		$data['pf_hubungan']		= $pf_hubungan;
		$data['pf_tgl_lahir']		= $pf_tgl_lahir;
		$data['pf_pendidikan']	= $pf_pendidikan;
		$data['pf_kerja']				= $pf_kerja;

		//pgw_pendidikan
		$data['ppend_nama']					= $ppend_nama;
		$data['ppend_keterangan']		= $ppend_keterangan;
		$data['ppend_alamat']				= $ppend_alamat;
		$data['ppend_tingkat']			= $ppend_tingkat;
		$data['ppend_jurusan']			= $ppend_jurusan;
		$data['ppend_masuk']				= $ppend_masuk;
		$data['ppend_keluar']				= $ppend_keluar;

		//pgw_kerja
		$data['pk_nama']								= $pk_nama;
		$data['pk_alamat']							= $pk_alamat;
		$data['pk_divisi']							= $pk_divisi;
		$data['pk_jabatan']							= $pk_jabatan;
		$data['pk_masuk']								= $pk_masuk;
		$data['pk_keluar']							= $pk_keluar;
		$data['pk_gapok']								= $pk_gapok;
		$data['pk_tunjangan_lainnya']		= $pk_tunjangan_lainnya;
		$data['pk_tugas_kerja']					= $pk_tugas_kerja;
		$data['pk_alasan_pindah']				= $pk_alasan_pindah;

		//pgw_referensi_pro
		$data['prp_nama']				= $prp_nama;
		$data['prp_hubungan']		= $prp_hubungan;
		$data['prp_jabatan']		= $prp_jabatan;
		$data['prp_telp']				= $prp_telp;

		//pgw_referensi_kerabat
		$data['prk_nama']				= $prk_nama;
		$data['prk_hubungan']		= $prk_hubungan;
		$data['prk_jabatan']		= $prk_jabatan;

		//pgw_request
		$data['prk_nama']				= $prk_nama;
		$data['prk_hubungan']		= $prk_hubungan;
		$data['prk_jabatan']		= $prk_jabatan;

		//pgw_kursus
		$data['ppreq_gaji_min']			= $ppreq_gaji_min;
		$data['ppreq_fasilitas']		= $ppreq_fasilitas;
		$data['ppreq_gabung']				= $ppreq_gabung;
		$data['ppreq_penempatan']		= $ppreq_penempatan;

		//pgw_bahasa
		$data['pb_nama']				= $pb_nama;
		$data['pb_keterangan']	= $pb_keterangan;
		$data['list_lv_bahasa']		= $this->M_Pegawai->show_combo("public.pgw_lv_bahasa", "pkb_id", "pkb_nama", "pkb_id > 0", "pkb_nama", $pkb_nama);

		//pgw_pertanyaan
		$data['pp_hobi']						= $pp_hobi;
		$data['pp_buta_warna']			= $pp_buta_warna;
		$data['pp_penyakit']				= $pp_penyakit;
		$data['pp_lama_rawat']			= $pp_lama_rawat;
		$data['pp_sakit_turunan']		= $pp_sakit_turunan;
		$data['pp_sakit_sekarang']	= $pp_sakit_sekarang;
		$data['pp_kriminal']				= $pp_kriminal;
		$data['pp_kriminal_waktu']	= $pp_kriminal_waktu;
		$data['pp_kriminal_alasan']	= $pp_kriminal_alasan;
		$data['pp_organisasi']			= $pp_organisasi;
				
		$this->load->view('v_home', $data);
	}

	public function export_tcpdf($pc_id){
    $data['data_pribadi'] = $this->M_Pegawai->getPdf($pc_id);
		$this->load->view('laporan_tcpdf', $data);
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
