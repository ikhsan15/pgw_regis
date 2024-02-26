<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI Calon Pegawai GIP</title>

  <style>
    td {
      line-height: 20px !important;
    }
  </style>

</head>
<body>

<br>
<table cellspacing="" cellpadding="3">
  <tr>
    <td width="25%" align="center"><img src="<?php echo base_url().'foto_pgw/logo/gip_horizontal.png'; ?>" width="80px" height="40px"></td>
    <td width="5%"></td>
    <td width="65%" align="left" valign="middle"><h2>FORMULIR LAMARAN KERJA</h2></td>
    <td width="5%"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

<table  cellspacing="" cellpadding="3">
  <?php foreach ($table1 as $r){ ?>
    <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
    <tr style="display:table-row">
      <td width="30%">Tanggal</td>	
      <td width="2%">:</td>
      <td width="38%"><?php echo $r->pc_tgl_lamar ?></td>
      <td width="30%" align="right" rowspan="2">
        <?php if(!empty($r->pc_foto)){ ?>
          <img src="<?php echo base_url().'foto_pgw/'.$r->pc_foto; ?>" class="img-thumbnail" width="70px" height="90px">
        <?php } ?>
      </td>
    </tr>
    <tr>
      <td>Posisi yang dilamar</td>	
      <td>:</td>
      <td>
        <?php echo $r->pd_nama_divisi ?>
      </td>
    </tr>
  <?php } ?>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

<!-- A. PRIBADI -->
<h3>A. Data Pribadi</h3>
<table  cellspacing="" cellpadding="3">
  <?php foreach ($table1 as $r){ ?>
    <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
    <tr>
      <td width="4%"></td>
      <td width="30%">Nama Lengkap</td>	
      <td width="2%">:</td>
      <td width="64%"><?php echo $r->pc_nama ?></td>
    </tr>	
    <tr>
      <td></td>
      <td>No. KTP</td>	
      <td>:</td>
      <td><?php echo $r->pc_no_ktp ?></td>
    </tr>
    <tr>
      <td></td>
      <td>Tempat Tanggal Lahir</td>	
      <td>:</td>
      <td><?php echo $r->pc_tmp_lahir ?>, <?php echo $r->pc_tgl_lahir ?></td>
    </tr>
    <tr>	
      <td></td>
      <td>Alamat Rumah (KTP)</td>	
      <td>:</td>
      <td><?php echo $r->pc_alamat_ktp ?></td>
    </tr>	
    <tr>	
      <td></td>
      <td>Alamat Rumah (Sekarang)</td>	
      <td>:</td>
      <td><?php echo $r->pc_alamat_sekarang ?></td>
    </tr>	
    <tr>	
      <td></td>
      <td>No. Telepon</td>	
      <td>:</td>
      <td><?php echo $r->pc_telp ?></td>
    </tr>	
    <tr>	
      <td></td>
      <td>Email</td>	
      <td>:</td>
      <td><?php echo $r->pc_email ?></td>
    </tr>	
    <tr>	
      <td></td>
      <td>Jenis Kelamin</td>	
      <td>:</td>	
      <td>
        <?php if(($r->pc_gender) != 2){
            echo 'Laki-laki';
          }else{
            echo 'Wanita';
          } 
        ?>
      </td>
    </tr>	
    <tr>	
      <td></td>
      <td>Agama</td>	
      <td>:</td>	
      <td><?php echo $r->pa_nama ?></td>
    </tr>	
    <tr>	
      <td></td>
      <td>Kewarganegaraan</td>	
      <td>:</td>
      <td><?php echo $r->pc_kewarganegaraan ?></td>
    </tr>
    <tr>	
      <td></td>
      <td>Anak ke</td>	
      <td>:</td>
      <td><?php echo $r->pc_anak_ke ?> dari <?php echo $r->pc_anak_ke_dari ?> bersaudara</td>
    </tr>	
    <tr>	
      <td></td>
      <td>Status Perkawinan</td>	
      <td>:</td>
      <td><?php echo $r->psn_nama ?></td>
    </tr>
    <tr>
      <td></td>
      <td>Jumlah anak</td>	
      <td>:</td>
      <td><?php echo $r->pc_jumlah_anak ?></td>
    </tr>
    
  <?php } ?>  
