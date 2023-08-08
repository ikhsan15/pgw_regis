<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul ?></title>
</head>
<body>
  
  <div class="container">
    <div class="row mt-4">
      <div class="col">
        <form role="form" method="post" accept-charset="utf-8" action="<?php echo base_url().$class.'/'.$method;?>/crud/?rNum=<?php echo $rNum?>">
          <!-- <input type="hidden" name="pc_id" value="<php echo $pc_id; ?>"> -->
          <label for="">Nama Pegawai</label>
          <input type="text" name="nama_peg" class="form-control"><br>
          <label for="">nama keluarga</label>
          <input type="text" name="pf_nama" class="form-control"><br>
          <label for="">nama pendidikan </label>
          <input type="text" name="ppend_nama" class="form-control"><br><br>

          <button type="submit" id="submit_simpan" name="submit_crud" value="simpan" >Simpan</button>
          <button type="submit" id="submit_reset" name="submit_crud" value="reset" >Reset</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="table" border="1" cellpadding="2" cellspacing="2">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama pegawai</th>
              <th>nama keluarga</th>
              <th>nama pendidikan</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach ($rec_peg->result() as $r){
            ?>
            <tr>
              <!-- memanggil data sesuai nama field di view -->
              <td><?php echo $no ?></td>
              <td><?php echo $r->nama_calon; ?></td>
              <td><?php echo $r->nama_keluarga; ?></td>
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
  </div>

</body>
</html>