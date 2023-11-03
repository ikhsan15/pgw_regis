<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul ?></title>

  <!-- Style CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
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
          <div class="text">
            Contact us Form
          </div>
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
                <div class="input-data">
                  <input type="text" id="inp_pc_nama" name="inp_pc_nama" required>
                  <div class="underline"></div>
                  <label for="inp_pc_nama">Nama Lengkap</label>
                </div>
                <div class="input-data">
                  <input type="text" id="inp_pc_no_ktp" name="inp_pc_no_ktp" required>
                  <div class="underline"></div>
                  <label for="inp_pc_no_ktp">No. KTP</label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <input type="text" id="inp_pc_tmp_lahir" name="inp_pc_tmp_lahir" required>
                  <div class="underline"></div>
                  <label for="inp_pc_tmp_lahir">Tempat Lahir</label>
                </div>
                <div class="input-data">
                  <input type="text" id="inp_pc_tgl_lahir" name="inp_pc_tgl_lahir" onkeypress="return /[]/i.test(event.key)" onpaste="return false;" onCopy="return false" onCut="return false" required>
                  <div class="underline"></div>
                  <label for="inp_pc_tgl_lahir">Tanggal Lahir</label>
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
                  <label for="inp_pc_alamat_ktp">Alamat rumah sesuai KTP</label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data textarea">
                  <textarea rows="3" cols="80" id="inp_pc_alamat_sekarang" name="inp_pc_alamat_sekarang" required></textarea>
                  <div class="underline"></div>
                  <label for="inp_pc_alamat_sekarang">Alamat rumah sekarang</label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                <input type="number" id="inp_pc_telp" name="inp_pc_telp" onkeypress="return /[0-9]/i.test(event.key)" onpaste="return false;" onCopy="return false" onCut="return false" required>
                  <div class="underline"></div>
                  <label for="inp_pc_telp">No. WA</label>
                </div>
                <div class="input-data">
                <input type="email" id="inp_pc_email" name="inp_pc_email" required>
                  <div class="underline"></div>
                  <label for="inp_pc_email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" id="gender_label">
                  <label for="inp_pc_gender">Jenis Kelamin</label>
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
                        <option value="">---</option>
                        <?php echo $list_agama; ?>
                      </select>
                      <div class="underline"></div>
                      <label for="inp_pa_id_agama" id="select_opt">Agama</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <input type="text" id="inp_pc_kewarganegaraan" name="inp_pc_kewarganegaraan" required>
                  <div class="underline"></div>
                  <label for="inp_pc_kewarganegaraan">Kewarganegaraan</label>
                </div>
              </div>         
              <div class="form-row">
                <div class="input-data">
                  <input type="number" id="inp_pc_anak_ke" name="inp_pc_anak_ke" required>
                  <div class="underline"></div>
                  <label for="inp_pc_anak_ke">Anak Ke</label>
                </div>
                <div class="input-data">
                  <input type="number" id="inp_pc_anak_ke_dari" name="inp_pc_anak_ke_dari" required>
                  <div class="underline"></div>
                  <label for="inp_pc_anak_ke_dari">dari</label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <select class="form-control select2" name="inp_psn_id_status_nikah"  id="inp_psn_id_status_nikah">
                    <option value="">---</option>
                    <?= $list_status_nikah; ?>
                  </select>
                  <div class="underline"></div>
                  <label for="inp_psn_id_status_nikah" id="select_opt">Status Perkawinan</label>
                </div>
                <div class="input-data">
                  <input type="number" id="inp_pc_jumlah_anak" name="inp_pc_jumlah_anak" required>
                  <div class="underline"></div>
                  <label for="inp_pc_jumlah_anak">Jumlah Anak</label>
                </div>
              </div>
            </section>
            <!-- Section 1 - Data Umum -- END -->
            <!-- Section 2 - Data Keluarga-- START -->
            <h4></h4>
            <section>
              <h4>B. Data Keluarga</h4>
              <div class="container">
                <div class="form-row">
                  <div class="input-data">
                    <input type="text" id="inp_pf_nama" name="inp_pf_nama[]" required>
                    <div class="underline"></div>
                    <label for="inp_pf_nama">Nama</label>
                  </div>
                  <div class="input-data">
                    <input type="text" id="inp_pf_hubungan" name="inp_pf_hubungan[]" required>
                    <div class="underline"></div>
                    <label for="inp_pf_hubungan">Hubungan</label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="input-data">
                    <input type="date" id="inp_pf_tgl_lahir" name="inp_pf_tgl_lahir[]" onkeypress="return /[]/i.test(event.key)" onpaste="return false;" onCopy="return false" onCut="return false" required>
                    <div class="underline"></div>
                    <label for="inp_pf_tgl_lahir">Tanggal Lahir</label>
                  </div>
                  <div class="input-data">
                    <input type="text" id="inp_pf_pendidikan" name="inp_pf_pendidikan[]" required>
                    <div class="underline"></div>
                    <label for="inp_pf_pendidikan">Pendidikan</label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="input-data">
                    <input type="text" id="inp_pf_kerja" name="inp_pf_kerja[]" required>
                    <div class="underline"></div>
                    <label for="inp_pf_kerja">Pekerjaan</label>
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
                      <button type="submit" class="btn btn-info" id="simpan_simpan" name="submit_crud" value="simpan" >Simpan</button>
                      <button type="submit" class="btn btn-info" id="submit_reset" name="submit_crud" value="reset" >Reset</button>
                    </div>
                  </div>
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

    // $("#inp_pc_tgl_lahir, #inp_pf_tgl_lahir").datepicker({
    //     format: 'dd/mm/yyyy',
    //     autoclose: true,
    //     todayHighlight: true
    // });

    // $(document).ready(function(){
      $(".inp_pf_tgl_lahir[]").on("change", function(){
        $(".inp_pf_tgl_lahir[]").val($(this).val());
      });
    // });
    
  });
  // end - add other column for table pgw_keluarga

  // $("#date_input").on("change", function () {
  //   $(this).css("color", "rgba(0,0,0,0)").siblings(".datepicker_label").css({
  //     "text-align":"center", position: "absolute",left: "10px", top:"14px",width:$(this).width()
  //   }).text($(this).val().length == 0 ? "" : ($.datepicker.formatDate($(this).attr("dateformat"), new Date($(this).val()))));
  // });

  // start - datepicker
  $(function(){
    $("#inp_pc_tgl_lahir").datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        // language: 'id',
    });
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