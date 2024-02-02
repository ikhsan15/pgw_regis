<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul ?></title>

  <!-- Material Design Iconic Font -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/material-design-iconic-font_2/css/material-design-iconic-font.css'); ?>">

  <!-- Style CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-5.3.2/dist/css/bootstrap.css'); ?>">
  <!-- <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-5.3.2/dist/css/bootstrap.min.css'); ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/fontawesome-6.4.2/css/all.min.css'); ?>">

  <!-- Datepicker CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.min.css'); ?>">
  <!-- <link rel="stylesheet" href="<?php echo base_url('/assets/datepicker/datepicker.min.css'); ?>"> -->

  <script type="text/javascript" src="<?php echo base_url('/assets/js/titik.js'); ?>"></script>

  <!-- Jquery core -->
  <script src="<?php echo base_url('/assets/js/jquery-3.7.1.min.js'); ?>"></script>

  <!-- Datepicker JS -->
  <script src="<?php echo base_url('/assets/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.min.js'); ?>"></script>
  
  <!-- Jquery step -->
  <script src="<?php echo base_url('/assets/js/jquery.steps.js');?>"></script>
  <!-- Main JS -->
  <script src="<?php echo base_url('/assets/js/main.js');?>"></script>

</head>
<body>

<div class="container">
  <div class="row mt-4">
    <div class="col">
      <div class="wrapper">
        <h4></h4>
        <form role="form" enctype="multipart/form-data" data-parsley-validate="" class="form-horizontal form-label-left" method="post" accept-charset="utf-8" action="<?php echo base_url().$class;?>/f_pegawai/crud/?rNum=<?php echo $rNum ?>">          
          <div class="form-header" >
            <img src="<?php echo base_url();?>assets/Logo Gema Insani - Horizontal.png" border="0" alt="">
          </div>
          <div class="form-header">
            <h3>Pendaftaran Online Pegawai Gema Insani</h3>
          </div>
          <div id="wizard">
            <!-- Section 1 - Data Umum -- START -->
            <h4></h4>
            <section>
              <h4>A. Data Umum</h4>
              <div class="form-row-hor">
                <div class="row">
                  <div class="col-md-9">
                    <label for="exampleInputFile">Upload Foto 3x4 <code>*<br>(.png, .jpg)</code></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="userfile" name="userfile" onchange="readURL(this);">
                        <!-- <label class="custom-file-label" for="exampleInputFile">Upload Foto</label> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <br>
                    <img id="cover" class="rounded float-end" class="img-thumbnail" width="70%" 
                        src="https://img.icons8.com/wired/64/000000/no-image.png" 
                      alt="image cover" />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <label for="wajib_isi"> <code>* (wajib diisi)</code> </label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <select class="form-control select2" name="inp_pd_id_divisi_lamar"  id="inp_pd_id_divisi_lamar">
                    <option value="">---</option>
                    <?php echo $list_divisi_lamar; ?>
                  </select>
                  <div class="underline"></div>
                  <label for="inp_pd_id_divisi_lamar" id="select_opt">Posisi yand dilamar <code>*</code></label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <input type="text" id="inp_pc_nama" name="inp_pc_nama" required>
                  <div class="underline"></div>
                  <label for="inp_pc_nama">Nama Lengkap <code>*</code></label>
                </div>
                <div class="input-data">
                  <input type="text" id="inp_pc_no_ktp" name="inp_pc_no_ktp" required>
                  <div class="underline"></div>
                  <label for="inp_pc_no_ktp">No. KTP <code>*</code></label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <input type="text" id="inp_pc_tmp_lahir" name="inp_pc_tmp_lahir" required>
                  <div class="underline"></div>
                  <label for="inp_pc_tmp_lahir">Tempat Lahir <code>*</code></label>
                </div>
                <div class="input-data">
                  <input type="text" id="inp_pc_tgl_lahir" name="inp_pc_tgl_lahir" onkeypress="return /[]/i.test(event.key)" onpaste="return false;" onCopy="return false" onCut="return false" required>
                  <div class="underline"></div>
                  <label for="inp_pc_tgl_lahir">Tanggal Lahir <code>*</code></label>
                </div>
              </div>
              <!-- <div class="form-row">
                <div class="input-data">
                  <input id ="date_input" dateformat="d M y" type="date"/>
                  <span class="datepicker_label" style="pointer-events: none;"></span>
                </div>
              </div> -->
              <div class="form-row textarea">
                <div class="input-data textarea">
                  <textarea rows="3" cols="80" id="inp_pc_alamat_ktp" name="inp_pc_alamat_ktp" required></textarea>
                  <div class="underline"></div>
                  <label for="inp_pc_alamat_ktp">Alamat rumah sesuai KTP <code>*</code></label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data textarea">
                  <textarea rows="3" cols="80" id="inp_pc_alamat_sekarang" name="inp_pc_alamat_sekarang" required></textarea>
                  <div class="underline"></div>
                  <label for="inp_pc_alamat_sekarang">Alamat rumah sekarang <code>*</code></label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                <input type="number" id="inp_pc_telp" name="inp_pc_telp" onkeypress="return /[0-9]/i.test(event.key)" onpaste="return false;" onCopy="return false" onCut="return false" required>
                  <div class="underline"></div>
                  <label for="inp_pc_telp">No. WA <code>*</code></label>
                </div>
                <div class="input-data">
                <input type="email" id="inp_pc_email" name="inp_pc_email" required>
                  <div class="underline"></div>
                  <label for="inp_pc_email">Email <code>*</code></label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" id="gender_label">
                  <label for="inp_pc_gender">Jenis Kelamin <code>*</code></label>
                  <div class="form-row">
                    <div class="wrapper" id="radio_pc_gender">
                      <input type="radio" name="inp_pc_gender" value="1" id="pc_gender_1" checked>
                      <input type="radio" name="inp_pc_gender" value="2" id="pc_gender_2">
                      <label for="pc_gender_1" class="option pc_gender_1">
                        <div class="dot"></div>
                        <span>Pria</span>
                      </label>
                      <label for="pc_gender_2" class="option pc_gender_2">
                        <div class="dot"></div>
                        <span>Wanita</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-row">
                    <div class="input-data">
                      <select class="form-control select2" name="inp_pa_id_agama"  id="inp_pa_id_agama">
                      <!-- <select class="form-control select2" onfocus='this.size=5;' onblur='this.size=0;' onchange='this.size=1; this.blur();'> -->
                        <option value="">---</option>
                        <?php echo $list_agama; ?>
                      </select>
                      <div class="underline"></div>
                      <label for="inp_pa_id_agama" id="select_opt">Agama <code>*</code></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <input type="text" id="inp_pc_kewarganegaraan" name="inp_pc_kewarganegaraan" required>
                  <div class="underline"></div>
                  <label for="inp_pc_kewarganegaraan">Kewarganegaraan <code>*</code></label>
                </div>
              </div>         
              <div class="form-row">
                <div class="input-data">
                  <input type="number" id="inp_pc_anak_ke" name="inp_pc_anak_ke" required>
                  <div class="underline"></div>
                  <label for="inp_pc_anak_ke">Anak Ke <code>*</code></label>
                </div>
                <div class="input-data">
                  <input type="number" id="inp_pc_anak_ke_dari" name="inp_pc_anak_ke_dari" required>
                  <div class="underline"></div>
                  <label for="inp_pc_anak_ke_dari">dari <code>*</code></label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <select class="form-control select2" name="inp_psn_id_status_nikah"  id="inp_psn_id_status_nikah">
                    <option value="">---</option>
                    <?= $list_status_nikah; ?>
                  </select>
                  <div class="underline"></div>
                  <label for="inp_psn_id_status_nikah" id="select_opt">Status Perkawinan <code>*</code></label>
                </div>
                <div class="input-data">
                  <input type="number" id="inp_pc_jumlah_anak" name="inp_pc_jumlah_anak" required>
                  <div class="underline"></div>
                  <label for="inp_pc_jumlah_anak">Jumlah Anak <code>*</code></label>
                </div>
              </div>
            </section>
            <!-- Section 1 - Data Umum -- END -->
            <!-- Section 2 - Data Keluarga -- START -->
            <h4></h4>
            <section>
              <h4>B. Data Keluarga</h4>
              <div class="container">
                <div class="form-row">
                  <div class="input-data">
                    <input type="text" id="inp_pf_nama" name="inp_pf_nama[]" required>
                    <div class="underline"></div>
                    <label for="inp_pf_nama">Nama <code>*</code></label>
                  </div>
                  <div class="input-data">
                    <input type="text" id="inp_pf_hubungan" name="inp_pf_hubungan[]" required>
                    <div class="underline"></div>
                    <label for="inp_pf_hubungan">Hubungan <code>*</code></label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="input-data">
                    <input type="date" id="inp_pf_tgl_lahir" name="inp_pf_tgl_lahir[]" onkeypress="return /[]/i.test(event.key)" onpaste="return false;" onCopy="return false" onCut="return false" required>
                    <div class="underline"></div>
                    <label for="inp_pf_tgl_lahir">Tanggal Lahir <code>*</code></label>
                  </div>
                  <div class="input-data">
                    <input type="text" id="inp_pf_pendidikan" name="inp_pf_pendidikan[]" required>
                    <div class="underline"></div>
                    <label for="inp_pf_pendidikan">Pendidikan <code>*</code></label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="input-data">
                    <input type="text" id="inp_pf_kerja" name="inp_pf_kerja[]" required>
                    <div class="underline"></div>
                    <label for="inp_pf_kerja">Pekerjaan <code>*</code></label>
                  </div>
                  <div class="input-data">
                  </div>
                </div>
              </div>

              <div class="container">
                <div class="ln_solid"></div>
                <div id="nextkolom" name="nextkolom"></div>
                <button type="button" id="jumlahkolom" value="1" style="display:none"></button>
              </div>

              <div class="container">
                <div class="form-row">
                  <div class="input-data">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="button" class="btn btn-info tambah-form">Tambah Form</button>
                    </div>
                  </div>
                </div>
              </div>
              
            </section>
            <!-- Section 2 - Data Keluarga -- END -->
            <!-- Section 3 - Data Pendidikan -- START -->
            <h4></h4>
            <section>
              <h4>C. Riwayat Pendidikan</h4>
              <div class="container">

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_ppend_nama" name="inp_ppend_nama[]" required>
                      <div class="underline"></div>
                      <label for="inp_ppend_nama">Nama Instansi <code>*</code></label>
                    </div>
                    <div class="input-data">
                      <input type="text" id="inp_ppend_keterangan" name="inp_ppend_keterangan[]" required>
                      <div class="underline"></div>
                      <label for="inp_ppend_keterangan">Lulus / Tidak Lulus <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_ppend_alamat" name="inp_ppend_alamat[]" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_ppend_alamat">Alamat Instansi <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_ppend_tingkat" name="inp_ppend_tingkat[]" required>
                      <div class="underline"></div>
                      <label for="inp_ppend_tingkat">Tingkat <code>(SD/SMP/SMA/dll)*</code></label>
                    </div>
                    <div class="input-data">
                      <input type="text" id="inp_ppend_jurusan" name="inp_ppend_jurusan[]" required>
                      <div class="underline"></div>
                      <label for="inp_ppend_jurusan">Jurusan <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="date" id="inp_ppend_masuk" name="inp_ppend_masuk[]" required>
                      <div class="underline"></div>
                      <label for="inp_ppend_masuk">Tahun Masuk <code>*</code></label>
                    </div>
                    <div class="input-data">
                      <input type="date" id="inp_ppend_keluar" name="inp_ppend_keluar[]" required>
                      <div class="underline"></div>
                      <label for="inp_ppend_keluar">Tahun Keluar <code>*</code></label>
                    </div>
                  </div>                  
                </div>

                <div class="container">
                  <div class="ln_solid"></div>
                  <div id="next_k_pendidikan" name="next_k_pendidikan"></div>
                  <button type="button" id="jumlah_k_pendidikan" value="1" style="display:none"></button>
                </div>

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-info tambah_k_pendidikan">Tambah Form</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>              
            </section>
            <!-- Section 3 - Data Pendidikan -- END -->
            <!-- Section 4 - Data Pekerjaan -- START -->
            <h4></h4>
            <section>
              <h4>D. Riwayat Pekerjaan</h4>
              <div class="container">

                <!-- <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_pk_nama" name="inp_pk_nama[]" required>
                      <div class="underline"></div>
                      <label for="inp_pk_nama">Nama Perusahaan</label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pk_alamat" name="inp_pk_alamat[]" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pk_alamat">Alamat Perusahaan</label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_pk_divisi" name="inp_pk_divisi[]" required>
                      <div class="underline"></div>
                      <label for="inp_pk_divisi">Divisi</label>
                    </div>
                    <div class="input-data">
                      <input type="text" id="inp_pk_jabatan" name="inp_pk_jabatan[]" required>
                      <div class="underline"></div>
                      <label for="inp_pk_jabatan">Jabatan</label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="date" id="inp_pk_masuk" name="inp_pk_masuk[]" required>
                      <div class="underline"></div>
                      <label for="inp_pk_masuk">Tanggal Masuk</label>
                    </div>
                    <div class="input-data">
                      <input type="date" id="inp_pk_keluar" name="inp_pk_keluar[]" required>
                      <div class="underline"></div>
                      <label for="inp_pk_keluar">Tanggal Keluar</label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_pk_gapok" name="inp_pk_gapok[]" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
                      <div class="underline"></div>
                      <label for="inp_pk_gapok">Gaji Pokok</label>
                    </div>
                    <div class="input-data">
                      <input type="text" id="inp_pk_tunjangan_lainnya" name="inp_pk_tunjangan_lainnya[]" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
                      <div class="underline"></div>
                      <label for="inp_pk_tunjangan_lainnya">Tunjangan Lainnya</label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pk_tugas_kerja" name="inp_pk_tugas_kerja[]" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pk_tugas_kerja">Tugas Kerja</label>
                    </div>
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pk_alasan_pindah" name="inp_pk_alasan_pindah[]" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pk_alasan_pindah">Alasan pindah</label>
                    </div>
                  </div>
                  
                </div> -->

                <div class="container">
                  <div class="ln_solid"></div>
                  <div id="next_k_kerja" name="next_k_kerja"></div>
                  <button type="button" id="jumlah_k_kerja" value="1" style="display:none"></button>
                </div>

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-info tambah_k_kerja">Tambah Form</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>              
            </section>
            <!-- Section 4 - Data Pekerjaan -- END -->
            <!-- Section 5 - Data Referensi Pro -- START -->
            <h4></h4>
            <section>
              <h4>E. Referensi Profesional</h4>
              <div class="container">

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <label for="">Sebutkan orang yang kenal baik dengan reputasi profesional Anda.</label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_prp_nama" name="inp_prp_nama[]" required>
                      <div class="underline"></div>
                      <label for="inp_prp_nama">Nama <code>*</code></label>
                    </div>
                    <div class="input-data">
                      <input type="text" id="inp_prp_hubungan" name="inp_prp_hubungan[]" required>
                      <div class="underline"></div>
                      <label for="inp_prp_hubungan">Hubungan <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_prp_jabatan" name="inp_prp_jabatan[]" required>
                      <div class="underline"></div>
                      <label for="inp_prp_jabatan">Posisi / Jabatan <code>*</code></label>
                    </div>
                    <div class="input-data">
                      <input type="text" id="inp_prp_telp" name="inp_prp_telp[]" required>
                      <div class="underline"></div>
                      <label for="inp_prp_telp">No. Telp <code>*</code></label>
                    </div>
                  </div>
                  
                </div>

                <div class="container">
                  <div class="ln_solid"></div>
                  <div id="next_k_ref_pro" name="next_k_ref_pro"></div>
                  <button type="button" id="jumlah_k_ref_pro" value="1" style="display:none"></button>
                </div>

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-info tambah_k_ref_pro">Tambah Form</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>              
            </section>
            <!-- Section 5 - Data Referensi Pro -- END -->
            <!-- Section 6 - Data Referensi Kerabat -- START -->
            <h4></h4>
            <section>
              <h4>F. Referensi Kerabat</h4>
              <div class="container">

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <label for="">Apakah Anda memiliki saudara kandung/kerabat yang bekerja di Gema Insani?</label>
                    </div>
                  </div>
                  <!-- <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_prk_nama" name="inp_prk_nama[]" required>
                      <div class="underline"></div>
                      <label for="inp_prk_nama">Nama</label>
                    </div>
                    <div class="input-data">
                      <input type="text" id="inp_prk_hubungan" name="inp_prk_hubungan[]" required>
                      <div class="underline"></div>
                      <label for="inp_prk_hubungan">Hubungan</label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_prk_jabatan" name="inp_prk_jabatan[]" required>
                      <div class="underline"></div>
                      <label for="inp_prk_jabatan">Posisi / Jabatan</label>
                    </div>
                  </div> -->
                  
                </div>

                <div class="container">
                  <div class="ln_solid"></div>
                  <div id="next_k_ref_kerabat" name="next_k_ref_kerabat"></div>
                  <button type="button" id="jumlah_k_ref_kerabat" value="1" style="display:none"></button>
                </div>

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-info tambah_k_ref_kerabat">Tambah Form</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>              
            </section>
            <!-- Section 6 - Data Referensi -- END -->
            <!-- Section 7 - Data Request Calon -- START -->
            <h4></h4>
            <section>
              <h4>G. Minat</h4>
              <div class="container">

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_ppreq_gaji_min" name="inp_ppreq_gaji_min" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
                      <div class="underline"></div>
                      <label for="inp_ppreq_gaji_min">Minimum gaji yang diharapkan <code>*</code> </label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_ppreq_fasilitas" name="inp_ppreq_fasilitas" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_ppreq_fasilitas">Kondisi kerja/tunjangan dan fasilitas apa yang Anda harapkan? <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="date" id="inp_ppreq_gabung" name="inp_ppreq_gabung" required>
                      <div class="underline"></div>
                      <label for="inp_ppreq_gabung">Kapan bisa bergabung dengan Gema Insani? <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_ppreq_penempatan" name="inp_ppreq_penempatan" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_ppreq_penempatan">Apakah Anda bersedia ditempatkan di luar Jakarta? (Ya / Tidak). Berikan Alasan Anda. <code>*</code></label>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Section 7 - Data Request Calon -- END -->            
            <!-- Section 8 - Data Kursus -- START -->
            <h4></h4>
            <section>
              <h4>H. Riwayat Kursus/Pelatihan</h4>
              <div class="container">

                <!-- <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_ps_nama" name="inp_ps_nama[]" required>
                      <div class="underline"></div>
                      <label for="inp_ps_nama">Nama Instansi</label>
                    </div>
                    <div class="input-data">
                      <input type="text" id="inp_ps_status" name="inp_ps_status[]" required>
                      <div class="underline"></div>
                      <label for="inp_ps_status">Lulus / Tidak Lulus</label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <input type="date" id="inp_ps_masuk" name="inp_ps_masuk[]" required>
                      <div class="underline"></div>
                      <label for="inp_ps_masuk">Tahun Masuk</label>
                    </div>
                    <div class="input-data">
                      <input type="date" id="inp_ps_keluar" name="inp_ps_keluar[]" required>
                      <div class="underline"></div>
                      <label for="inp_ps_keluar">Tahun Keluar</label>
                    </div>
                  </div>                  
                </div> -->

                <div class="container">
                  <div class="ln_solid"></div>
                  <div id="next_k_kursus" name="next_k_kursus"></div>
                  <button type="button" id="jumlah_k_kursus" value="1" style="display:none"></button>
                </div>

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-info tambah_k_kursus">Tambah Form</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>              
            </section>
            <!-- Section 8 - Data Kursus -- END -->
            <!-- Section 9 - Data Bahasa -- START -->
            <h4></h4>
            <section>
              <h4>H. Kemampuan Bahasa</h4>
              <div class="container">

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <input type="text" id="inp_pb_nama" name="inp_pb_nama[]" required>
                      <div class="underline"></div>
                      <label for="inp_pb_nama">Bahasa <code>*</code></label>
                    </div>
                    <div class="input-data">
                      <input type="text" id="inp_pb_keterangan" name="inp_pb_keterangan[]" required>
                      <div class="underline"></div>
                      <label for="inp_pb_keterangan">Aktif / Pasif <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="input-data">
                      <select class="form-control select2" name="inp_pb_tulis[]"  id="inp_pb_tulis">
                        <option value="">---</option>
                        <?php echo $list_lv_bahasa; ?>
                      </select>
                      <div class="underline"></div>
                      <label for="inp_pb_tulis" id="select_opt">Tertulis <code>*</code></label>
                    </div>
                    <div class="input-data">
                      <select class="form-control select2" name="inp_pb_lisan[]"  id="inp_pb_lisan">
                        <option value="">---</option>
                        <?php echo $list_lv_bahasa; ?>
                      </select>
                      <div class="underline"></div>
                      <label for="inp_pb_lisan" id="select_opt">Lisan <code>*</code></label>
                    </div>
                  </div>            
                </div>

                <div class="container">
                  <div class="ln_solid"></div>
                  <div id="next_k_bahasa" name="next_k_bahasa"></div>
                  <button type="button" id="jumlah_k_bahasa" value="1" style="display:none"></button>
                </div>

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-info tambah_k_bahasa">Tambah Form</button>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>              
            </section>
            <!-- Section 9 - Data Bahasa -- END -->
            <!-- Section 10 - Data Pertanyaan -- START -->
            <h4></h4>
            <section>
              <h4>H.	Informasi Tambahan</h4>
              <div class="container">

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <label for="">Silahkan diisi dengan sebenar-benarnya. <code> Jika tidak sesuai dengan anda, mohon di isi dengan tanda - (strip)</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pp_hobi" name="inp_pp_hobi" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pp_hobi">1. Hobi/aktivitas yang dilakukan saat waktu senggang <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pp_buta_warna" name="inp_pp_buta_warna" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pp_buta_warna">2. Apakah Anda buta warna? <code>*<br>(a)Tidak / (b)Buta warna sebagian / (c)Buta warna total</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pp_penyakit" name="inp_pp_penyakit" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pp_penyakit">3.	Penyakit yang pernah menyebabkan Anda dirawat di rumah sakit  <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pp_lama_rawat" name="inp_pp_lama_rawat" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pp_lama_rawat">Dirawat berapa lama?  <code>*<br></code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pp_sakit_turunan" name="inp_pp_sakit_turunan" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pp_sakit_turunan">4.	Penyakit menurun yang dialami. <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pp_sakit_sekarang" name="inp_pp_sakit_sekarang" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pp_sakit_sekarang">5.	Penyakit tertentu yang masih dialami saat ini.  <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pp_kriminal" name="inp_pp_kriminal" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pp_kriminal">6.	Apakah Anda pernah terlibat tindak kriminal yang menyebabkan Anda berurusan dengan hukum? <code>* (Ya/Tidak)</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pp_kriminal_waktu" name="inp_pp_kriminal_waktu" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pp_kriminal_waktu">Kapan Anda terlibat tindak kriminal tersebut? <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pp_kriminal_alasan" name="inp_pp_kriminal_alasan" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pp_kriminal_alasan">Mengapa anda melakukan tindak kriminal tersebut? <code>*</code></label>
                    </div>
                  </div>
                  <div class="form-row textarea">
                    <div class="input-data textarea">
                      <textarea rows="3" cols="80" id="inp_pp_organisasi" name="inp_pp_organisasi" required></textarea>
                      <div class="underline"></div>
                      <label for="inp_pp_organisasi">7.	Organisasi sosial yang pernah Anda ikuti  <code>*</code></label>
                    </div>
                  </div>
                </div>

                <br><br>

                <div class="container">
                  <div class="row" align="justify">
                    <!-- <div class="input-data"> -->
                      <h6>
                        DENGAN INI SAYA MENYATAKAN BAHWA SELURUH INFORMASI YANG TERDAPAT 
                        DALAM FORMULIR INI BENAR DAN SAYA MEMBERIKAN WEWENANG PENUH KEPADA 
                        GEMA INSANI UNTUK MENELITI KEBENARAN INFORMASI TERSEBUT.
                      </h6>
                      <br>
                      <h6>
                        JIKA TERNYATA KEMUDIAN ADA KETIDAKBENARAN DALAM INFORMASI TERSEBUT, 
                        SAYA SETUJU BAHWA GEMA INSANI BERHAK UNTUK MENGHENTIKAN PROSES REKRUTMENT 
                        ATAU MEMUTUSKAN HUBUNGAN KERJA TANPA KEWAJIBAN MEMBAYAR APAPUN KEPADA SAYA.
                      </h6>
                    <!-- </div> -->
                  </div>
                </div>

                <div class="container">
                  <div class="form-row">
                    <div class="input-data">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-info" id="simpan_simpan" name="submit_crud" value="simpan" >Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </section>
            <!-- Section 10 - Data Pertanyaan -- END --> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- partial -->
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#cover')
        .attr('src', e.target.result)
        .width(150)
        .height(200);
      };
    reader.readAsDataURL(input.files[0]);
    }
  }  
