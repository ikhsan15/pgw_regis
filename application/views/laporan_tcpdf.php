<?php
  $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
  $pdf->SetTitle('Formulir Lamaran Kerja');
  $pdf->SetHeaderMargin(30);
  $pdf->SetTopMargin(20);
  $pdf->setFooterMargin(20);
  // $pdf->SetAutoPageBreak(true);
  $pdf->SetAuthor('Author');
  $pdf->SetDisplayMode('real', 'default');
  $pdf->AddPage();
  // $i=0;

  // set auto page breaks
  $pdf->SetAutoPageBreak(TRUE, "26");
  $pdf->SetFont('times', '', 12, '', 'false');


  foreach ($data_pribadi as $row) 
    {
      $html='
        <table cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="25%" align="center"rowspan="6"><img src="'.base_url('foto_pgw/'.$row->pc_foto).'" width="110" height="120">GAMBAR 1</td>
            <td width="50%" align="center"></td>
            <td width="25%" align="center"rowspan="6"><img src="'.base_url('/foto_pgw/Pertemuan_3-1_pak_nasrul.png').'" width="110" height="120">GAMBAR 2</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="50%" align="center"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="50%" align="center"><h3>FORMULIR LAMARAN KERJA</h3></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="50%" align="center"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="50%" align="center"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="50%" align="center"></td>
          </tr>
        </table>

        <table cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Posisi yang dilamar</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->pc_foto.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left"><b><u>Data Pribadi</u></b></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Nama Lengkap</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->pc_nama.'</td>  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">No. KTP</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->pc_no_ktp.'</td>  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">No. NPWP</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->no_npwp_lmr.'</td>  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Tempat Tanggal Lahir</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->pc_tmp_lahir.'</td> 
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" colspan="2"></td>
            <td width="70%" align="left">'.$row->pc_tgl_lahir.'</td> 
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Alamat Rumah</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->pc_alamat_ktp.'</td>  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Telepon Rumah</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->telp_lmr.'</td>  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">HP</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->hp_lmr.'</td>  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Alamat Email</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->email_lmr.'</td>  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Jenis Kelamin</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->jk_lmr.'</td>  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Agama</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->agama_lmr.'</td>  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Status Perkawinan</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->stat_nkh_lmr.'</td>  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left"><b><u>Keluarga</u></b></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left">Cantumkanlah susunan anggota keluarga anda (Ayah, Ibu, Saudara Kandung, <b>termasuk diri anda</b>).</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left">Bila Anda sudah menikah, harap diisi dengan data keluarga Anda (Suami / Istri & Anak).</td>
          </tr>
        </table>

        <table border="0.5" cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="13%" align="center">Status</td>
            <td width="25%" align="center">Nama</td>
            <td width="7%"  align="center">L / P</td>
            <td width="15%" align="center">Tgl. Lahir</td>
            <td width="20%" align="center">Pendidikan</td>
            <td width="20%" align="center">Pekerjaan</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="13%" align="left">'.$row->stat_anggota_1.'</td>
            <td width="25%" align="left">'.$row->n_anggota_1.'</td>
            <td width="7%"  align="center">'.$row->jk_anggota_1.'</td>
            <td width="15%" align="left">'.$row->tgl_lahir_anggota_1.'</td>
            <td width="20%" align="left">'.$row->pend_anggota_1.'</td>
            <td width="20%" align="left">'.$row->pek_anggota_1.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="13%" align="left">'.$row->stat_anggota_2.'</td>
            <td width="25%" align="left">'.$row->n_anggota_2.'</td>
            <td width="7%"  align="center">'.$row->jk_anggota_2.'</td>
            <td width="15%" align="left">'.$row->tgl_lahir_anggota_2.'</td>
            <td width="20%" align="left">'.$row->pend_anggota_2.'</td>
            <td width="20%" align="left">'.$row->pek_anggota_2.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="13%" align="left">'.$row->stat_anggota_3.'</td>
            <td width="25%" align="left">'.$row->n_anggota_3.'</td>
            <td width="7%"  align="center">'.$row->jk_anggota_3.'</td>
            <td width="15%" align="left">'.$row->tgl_lahir_anggota_3.'</td>
            <td width="20%" align="left">'.$row->pend_anggota_3.'</td>
            <td width="20%" align="left">'.$row->pek_anggota_3.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="13%" align="left">'.$row->stat_anggota_4.'</td>
            <td width="25%" align="left">'.$row->n_anggota_4.'</td>
            <td width="7%"  align="center">'.$row->jk_anggota_4.'</td>
            <td width="15%" align="left">'.$row->tgl_lahir_anggota_4.'</td>
            <td width="20%" align="left">'.$row->pend_anggota_4.'</td>
            <td width="20%" align="left">'.$row->pek_anggota_4.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="13%" align="left">'.$row->stat_anggota_5.'</td>
            <td width="25%" align="left">'.$row->n_anggota_5.'</td>
            <td width="7%"  align="center">'.$row->jk_anggota_5.'</td>
            <td width="15%" align="left">'.$row->tgl_lahir_anggota_5.'</td>
            <td width="20%" align="left">'.$row->pend_anggota_5.'</td>
            <td width="20%" align="left">'.$row->pek_anggota_5.'</td>
          </tr>
        </table>

        <table cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left"><b><u>Riwayat Pendidikan</u></b></td> 
          </tr>
        </table>

        <table border="0.5" cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="10%" align="center">Tingkat</td>
            <td width="29%" align="center">Nama dan Lokasi</td>
            <td width="13%" align="center">Dari (bln/thn)</td>
            <td width="13%" align="center">Sampai (bln/thn)</td>
            <td width="15%" align="center">Jurusan</td>
            <td width="20%" align="center">Lulus / Tidak Lulus</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="10%" align="left">SD</td>
            <td width="29%" align="left">'.$row->n_pend_1.'</td>
            <td width="13%" align="left">'.$row->in_pend_1.'</td>
            <td width="13%" align="left">'.$row->out_pend_1.'</td>
            <td width="15%" align="left"></td>
            <td width="20%" align="left">'.$row->ket_lulus_pend_1.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="10%" align="left">SMP</td>
            <td width="29%" align="left">'.$row->n_pend_2.'</td>
            <td width="13%" align="left">'.$row->in_pend_2.'</td>
            <td width="13%" align="left">'.$row->out_pend_2.'</td>
            <td width="15%" align="left"></td>
            <td width="20%" align="left">'.$row->ket_lulus_pend_2.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="10%" align="left">SMA</td>
            <td width="29%" align="left">'.$row->n_pend_3.'</td>
            <td width="13%" align="left">'.$row->in_pend_3.'</td>
            <td width="13%" align="left">'.$row->out_pend_3.'</td>
            <td width="15%" align="left">'.$row->jur_pend_3.'</td>
            <td width="20%" align="left">'.$row->ket_lulus_pend_3.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="10%" align="left">Akademi</td>
            <td width="29%" align="left">'.$row->n_pend_4.'</td>
            <td width="13%" align="left">'.$row->in_pend_4.'</td>
            <td width="13%" align="left">'.$row->out_pend_4.'</td>
            <td width="15%" align="left">'.$row->jur_pend_4.'</td>
            <td width="20%" align="left">'.$row->ket_lulus_pend_4.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="10%" align="left">Strata 1</td>
            <td width="29%" align="left">'.$row->n_pend_5.'</td>
            <td width="13%" align="left">'.$row->in_pend_5.'</td>
            <td width="13%" align="left">'.$row->out_pend_5.'</td>
            <td width="15%" align="left">'.$row->jur_pend_5.'</td>
            <td width="20%" align="left">'.$row->ket_lulus_pend_5.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="10%" align="left">Strata 2</td>
            <td width="29%" align="left">'.$row->n_pend_6.'</td>
            <td width="13%" align="left">'.$row->in_pend_6.'</td>
            <td width="13%" align="left">'.$row->out_pend_6.'</td>
            <td width="15%" align="left">'.$row->jur_pend_6.'</td>
            <td width="20%" align="left">'.$row->ket_lulus_pend_6.'</td>
          </tr>
        </table>

        <table cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left"><b><u>Kursus / Pelatihan</u></b></td>
          </tr>
        </table>

        <table border="0.5" cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="40%" align="center">Nama</td>
            <td width="13%" align="center">Dari (bln/thn)</td>
            <td width="13%" align="center">Sampai (bln/thn)</td>
            <td width="34%" align="center">Keterangan</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="40%" align="left">'.$row->n_kursus_1.'</td>
            <td width="13%" align="left">'.$row->in_kursus_1.'</td>
            <td width="13%" align="left">'.$row->out_kursus_1.'</td>
            <td width="34%" align="left">'.$row->ket_kursus_1.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="40%" align="left">'.$row->n_kursus_2.'</td>
            <td width="13%" align="left">'.$row->in_kursus_2.'</td>
            <td width="13%" align="left">'.$row->out_kursus_2.'</td>
            <td width="34%" align="left">'.$row->ket_kursus_2.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="40%" align="left">'.$row->n_kursus_3.'</td>
            <td width="13%" align="left">'.$row->in_kursus_3.'</td>
            <td width="13%" align="left">'.$row->out_kursus_3.'</td>
            <td width="34%" align="left">'.$row->ket_kursus_3.'</td>
          </tr>
        </table>

        <table cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left"><b><u>Riwayat Pekerjaan</u></b></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Nama Perusahaan</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->n_riw_pek.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Jenis Usaha</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->j_usaha_riw.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Alamat</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->alamat_riw.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Telepon</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->telp_pek.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Posisi Saat Ini</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->posisi_riw.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Div / Departemen</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->div_pek.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Posisi Atasan Langsung</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->posisi_atsn.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="25%" align="left">Tanggal Bergabung</td>
            <td width="5%" align="center">:</td>
            <td width="70%" align="left">'.$row->tgl_riw_join.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left">Penghasilan yang diterima saat ini (perusahaan terakhir):</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left"><i>(kandidat akan diminta untuk memberikan <b>slip gaji</b> asli sebagai bukti penghasilan yang diterima, pada tahapan negosiasi)</i></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" align="left">Gaji Pokok</td>
            <td width="5%" align="center">:</td>
            <td width="65%" align="left">Rp. '.$row->gaji_p_riw.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" align="left">Uang Transport / Makan</td>
            <td width="5%" align="center">:</td>
            <td width="65%" align="left">Rp. '.$row->uang_tp_mkn_riw.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" align="left">Lain - lain (sebutkan)</td>
            <td width="5%" align="center">:</td>
            <td width="65%" align="left">'.$row->uang_lain.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" align="left"></td>
            <td width="5%" align="center"></td>
            <td width="65%" align="left">Rp. '.$row->uang_lain_ket.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" align="left">Benefit lain yang diterima</td>
            <td width="5%" align="center">:</td>
            <td width="65%" align="left">Rp. '.$row->benefit_riw.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" align="left">Minimum gaji yang diinginkan <b>(wajib diisi)</b> </td>
            <td width="5%" align="center">:</td>
            <td width="65%" align="left">Rp. '.$row->min_gaji.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" align="left"></td>
            <td width="5%" align="center"></td>
            <td width="65%" align="left">'.$row->min_gaji_ket.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" align="left">Kapan bisa bergabung dengan GEMA INSANI? </td>
            <td width="5%" align="center">:</td>
            <td width="65%" align="left">'.$row->tgl_join.'</td>
          </tr>
        </table>

        <table cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left"><b><u>Referensi</u></b></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left">1. Sebutkan 2 orang yang kenal baik dengan reputasi Anda, akan tetapi bukan saudara atau teman Anda, contoh : atasan saat ini dan atasan dari atasan.</td>
          </tr>
        </table>

        <table border="0.5" cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="30%" align="center">Nama</td>
            <td width="20%" align="center">Hubungan</td>
            <td width="25%" align="center">Posisi / Jabatan</td>
            <td width="25%" align="center">No. Telp</td>                  
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" align="left">'.$row->n_ref_1.'</td>
            <td width="20%" align="left">'.$row->hub_ref_1.'</td>
            <td width="25%" align="left">'.$row->jab_ref_1.'</td>
            <td width="25%" align="left">'.$row->telp_ref_1.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="30%" align="left">'.$row->n_ref_2.'</td>
            <td width="20%" align="left">'.$row->hub_ref_2.'</td>
            <td width="25%" align="left">'.$row->jab_ref_2.'</td>
            <td width="25%" align="left">'.$row->telp_ref_2.'</td>
          </tr>
        </table>

        <table cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left">2. Apakah Anda memiliki saudara kandung atau kerabat yang bekerja di GEMA INSANI? (Ya / Tidak).<br>Bila Ya, sebutkan nama lengkap, jabatan/bagian & perusahaan tempat bekerja.</td>
          </tr>
        </table>

        <table border="0.5" cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="40%" align="center">Nama Lengkap</td>
            <td width="30%" align="center">Jabatan</td>
            <td width="30%" align="center">Hubungan</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="40%" align="left">'.$row->n_kerabat_1.'</td>
            <td width="30%" align="left">'.$row->jab_kerabat_1.'</td>
            <td width="30%" align="left">'.$row->hub_kerabat_1.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="40%" align="left">'.$row->n_kerabat_2.'</td>
            <td width="30%" align="left">'.$row->jab_kerabat_2.'</td>
            <td width="30%" align="left">'.$row->hub_kerabat_2.'</td>
          </tr>
        </table>

        <table cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="left">Informasi Lain</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="3%" align="center" rowspan="5">1.</td>
            <td width="97%" align="left">Penguasaan bahasa asing / Keahlian lain</td>
          </tr>
        </table>

        <table border="0.5" cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="5%"  align="center">No.</td>
            <td width="70%" align="center">Jenis Keahlian</td>
            <td width="25%" align="center">Pasif / Aktif</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="5%" align="left">1</td>
            <td width="70%" align="left">'.$row->n_skill_1.'</td>
            <td width="25%" align="center">'.$row->lv_skill_1.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="5%" align="left">2</td>
            <td width="70%" align="left">'.$row->n_skill_2.'</td>
            <td width="25%" align="center">'.$row->lv_skill_2.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="5%" align="left">3</td>
            <td width="70%" align="left">'.$row->n_skill_3.'</td>
            <td width="25%" align="center">'.$row->lv_skill_3.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="5%" align="left">3</td>
            <td width="70%" align="left">'.$row->n_skill_4.'</td>
            <td width="25%" align="center">'.$row->lv_skill_4.'</td>
          </tr>
        </table>

        <table cellspacing="" cellpadding="3">
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="3%" align="center" rowspan="2">2.</td>
            <td width="97%" align="left">Aktivitas / hobi Anda di masa senggang :</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">'.$row->info_1.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="3%" align="center" rowspan="3">3.</td>
            <td width="97%" align="left">Apakah Anda menjadi anggota Organisasi Sosial / Profesi tertentu? (Ya / Tidak)</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">Bila Ya, Sebutkan :</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">'.$row->info_2.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="3%" align="center" rowspan="3">4.</td>
            <td width="97%" align="left">Prestasi / keberhasilan Anda dalam tugas dan tanggung jawab yang diberikan, atau</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">kemampuan individu yang menonjol :</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">'.$row->info_3.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="3%" align="center" rowspan="3">5.</td>
            <td width="97%" align="left">Apakah Anda pernah menderita penyakit yang menyebabkan Anda di rawat di rumah sakit?</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">(Ya / Tidak). Bila Ya, Penyakit apa? :</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">'.$row->info_4.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="3%" align="center" rowspan="3">6.</td>
            <td width="97%" align="left">Apakah anda menderita penyakit menurun? (Ya / Tidak).</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">Bila Ya, Penyakit apa dan dirawat berapa lama?</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">'.$row->info_5.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="3%" align="center" rowspan="3">7.</td>
            <td width="97%" align="left">Apakah Anda mengidap penyakit tertentu sekarang ini? (Ya / Tidak).</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">Bila Ya, Penyakit apa?</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">'.$row->info_6.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="3%" align="center" rowspan="3">8.</td>
            <td width="97%" align="left">Apakah Anda buta warna? (Ya / Tidak).</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">Bila Ya, apakah Buta warna total atau Buta warna sebagian </td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">'.$row->info_7.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="3%" align="center" rowspan="3">9.</td>
            <td width="97%" align="left">Apakah anda pernah terlibat kriminal yang menyebabkan Anda berurusan dengan hukum?</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">(Ya / Tidak). Bila Ya, Kapan dan karena apa?</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="97%" align="left">'.$row->info_8.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="5%" align="center" rowspan="3">10.</td>
            <td width="95%" align="left">Apakah Anda bersedia ditempatkan di luar Jakarta? (Ya / Tidak).</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="95%" align="left">Bila Tidak, sebutkan alasan :</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="95%" align="left">'.$row->info_9.'</td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="justify"><b>SAYA DENGAN INI MENYATAKAN BAHWA SELURUH INFORMASI YANG TERDAPAT DALAM FORMULIR INI BENAR DAN SAYA MEMBERIKAN WEWENANG PENUH KEPADA GEMA INSANI UNTUK MENELITI KEBENARAN INFORMASI YANG ADA DI DALAMNYA.</b></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%" align="justify"><b>JIKA TERNYATA KEMUDIAN ADA KETIDAKBENARAN DALAM INFORMASI TERSEBUT, SAYA SETUJU BAHWA GEMA INSANI BERHAK UNTUK MENGHENTIKAN PROSES REKRUTMENT ATAU MEMUTUSKAN HUBUNGAN KERJA TANPA KEWAJIBAN MEMBAYAR APAPUN KEPADA SAYA.</b></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="100%"></td>
          </tr>
          <tr bgcolor="#ffffff">
            <td width="40%" align="left">Tanggal Pengisian Formulir Pendaftaran</td>
            <td width="5%" align="center">:</td>
            <td width="55%" align="left">'.$row->tgl_submit.'</td>  
          </tr>
        </table>

        ';
      }

  $pdf->writeHTML($html, true, false, true, false, '');
  // $pdf->Output('hasil.pdf', 'I');
  $pdf->Output($row->pc_nama.'.pdf', 'I');

?>