</table>
<br>

<!-- B. KELUARGA -->
<h3>B. Keluarga</h3>
<table border="1" cellspacing="" cellpadding="3">
  <!-- <tr style="display:table-row">
    <th colspan="4" style="font-size: 14px" align="left">
      B. Keluarga
    </th>
  </tr> -->
    <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
    <tr style="display:table-row">
      <td width="5%">No.</td>
      <td width="20%" align="center">Hubungan</td>
      <td width="20%" align="center">Nama</td>	
      <td width="15%" align="center">Tanggal Lahir</td>	
      <td width="20%" align="center">Pendidikan</td>
      <td width="20%" align="center">Pekerjaan</td>
    </tr>
  <?php $no = 1; foreach ($table2 as $r){ ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $r->pf_hubungan ?></td>
      <td><?php echo $r->pf_nama ?></td>
      <td><?php echo $r->pf_tgl_lahir ?></td>
      <td><?php echo $r->pf_pendidikan ?></td>
      <td><?php echo $r->pf_kerja ?></td>
    </tr>
  <?php $no++; } ?>
</table>
<br>

<!-- C. PENDIDIKAN -->
<h3>C. Pendidikan</h3>
<table border="1" cellspacing="" cellpadding="3">
  <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
  <tr style="display:table-row">
    <td width="5%">No.</td>
    <td width="16%" align="center">Tingkat</td>
    <td width="16%" align="center">Instansi</td>	
    <td width="16%" align="center">Jurusan</td>	
    <td width="16%" align="center">Tahun Masuk</td>
    <td width="16%" align="center">Tahun Keluar</td>
    <td width="15%" align="center">Keterangan</td>
  </tr>
  <?php $no = 1; foreach ($table3 as $r){ ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $r->ppend_tingkat ?></td>
      <td><?php echo $r->ppend_nama ?></td>
      <td><?php echo $r->ppend_jurusan ?></td>
      <td><?php echo $r->ppend_masuk ?></td>
      <td><?php echo $r->ppend_keluar ?></td>
      <td><?php echo $r->ppend_keterangan ?></td>
    </tr>
  <?php $no++; } ?>
</table>
<br>

<!-- D. PEKERJAAN -->
<h3>D. Riwayat Pekerjaan</h3>
<table cellspacing="" cellpadding="3">
  <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
  <?php foreach ($table4 as $r){ ?>
    <tr>
      <td width="4%"></td>
      <td width="30%">Nama Perusahaan</td>	
      <td width="2%">:</td>
      <td width="64%"><?php echo $r->pk_nama ?></td>
    </tr>	
    <tr>
      <td></td>
      <td>Tahun Masuk</td>	
      <td>:</td>
      <td><?php echo $r->pk_masuk ?></td>
    </tr>
    <tr>
      <td></td>
      <td>Tahun Keluar</td>	
      <td>:</td>
      <td><?php echo $r->pk_keluar ?></td>
    </tr>
    <tr>	
      <td></td>
      <td>Divisi</td>	
      <td>:</td>
      <td><?php echo $r->pk_divisi ?></td>
    </tr>	
    <tr>	
      <td></td>
      <td>Jabatan</td>	
      <td>:</td>
      <td><?php echo $r->pk_jabatan ?></td>
    </tr>	
    <tr>	
      <td></td>
      <td>Gaji Pokok</td>	
      <td>:</td>
      <!-- <td>Rp.<?php echo $r->pk_gapok ?></td> -->
      <td>Rp.<?php echo number_format((floatval($r->pk_gapok)), 0, ",", "."); ?></td>
    </tr>	
    <tr>	
      <td></td>
      <td>Tunjangan Lain</td>	
      <td>:</td>
      <!-- <td><?php echo $r->pk_tunjangan_lainnya ?></td> -->
      <td>Rp.<?php echo number_format((floatval($r->pk_tunjangan_lainnya)), 0, ",", "."); ?></td>
    </tr>	
    <tr>	
      <td></td>
      <td>Alasan Pindah</td>	
      <td>:</td>	
      <td><?php echo $r->pk_alasan_pindah ?></td>
    </tr>	
    <tr>	
      <td></td>
      <td>Tugas Kerja</td>	
      <td>:</td>
      <td><?php echo $r->pk_tugas_kerja ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
  <?php } ?>  