</script> 

<script type="text/javascript">

  // start - add other column for table pgw_keluarga
  $(document).ready(function() {

    var i=2;
    $(".tambah-form").on('click', function(){
      row = '<div class="rec-element">'+
      
              '<div class="form-row">'+
                '<div class="input-data">'+
                  '<div class="input-group">'+
                  '<span class="input-group-btn">'+
                    '<button type="button" class="btn btn-warning del-element"><i class="fa fa-minus-square"></i> Hapus</button>'+
                  '</span>'+
                '</div>'+
                '<div class="ln_solid"></div>'+
                '</div>'+
              '</div>'+

              '<div class="form-row">'+
                '<div class="input-data">'+
                  '<input type="text" name="inp_pf_nama[]" id="inp_pf_nama'+i+'" alt="'+i+'" required>'+
                  '<div class="underline"></div>'+
                  '<label for="inp_pf_nama">Nama '+i+
                  '</label>'+
                '</div>'+
                '<div class="input-data">'+
                  '<input type="text" name="inp_pf_hubungan[]" id="inp_pf_hubungan'+i+'" alt="'+i+'" required>'+
                  '<div class="underline"></div>'+
                  '<label for="inp_pf_hubungan">Hubungan '+i+
                  '</label>'+
                '</div>'+
              '</div>'+

              '<div class="form-row">'+
                '<div class="input-data">'+
                  '<input type="date" name="inp_pf_tgl_lahir[]" id="inp_pf_tgl_lahir'+i+'" alt="'+i+'" required>'+
                  '<div class="underline"></div>'+
                  '<label for="inp_pf_tgl_lahir">Tanggal Lahir '+i+
                  '</label>'+
                '</div>'+

                '<div class="input-data">'+
                  '<input type="text" name="inp_pf_pendidikan[]" id="inp_pf_pendidikan'+i+'" alt="'+i+'" required>'+
                  '<div class="underline"></div>'+
                  '<label for="inp_pf_pendidikan">Pendidikan '+i+
                  '</label>'+
                '</div>'+
              '</div>'+

              '<div class="form-row">'+
                '<div class="input-data">'+
                  '<input type="text" name="inp_pf_kerja[]" id="inp_pf_kerja'+i+'" alt="'+i+'" required>'+
                  '<div class="underline"></div>'+
                  '<label for="inp_pf_kerja">Pekerjaan '+i+
                  '</label>'+
                '</div>'+
                '<div class="input-data">'+
                '</div>'+
              '</div>'+

            '</div>';

      $(row).insertBefore("#nextkolom");
      $('#jumlahkolom').val(i+1);
      i++;      
      
    });

    $(document).on('click','.del-element',function (e) {        
      e.preventDefault()
      i--;
      //$(this).parents('.form-row').fadeOut(400);
      $(this).parents('.rec-element').remove();
      $('#jumlahkolom').val(i-1);
    });

    $(".inp_pf_tgl_lahir[]").on("change", function(){
      $(".inp_pf_tgl_lahir[]").val($(this).val());
    });
    
  });
  // end - add other column for table pgw_keluarga
  // start - add other column for table pgw_pendidikan
  $(document).ready(function() {

    var i=2;
    $(".tambah_k_pendidikan").on('click', function(){
      row = '<div class="rec-element">'+

          '<div class="form-row">'+
            '<div class="input-data">'+
              '<div class="input-group">'+
              '<span class="input-group-btn">'+
                '<button type="button" class="btn btn-warning del-element"><i class="fa fa-minus-square"></i> Hapus</button>'+
              '</span>'+
            '</div>'+
            '<div class="ln_solid"></div>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_ppend_nama[]" id="inp_ppend_nama'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ppend_nama">Nama Instansi '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="text" name="inp_ppend_keterangan[]" id="inp_ppend_keterangan'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ppend_keterangan">Lulus / Tidak Lulus '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row textarea">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_ppend_alamat[]" id="inp_ppend_alamat'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ppend_alamat">Alamat Instansi '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_ppend_tingkat[]" id="inp_ppend_tingkat'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ppend_tingkat">Tingkat '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="text" name="inp_ppend_jurusan[]" id="inp_ppend_jurusan'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ppend_jurusan">Jurusan '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="date" name="inp_ppend_masuk[]" id="inp_ppend_masuk'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ppend_masuk">Tahun Masuk '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="date" name="inp_ppend_keluar[]" id="inp_ppend_keluar'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ppend_keluar">Tahun Keluar '+i+
              '</label>'+
            '</div>'+
          '</div>'+

        '</div>';

      $(row).insertBefore("#next_k_pendidikan");
      $('#jumlah_k_pendidikan').val(i+1);
      i++;      
      
    });

    $(document).on('click','.del-element',function (e) {        
      e.preventDefault()
      i--;
      //$(this).parents('.form-row').fadeOut(400);
      $(this).parents('.rec-element').remove();
      $('#jumlah_k_pendidikan').val(i-1);
    });

  });
  // end - add other column for table pgw_pendidikan
  // start - add other column for table pgw_kerja
  $(document).ready(function() {

    var i=2;
    $(".tambah_k_kerja").on('click', function(){
      row = '<div class="rec-element">'+

          '<div class="form-row">'+
            '<div class="input-data">'+
              '<div class="input-group">'+
              '<span class="input-group-btn">'+
                '<button type="button" class="btn btn-warning del-element"><i class="fa fa-minus-square"></i> Hapus</button>'+
              '</span>'+
            '</div>'+
            '<div class="ln_solid"></div>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_pk_nama[]" id="inp_pk_nama'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pk_nama">Nama Perusahaan '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row textarea">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_pk_alamat[]" id="inp_pk_alamat'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pk_alamat">Alamat Perusahaan '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_pk_divisi[]" id="inp_pk_divisi'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pk_divisi">Divisi '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="text" name="inp_pk_jabatan[]" id="inp_pk_jabatan'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pk_jabatan">Jabatan '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="date" name="inp_pk_masuk[]" id="inp_pk_masuk'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pk_masuk">Tanggal Masuk '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="date" name="inp_pk_keluar[]" id="inp_pk_keluar'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pk_keluar">Tanggal Keluar '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_pk_gapok[]" id="inp_pk_gapok'+i+'" alt="'+i+'" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pk_gapok">Gaji Pokok '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="text" name="inp_pk_tunjangan_lainnya[]" id="inp_pk_tunjangan_lainnya'+i+'" alt="'+i+'" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pk_tunjangan_lainnya">Tunjangan Lainnya '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row textarea">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_pk_tugas_kerja[]" id="inp_pk_tugas_kerja'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pk_tugas_kerja">Tugas Kerja '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row textarea">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_pk_alasan_pindah[]" id="inp_pk_alasan_pindah'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pk_alasan_pindah">Alasan Pindah '+i+
              '</label>'+
            '</div>'+
          '</div>'+

        '</div>';

      $(row).insertBefore("#next_k_kerja");
      $('#jumlah_k_kerja').val(i+1);
      i++;      
      
    });

    $(document).on('click','.del-element',function (e) {        
      e.preventDefault()
      i--;
      //$(this).parents('.form-row').fadeOut(400);
      $(this).parents('.rec-element').remove();
      $('#jumlah_k_kerja').val(i-1);
    });

  });
  // end - add other column for table pgw_kerja
  // start - add other column for table pgw_referensi_pro
  $(document).ready(function() {

    var i=2;
    $(".tambah_k_ref_pro").on('click', function(){
      row = '<div class="rec-element">'+

          '<div class="form-row">'+
            '<div class="input-data">'+
              '<div class="input-group">'+
              '<span class="input-group-btn">'+
                '<button type="button" class="btn btn-warning del-element"><i class="fa fa-minus-square"></i> Hapus</button>'+
              '</span>'+
            '</div>'+
            '<div class="ln_solid"></div>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_prp_nama[]" id="inp_prp_nama'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_prp_nama">Nama '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="text" name="inp_prp_hubungan[]" id="inp_prp_hubungan'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_prp_hubungan">Hubungan '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_prp_jabatan[]" id="inp_prp_jabatan'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_prp_jabatan">Jabatan '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="text" name="inp_prp_telp[]" id="inp_prp_telp'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_prp_telp">No. Telp '+i+
              '</label>'+
            '</div>'+
          '</div>'+

        '</div>';

      $(row).insertBefore("#next_k_ref_pro");
      $('#jumlah_k_ref_pro').val(i+1);
      i++;      
      
    });

    $(document).on('click','.del-element',function (e) {        
      e.preventDefault()
      i--;
      //$(this).parents('.form-row').fadeOut(400);
      $(this).parents('.rec-element').remove();
      $('#jumlah_k_ref_pro').val(i-1);
    });

  });
  // end - add other column for table pgw_referensi_pro
  // start - add other column for table pgw_referensi_kerabat
  $(document).ready(function() {

    var i=2;
    $(".tambah_k_ref_kerabat").on('click', function(){
      row = '<div class="rec-element">'+

          '<div class="form-row">'+
            '<div class="input-data">'+
              '<div class="input-group">'+
              '<span class="input-group-btn">'+
                '<button type="button" class="btn btn-warning del-element"><i class="fa fa-minus-square"></i> Hapus</button>'+
              '</span>'+
            '</div>'+
            '<div class="ln_solid"></div>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_prk_nama[]" id="inp_prk_nama'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_prk_nama">Nama '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="text" name="inp_prk_hubungan[]" id="inp_prk_hubungan'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_prk_hubungan">Hubungan '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_prk_jabatan[]" id="inp_prk_jabatan'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_prk_jabatan">Jabatan '+i+
              '</label>'+
            '</div>'+
          '</div>'+

        '</div>';

      $(row).insertBefore("#next_k_ref_kerabat");
      $('#jumlah_k_ref_kerabat').val(i+1);
      i++;      
      
    });

    $(document).on('click','.del-element',function (e) {        
      e.preventDefault()
      i--;
      //$(this).parents('.form-row').fadeOut(400);
      $(this).parents('.rec-element').remove();
      $('#jumlah_k_ref_pro').val(i-1);
    });

  });
  // end - add other column for table pgw_referensi_kerabat  
  // start - add other column for table pgw_kursus
  $(document).ready(function() {

    var i=2;
    $(".tambah_k_kursus").on('click', function(){
      row = '<div class="rec-element">'+

          '<div class="form-row">'+
            '<div class="input-data">'+
              '<div class="input-group">'+
              '<span class="input-group-btn">'+
                '<button type="button" class="btn btn-warning del-element"><i class="fa fa-minus-square"></i> Hapus</button>'+
              '</span>'+
            '</div>'+
            '<div class="ln_solid"></div>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_ps_nama[]" id="inp_ps_nama'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ps_nama">Nama Instansi '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="text" name="inp_ps_status[]" id="inp_ps_status'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ps_status">Lulus / Tidak Lulus '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="date" name="inp_ps_masuk[]" id="inp_ps_masuk'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ps_masuk">Tahun Masuk '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="date" name="inp_ps_keluar[]" id="inp_ps_keluar'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_ps_keluar">Tahun Keluar '+i+
              '</label>'+
            '</div>'+
          '</div>'+

        '</div>';

      $(row).insertBefore("#next_k_kursus");
      $('#jumlah_k_kursus').val(i+1);
      i++;      
      
    });

    $(document).on('click','.del-element',function (e) {        
      e.preventDefault()
      i--;
      //$(this).parents('.form-row').fadeOut(400);
      $(this).parents('.rec-element').remove();
      $('#jumlah_k_kursus').val(i-1);
    });

  });
  // end - add other column for table pgw_kursus
  // start - add other column for table pgw_bahasa
  $(document).ready(function() {

    var i=2;
    $(".tambah_k_bahasa").on('click', function(){
      row = '<div class="rec-element">'+

          '<div class="form-row">'+
            '<div class="input-data">'+
              '<div class="input-group">'+
              '<span class="input-group-btn">'+
                '<button type="button" class="btn btn-warning del-element"><i class="fa fa-minus-square"></i> Hapus</button>'+
              '</span>'+
            '</div>'+
            '<div class="ln_solid"></div>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
            '<div class="input-data">'+
              '<input type="text" name="inp_pb_nama[]" id="inp_pb_nama'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pb_nama">Bahasa '+i+
              '</label>'+
            '</div>'+
            '<div class="input-data">'+
              '<input type="text" name="inp_pb_keterangan[]" id="inp_pb_keterangan'+i+'" alt="'+i+'" required>'+
              '<div class="underline"></div>'+
              '<label for="inp_pb_keterangan">Aktif / Pasif '+i+
              '</label>'+
            '</div>'+
          '</div>'+
          '<div class="form-row">'+
              '<div class="input-data">'+
                '<select class="form-control select2" name="inp_pb_tulis[]"  id="inp_pb_tulis">'+
                  '<option value="">---</option>'+
                  '<?php echo $list_lv_bahasa; ?>'+
                '</select>'+
                '<div class="underline"></div>'+
                '<label for="inp_pb_tulis" id="select_opt">Tertulis <code>*</code></label>'+
              '</div>'+
              '<div class="input-data">'+
                '<select class="form-control select2" name="inp_pb_lisan[]"  id="inp_pb_lisan">'+
                  '<option value="">---</option>'+
                  '<?php echo $list_lv_bahasa; ?>'+
                '</select>'+
                '<div class="underline"></div>'+
                '<label for="inp_pb_lisan" id="select_opt">Lisan <code>*</code></label>'+
              '</div>'+
            '</div>'+

        '</div>';

      $(row).insertBefore("#next_k_bahasa");
      $('#jumlah_k_bahasa').val(i+1);
      i++;      
      
    });

    $(document).on('click','.del-element',function (e) {        
      e.preventDefault()
      i--;
      //$(this).parents('.form-row').fadeOut(400);
      $(this).parents('.rec-element').remove();
      $('#jumlah_k_bahasa').val(i-1);
    });

  });
  // end - add other column for table pgw_bahasa

  // start - datepicker
  $(function(){
    $("#inp_pc_tgl_lahir").datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        // language: 'id',
    });

    // $( "#tambah_bbm" ).click(function() {
    //   $qty_bbm	= parseInt($( "#jml_bbm" ).val());
    // });

  });
  // end - datepicker
  // start - select option
  $(function () {
		$('.select2').select2();
	});
  // end - select option


</script>


</body>
</html>