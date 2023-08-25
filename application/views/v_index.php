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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>

</head>
<body>
  
  <div class="container">
    <div class="row">
      <div class="col">
        <table id="table_hd" class="table" border="1" cellpadding="2" cellspacing="2">
          <thead>
            <tr>
              <th data-field="pc_id" > pc_id </th>
              <th>Nama Lengkap</th>
              <th>pendidikan</th>
              <th>nama keluarga</th>
              <th>status keluarga</th>
              <th>update</th>
              <th>hapus calon</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($rec_v_peg->result() as $r){
            ?>
            <tr class="tr-class-<?php echo $active?> ">
              <!-- memanggil data sesuai nama field di view -->
              <td><?php echo $r->pc_id ?></td>
              <td><?php echo $r->nama_calon ?></td>
              <td><?php echo $r->nama_pendidikan ?></td>
              <td><?php echo $r->nama_keluarga ?></td>
              <td><?php echo $r->status_di_keluarga ?></td>
              <td><?php echo anchor('home/test/?rNum='.$r->pc_id, 'Update') ?></td>
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

    <?php if($rNum > 0){ ?>
      <div class="row">
        <div class="col">
          <table id="table_hd" class="table" border="1" cellpadding="2" cellspacing="2">
            <thead>
              <tr>
                <th data-field="pc_id" > pf_id </th>
                <th>pc id</th>
                <th>Nama keluarga</th>
                <th>update</th>
                <th>hapus keluarga</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($rec_kel->result() as $r){
              ?>
              <tr class="tr-class-<?php echo $active?> ">
                <!-- memanggil data sesuai nama field di view -->
                <td><?php echo $r->pf_id ?></td>
                <td><?php echo $r->pc_id ?></td>
                <td><?php echo $r->pf_nama ?></td>
                <td><?php echo anchor('home/test/?rNum='.$r->pc_id.'&rNum2='.$r->pf_id, 'Update') ?></td>
                
                <!-- <td>
                  <php 
                    echo anchor('home/test/crud/hapus', '<button type="submit" id="submit_hapus" name="submit_crud" value="hapus">Hapus</button>');
                  ?>
                </td> -->
                
                <td><?php echo anchor('home/hapus/'.$r->pf_id, 'Delete') ?></td>
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
          <table id="table_hd" class="table" border="1" cellpadding="2" cellspacing="2">
            <thead>
              <tr>
                <th data-field="pc_id" > ppend_id </th>
                <th>pc id</th>
                <th>Nama pendidikan</th>
                <th>update</th>
                <th>hapus keluarga</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($rec_pend->result() as $r){
              ?>
              <tr class="tr-class-<?php echo $active?> ">
                <!-- memanggil data sesuai nama field di view -->
                <td><?php echo $r->ppend_id ?></td>
                <td><?php echo $r->pc_id ?></td>
                <td><?php echo $r->ppend_nama ?></td>
                <td><?php echo anchor('home/test/?rNum='.$r->pc_id.'&rNum2='.$r->ppend_id, 'Update') ?></td>
                <td><?php echo anchor('home/hapus/'.$r->ppend_id, 'Delete') ?></td>
              </tr>
              <?php
                  $no++;
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    <?php } ?>

    <br><br><br>

    <!-- <php if($rNum2 > 0){ ?> -->
      <div class="row mt-4">
        <div class="col">
          <form role="form" data-parsley-validate="" class="form-horizontal form-label-left" method="post" accept-charset="utf-8" action="<?php echo base_url().$class;?>/test/crud/?rNum=<?php echo $rNum ?>&rNum2=<?php echo $rNum2 ?>">
          
            <div class="form-group rec-element">
              <!-- <php if($rNum2 < 0){ ?> -->
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">nama calon
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="inp_pc_nama" id="inp_pc_nama" alt="1" value="<?php echo $nama_calon ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group rec-element">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">pendidikan
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="ppend_nama" id="ppend_nama" alt="1" value="<?php echo $nama_pendidikan ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <!-- <php } ?> -->
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">nama keluarga
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="inp_pf_nama[]" id="inp_pf_nama" alt="1" value="<?php echo $nama_keluarga ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">status keluarga
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="inp_pf_hubungan[]" id="inp_pf_hubungan" alt="1" value="<?php echo $status_di_keluarga ?>" class="form-control col-md-7 col-xs-12">
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
    <!-- <php } ?> -->

  </div>
 
  <script type="text/javascript">

    $(document).ready(function() {

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
</script>

</body>
</html>