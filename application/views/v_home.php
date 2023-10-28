<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul ?></title>

  <!-- Style CSS -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-5.3.2/dist/css/bootstrap.css'); ?>">
  <!-- <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-5.3.2/dist/css/bootstrap.min.css'); ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/fontawesome-6.4.2/css/all.min.css'); ?>">

  <!-- Datepicker CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.min.css'); ?>">
  <!-- <link rel="stylesheet" href="<?php echo base_url('/assets/datepicker/datepicker.min.css'); ?>"> -->

  <!-- Jquery core -->
  <script src="<?php echo base_url('/assets/js/jquery-3.7.1.min.js'); ?>"></script>

  <!-- Datepicker JS -->
  <script src="<?php echo base_url('/assets/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.min.js'); ?>"></script>
  
  
  <!-- <script src="<?php echo base_url('/assets/datepicker/datepicker.js'); ?>"></script> -->
  <!-- <script src="<?php echo base_url('/assets/datepicker/datepicker.en.js'); ?>"></script> -->

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
          <div id="wizard">
            <!-- Section 1 - Data Umum -- START -->
            <h4></h4>
            <section>
              <h4>A. Data Umum</h4>
              <div class="form-row-hor">
                <div class="row">
                  <div class="col-md-9">
                    <label for="exampleInputFile">Cover</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="userfile" name="userfile" onchange="readURL(this);">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
                <label for="inp_pc_nama">Nama Lengkap</label>
                  <div class="form-holder">
                    <input type="text" class="form-control" id="inp_pc_nama" name="inp_pc_nama" >
                  </div>
              </div>
              <div class="form-row">
                <label for="inp_pc_no_ktp">No. KTP</label>
                  <div class="form-holder">
                    <input type="text" class="form-control" id="inp_pc_no_ktp" name="inp_pc_no_ktp" >
                  </div>
              </div>
              <div class="form-row">
                <label for="inp_pc_tmp_lahir">Tempat & Tanggal Lahir</label>
                  <div class="form-holder row">
                    <div class="col-7">
                      <input type="text" class="form-control" id="inp_pc_tmp_lahir" name="inp_pc_tmp_lahir" >
                    </div>
                    <!-- <div class="col-4">
                      <div class="input-group date" id="inp_pc_tgl_lahir" name="inp_pc_tgl_lahir">
                        <input type="text" class="form-control">      
                        <span class="input-group-append">
                          <span class="input-group-text bg-white">
                            <i class="fa fa-calendar"></i>
                          </span>
                        </span>
                      </div>
                    </div> -->
                  </div>
              </div>
              <!-- <div class="form-row">
                <div class="col-3"><input id="inp_pc_tgl_lahir" name="inp_pc_tgl_lahir" type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" ></div>
              </div> -->
              <div class="form-row">
                <label for="inp_pc_tgl_lahir">TESSS</label>
                <div class="form-holder">
                  <!-- <div class="input-group date" data-provide="datepicker" id="inp_pc_tgl_lahir" name="inp_pc_tgl_lahir">
                    <input type="text" class="form-control">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div> -->
                  <div class="input-group">
                    <input type="text" class="form-control" id="inp_pc_tgl_lahir" name="inp_pc_tgl_lahir" placeholder="*Tanggal Lahir" readonly="" />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <label for="inp_pc_alamat_ktp">Alamat rumah sesuai KTP</label>
                  <div class="form-holder">
                    <textarea class="form-control" rows="5" id="inp_pc_alamat_ktp" name="inp_pc_alamat_ktp" placeholder=" " minlength="2" ></textarea>
                  </div>
              </div>
              <div class="form-row">
                <label for="inp_pc_alamat_sekarang">Alamat rumah sekarang</label>
                  <div class="form-holder">
                    <textarea class="form-control" rows="5" id="inp_pc_alamat_sekarang" name="inp_pc_alamat_sekarang" placeholder=" " minlength="2" ></textarea>
                  </div>
              </div>
              <div class="form-row">
                <label for="inp_pc_telp">No. HP (Telp & WA)</label>
                  <div class="form-holder">
                    <input type="number" class="form-control" id="inp_pc_telp" name="inp_pc_telp" >
                  </div>
              </div>
              <div class="form-row">
                <label for="inp_pc_email">Email</label>
                  <div class="form-holder">
                    <input type="email" class="form-control" id="inp_pc_email" name="inp_pc_email" >
                  </div>
              </div>
              <div class="form-row">
                <label for="inp_pc_gender">Jenis Kelamin</label>
                <div class="form-holder"> 
                  <div class="checkbox-circle">
                    <div class="row">
                      <div class="col-2">
                        <label class="male">
                          <input type="radio" name="inp_pc_gender" value="1" checked> Pria<br>
                          <span class="checkmark"></span>
                        </label>
                      </div>
                      <div class="col-2">
                        <label class="female">
                          <input type="radio" name="inp_pc_gender" value="2"> Wanita<br>
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="inp_pa_id_agama">Agama</label>
                  <select class="form-control select2" name="inp_pa_id_agama"  id="inp_pa_id_agama">
                    <option value="">---</option>
                    <?php echo $list_agama; ?>
                  </select>
                </div>
              </div>
              <!-- <div class="row">
                <div class="form-group col-md-6">
                  <label>Agama</label>
                    <select class="form-control" name="inp_pa_id_agama" id="inp_pa_id_agama">
                    <php
                      foreach($list_agama as $k){
                        if(!empty($pc_id)){
                          echo "<option value='$k->pa_id'";
                          echo $record['pa_id_agama'] == $k->pa_id ? 'selected' : '';
                          echo ">$k->pa_nama</option>";
                        }else{
                          echo "<option value='$k->pa_id'";
                          echo ">$k->pa_nama</option>";
                        }                        
                      }
                    ?>
                    </select>
                </div>
              </div> -->
              <div class="form-row">
                <label for="inp_pc_kewarganegaraan">Kewarganegaraan</label>
                  <div class="form-holder">
                    <input type="text" class="form-control" id="inp_pc_kewarganegaraan" name="inp_pc_kewarganegaraan" >
                  </div>
              </div>
              <div class="form-row">
                <div class="form-holder row">
                  <div class="col-7">
                    <label for="inp_pc_anak_ke">Anak Ke</label>
                    <input type="number" class="form-control" id="inp_pc_anak_ke" name="inp_pc_anak_ke" >
                  </div>
                  <div class="col-4">
                    <label for="inp_pc_anak_ke_dari">Dari</label>
                    <input type="number" class="form-control" id="inp_pc_anak_ke_dari" name="inp_pc_anak_ke_dari" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="inp_psn_id_status_nikah">Status Perkawinan</label>
                  <select class="form-control select2" name="inp_psn_id_status_nikah"  id="inp_psn_id_status_nikah">
                    <option value="">---</option>
                    <?= $list_status_nikah; ?>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <label for="inp_pc_jumlah_anak">Jumlah Anak</label>
                  <div class="form-holder">
                    <input type="number" class="form-control" id="inp_pc_jumlah_anak" name="inp_pc_jumlah_anak" >
                  </div>
              </div>
            </section>
            <!-- Section 1 - Data Umum -- END -->
            <!-- Section 2 - Data Keluarga-- START -->
            <h4></h4>
            <section>
              <h4>A. Data Keluarga</h4>
              <div class="form-row">
                <label for="inp_pf_nama">Nama</label>
                  <div class="form-holder">
                    <input type="text" class="form-control" id="inp_pf_nama" name="inp_pf_nama" >
                  </div>
              </div>
              <div class="form-row">
                <label for="inp_pf_hubungan">Hubungan</label>
                  <div class="form-holder">
                    <input type="text" class="form-control" id="inp_pf_hubungan" name="inp_pf_hubungan" >
                  </div>
              </div>
              <div class="form-row">
                <label for="inp_pf_tgl_lahir">Tanggal Lahir</label>
                  <div class="form-holder">
                    <div class="input-group date" id="inp_pf_tgl_lahir" name="inp_pf_tgl_lahir">
                      <input type="text" class="form-control">
                      <span class="input-group-append">
                        <span class="input-group-text bg-white">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </span>
                    </div>
                  </div>
              </div>
              <div class="form-row">
                <label for="inp_pf_pendidikan">Pendidikan</label>
                  <div class="form-holder">
                    <input type="text" class="form-control" id="inp_pf_pendidikan" name="inp_pf_pendidikan" >
                  </div>
              </div>
              <div class="form-row">
                <label for="inp_pf_kerja">Pekerjaan</label>
                  <div class="form-holder">
                    <input type="text" class="form-control" id="inp_pf_kerja" name="inp_pf_kerja" >
                  </div>
              </div>

              <div class="ln_solid"></div>
              <div id="nextkolom" name="nextkolom"></div>
              <button type="button" id="jumlahkolom" value="1" style="display:none"></button>

              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="button" class="btn btn-info tambah-form">Tambah Form</button>
                  <button type="submit" id="simpan_simpan" name="submit_crud" value="simpan" >Simpan</button>
                  <button type="submit" id="submit_reset" name="submit_crud" value="reset" >Reset</button>
                </div>
              </div>
            </section>
            <!-- Section 2 - Data Keluarga-- END -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- partial -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js'></script><script  src="<?php echo base_url('/assets/datepicker-in-bootstrap-5/dist/script.js'); ?>"></script> -->
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
    // var inp_pc_tgl_lahir = $('#inp_pc_tgl_lahir').datepicker().data('datepicker');
    // inp_pc_tgl_lahir.selectDate(new Date());

    var i=2;
    $(".tambah-form").on('click', function(){
      row ='<div class="rec-element">'+
            '<div class="form-group">'+
            '<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama keluarga '+i+
            '</label>'+
                '<div class="col-md-6 col-sm-6 col-xs-12">'+
                    '<input type="text" name="inp_pf_nama[]" id="inp_pf_nama'+i+'" alt="'+i+'"class="form-control col-md-7 col-xs-12">'+
                '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Status Keluarga '+i+
            '</label>'+
                '<div class="col-md-6 col-sm-6 col-xs-12">'+
                    '<input type="text" name="inp_pf_hubungan[]" id="inp_pf_hubungan'+i+'" alt="'+i+'"class="form-control col-md-7 col-xs-12">'+
                '</div>'+
            '</div>'+                      
            '<div class="input-group">'+
              '<span class="input-group-btn">'+
                '<button type="button" class="btn btn-warning del-element"><i class="fa fa-minus-square"></i> Hapus</button>'+
              '</span>'+
            '</div>'+                 
            '<div class="ln_solid"></div>'+
            
            '</div>';
      $(row).insertBefore("#nextkolom");
      $('#jumlahkolom').val(i+1);
      i++;        
    });

    $(document).on('click','.del-element',function (e) {        
      e.preventDefault()
      i--;
      //$(this).parents('.rec-element').fadeOut(400);
      $(this).parents('.rec-element').remove();
      $('#jumlahkolom').val(i-1);
    });
  });
  // end - add other column for table pgw_keluarga
  // start - image preview
  // function readURL(input) {
  //   if (input.files && input.files[0]) {
  //     var reader = new FileReader();
  //     reader.onload = function (e) {
  //       $('#cover')
  //       .attr('src', e.target.result)
  //       .width(150)
  //       .height(200);
  //     };
  //     reader.readAsDataURL(input.files[0]);
  //     }
  //   }
  // end - image preview
  // start - datepicker
  $(function(){
    $("#inp_pc_tgl_lahir").datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        // language: 'id',
    });
  });
  // $(function(){
  //   $("#inp_pf_tgl_lahir").datepicker({
  //       format: 'dd/mm/yyyy',
  //       autoclose: true,
  //       todayHighlight: true,
  //       language: 'id',
  //   });
  // });
  // end - datepicker
  // start - select option
  $(function () {
		$('.select2').select2();

	});
  // end - select option
</script>


</body>
</html>