</table>

<!-- E. REFERENSI PRO -->
<h3>E. Referensi Profesional</h3>
<table border="1" cellspacing="" cellpadding="3">
  <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
  <tr style="display:table-row">
    <td width="5%">No.</td>
    <td width="24%" align="center">Nama</td>
    <td width="24%" align="center">Hubungan</td>
    <td width="24%" align="center">Jabatan</td>
    <td width="23%" align="center">No. Telp</td>
  </tr>
  <?php $no = 1; foreach ($table5 as $r){ ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $r->prp_nama ?></td>
      <td><?php echo $r->prp_hubungan ?></td>
      <td><?php echo $r->prp_jabatan ?></td>
      <td><?php echo $r->prp_telp ?></td>
    </tr>
  <?php $no++; } ?>
</table>
<br>

<!-- F. REFERENSI KERABAT -->
<h3>F. Referensi Kerabat</h3>
<table border="1" cellspacing="" cellpadding="3">
  <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
  <tr style="display:table-row">
    <td width="5%">No.</td>
    <td width="32%" align="center">Nama</td>
    <td width="32%" align="center">Hubungan</td>
    <td width="31%" align="center">Jabatan</td>
  </tr>
  <?php $no = 1; foreach ($table6 as $r){ ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $r->prk_nama ?></td>
      <td><?php echo $r->prk_hubungan ?></td>
      <td><?php echo $r->prk_jabatan ?></td>
    </tr>
  <?php $no++; } ?>
</table>
<br>

<!-- G. MINAT -->
<h3>G. Minat</h3>
<table  cellspacing="" cellpadding="3">
  <?php foreach ($table7 as $r){ ?>
    <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
    <tr>
      <td width="4%"></td>
      <td width="96%">1. Minimum gaji yang diharapkan</td>	
    </tr>	
    <tr>
      <td></td>
      <td>Rp.<?php echo number_format((floatval($r->ppreq_gaji_min)), 0, ",", "."); ?></td>
    </tr>	
    <tr>
      <td></td>
      <td>2. Kondisi kerja/tunjangan dan fasilitas yang diharapkan</td>
    </tr>	
    <tr>
      <td></td>
      <td><?php echo $r->ppreq_fasilitas ?></td>
    </tr>
    <tr>
      <td></td>
      <td>3. Kapan bisa bergabung dengan Gema Insani?</td>
    </tr>	
    <tr>
      <td></td>
      <td><?php echo $r->ppreq_gabung ?></td>
    </tr>
    <tr>
      <td></td>
      <td>4. Apakah Anda bersedia ditempatkan di luar Jakarta?</td>
    </tr>	
    <tr>
      <td></td>
      <td><?php echo $r->ppreq_penempatan ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    
  <?php } ?>  
</table>

<!-- H. KURSUS/PELATIHAN -->
<h3>H. Kursus/Pelatihan</h3>
<table border="1" cellspacing="" cellpadding="3">
  <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
  <tr style="display:table-row">
    <td width="5%">No.</td>
    <td width="24%" align="center">Nama Instansi</td>
    <td width="24%" align="center">Tahun Masuk</td>
    <td width="24%" align="center">Tahun Keluar</td>
    <td width="23%" align="center">Keterangan</td>
  </tr>
  <?php $no = 1; foreach ($table8 as $r){ ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $r->ps_nama ?></td>
      <td><?php echo $r->ps_masuk ?></td>
      <td><?php echo $r->ps_keluar ?></td>
      <td><?php echo $r->ps_status ?></td>
    </tr>
  <?php $no++; } ?>
</table>
<br>

