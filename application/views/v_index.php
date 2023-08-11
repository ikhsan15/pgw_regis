<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul ?></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

</head>
<body>
  
  <div class="container">
    <div class="row">
      <div class="col">
        <table class="table" border="1" cellpadding="2" cellspacing="2">
          <thead>
            <tr>
              <th>No</th>
              <th>id</th>
              <th>Nama Lengkap</th>
              <th>Nama Anggota Keluarga</th>
              <th>Status di Keluarga</th>
              <th>Nama Institusi Pendidikan</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach ($rec_v_peg->result() as $r){
            ?>
            <tr>
              <!-- memanggil data sesuai nama field di view -->
              <td><?php echo $no ?></td>
              <td><?php echo $r->pc_id ?></td>
              <td><?php echo $r->nama_calon; ?></td>
              <td><?php echo $r->nama_keluarga; ?></td>
              <td><?php echo $r->status_di_keluarga; ?></td>
              <td><?php echo $r->nama_pendidikan; ?></td>
              <td><?php echo anchor('home/hapus/'.$r->pc_id, 'Delete') ?></td>
            </tr>
            <?php
                $no++;
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="table" border="1" cellpadding="2" cellspacing="2">
          <thead>
            <tr>
              <th>id</th>
              <th>Nama Lengkap</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($rec_peg->result() as $r){
            ?>
            <tr>
              <!-- memanggil data sesuai nama field di view -->
              <td><?php echo $r->pc_id ?></td>
              <td><?php echo $r->pc_nama; ?></td>
              <td><?php echo anchor('home/hapus/'.$r->pc_id, 'Delete') ?></td>
            </tr>
            <?php
                $no++;
              }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col">
        <table class="table" border="1" cellpadding="2" cellspacing="2">
          <thead>
            <tr>
              <th>pf_id</th>
              <th>pc_id</th>
              <th>Nama Anggota Keluarga</th>
              <th>Status di Keluarga</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($rec_test->result() as $r){
            ?>
            <tr>
              <!-- memanggil data sesuai nama field di view -->
              <td><?php echo $r->pf_id ?></td>
              <td><?php echo $r->pc_id ?></td>
              <td><?php echo $r->pf_nama; ?></td>
              <td><?php echo $r->pf_hubungan ?></td>
              <td><?php echo anchor('home/hapus/'.$r->pt_id, 'Delete') ?></td>
            </tr>
            <?php
                $no++;
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <br><br><br>

    <div class="col-md-12">
      <div id="notif"></div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <form role="form" id="demo" data-parsley-validate="" class="form-horizontal form-label-left" method="post" accept-charset="utf-8" action="<?php echo base_url().$class.'/'.$method;?>/crud/?rNum=<?php echo $rNum?>">
        
            <div class="form-group rec-element">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama Calon Pegawai
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="nama_peg" id="nama_peg" alt="1" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama Keluarga
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="pf_nama[]" id="pf_nama1" alt="1" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Status di Keluarga
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="pf_hubungan[]" id="pf_hubungan1" alt="1" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama Pendidikan
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="ppend_nama" id="ppend_nama" alt="1" class="form-control col-md-7 col-xs-12">
              </div>
            </div>                   
            <div class="ln_solid"></div>
            <div id="nextkolom" name="nextkolom"></div>
            <button type="button" id="jumlahkolom" value="1" style="display:none"></button>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="button" class="btn btn-info tambah-form">Tambah Form</button>
                <button type="submit" id="submit_simpan" name="submit_crud" value="simpan" >Simpan</button>
                <button type="submit" id="submit_reset" name="submit_crud" value="reset" >Reset</button>
              </div>
            </div>
          </form>

      </div>
    </div>
  </div>
 
  <script>
    $(document).ready(function() {
      var i=2;
      $(".tambah-form").on('click', function(){        
          row ='<div class="rec-element">'+
                  '<div class="form-group">'+
                  '<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama '+i+
                  '</label>'+
                      '<div class="col-md-6 col-sm-6 col-xs-12">'+
                          '<input type="text" name="pf_nama[]" id="pf_nama'+i+'" alt="'+i+'"class="form-control col-md-7 col-xs-12">'+
                      '</div>'+
                  '</div>'+
                  '<div class="form-group">'+
                  '<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Status di Keluarga '+i+
                  '</label>'+
                      '<div class="col-md-6 col-sm-6 col-xs-12">'+
                          '<input type="text" name="pf_hubungan[]" id="pf_hubungan'+i+'" alt="'+i+'"class="form-control col-md-7 col-xs-12">'+
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
</script>

</body>
</html>