<!-- I. BAHASA -->
<h3>I. Kemampuan Bahasa</h3>
<table border="1" cellspacing="" cellpadding="3">
  <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
  <tr style="display:table-row">
    <td width="5%">No.</td>
    <td width="24%" align="center">Bahasa</td>
    <td width="24%" align="center">Tertulis</td>
    <td width="24%" align="center">Lisan</td>
    <td width="23%" align="center">Keterangan</td>
  </tr>
  <?php $no = 1; foreach ($table9 as $r){ ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $r->bahasa ?></td>
      <td><?php echo $r->tulis ?></td>
      <td><?php echo $r->lisan ?></td>
      <td><?php echo $r->keterangan ?></td>
    </tr>
  <?php $no++; } ?>
</table>
<br>

<!-- J. INFORMASI TAMBAHAN -->
<h3>J. Informasi Tambahan</h3>
<table cellspacing="" cellpadding="3">
  <?php foreach ($table10 as $r){ ?>
    <!-- <tr class="tr-class-<?php echo $active?> "></tr> -->
    <tr>
      <td width="4%"></td>
      <td width="96%">1. Hobi/aktivitas yang dilakukan saat waktu senggang</td>	
    </tr>	
    <tr>
      <td></td>
      <td><?php echo $r->pp_hobi ?></td>
    </tr>
    <tr>
      <td></td>
      <td>2. Apakah Anda buta warna?</td>	
    </tr>	
    <tr>
      <td></td>
      <td>
        <?php if(($r->pp_buta_warna) === 1){
            echo 'Tidak';
          }elseif(($r->pp_buta_warna) === 2){
            echo 'Buta warna sebagian';
          }
          else{
            echo 'Buta warna total';
          } 
        ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>3. Penyakit yang pernah menyebabkan Anda dirawat di rumah sakit.</td>	
    </tr>	
    <tr>
      <td></td>
      <td><?php echo $r->pp_penyakit ?>, Dirawat berapa lama? <?php echo $r->pp_lama_rawat ?></td>
    </tr>
    <tr>
      <td></td>
      <td>4. Penyakit menurun yang dialami</td>	
    </tr>	
    <tr>
      <td></td>
      <td><?php echo $r->pp_sakit_turunan ?></td>
    </tr>
    <tr>
      <td></td>
      <td>5. Penyakit tertentu yang masih dialami saat ini</td>	
    </tr>	
    <tr>
      <td></td>
      <td><?php echo $r->pp_sakit_sekarang ?></td>
    </tr>
    <tr>
      <td></td>
      <td>6. Apakah Anda pernah terlibat tindak kriminal yang menyebabkan Anda berurusan dengan hukum?</td>
    </tr>	
    <tr>
      <td></td>
      <td>
        <?php if(($r->pp_kriminal) === 1){
            echo 'Iya';
          } else{
            echo 'Tidak';
          } 
        ?>, Kapan? <?php echo $r->pp_kriminal_waktu ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>7. Mengapa anda melakukan tindak kriminal tersebut?</td>	
    </tr>	
    <tr>
      <td></td>
      <td><?php echo $r->pp_kriminal_alasan ?></td>
    </tr>
    <tr>
      <td></td>
      <td>8. Organisasi sosial yang pernah Anda ikuti</td>	
    </tr>	
    <tr>
      <td></td>
      <td><?php echo $r->pp_organisasi ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
  <?php } ?>  
</table>

<!-- PERNYATAAN -->
<table cellspacing="" cellpadding="3">
    <tr style="display:table-row">
      <th align="justify">
        <b>
          DENGAN INI SAYA MENYATAKAN BAHWA SELURUH INFORMASI YANG TERDAPAT 
          DALAM FORMULIR INI BENAR DAN SAYA MEMBERIKAN WEWENANG PENUH KEPADA 
          GEMA INSANI UNTUK MENELITI KEBENARAN INFORMASI TERSEBUT.
          <br>
          JIKA TERNYATA KEMUDIAN ADA KETIDAKBENARAN DALAM INFORMASI TERSEBUT, 
          SAYA SETUJU BAHWA GEMA INSANI BERHAK UNTUK MENGHENTIKAN PROSES REKRUTMENT 
          ATAU MEMUTUSKAN HUBUNGAN KERJA TANPA KEWAJIBAN MEMBAYAR APAPUN KEPADA SAYA.
        </b>
      </th>
    </tr>
    
</table>


</body>
</html>




