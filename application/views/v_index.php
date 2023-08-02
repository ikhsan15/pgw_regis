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
              foreach ($pegawai->result() as $r){
            ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $r->pc_nama; ?></td>
              <td><?php echo $r->pf_nama; ?></td>
              <td><?php echo $r->ppend_nama; ?></td>
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
    <div class="row mt-4">
      <div class="col">
        <?= form_open('home/tambah') ?>
          <label for="">Nama Pegawai</label>
          <input type="text" name="nama_calon"><br>
          <label for="">nama keluarga</label>
          <input type="text" name="nama_kel"><br>
          <label for="">nama pendidikan </label>
          <input type="text" name="nama_pend"><br><br>

          <button type="submit">insert data</button>
        <?= form_close() ?>
      </div>
    </div>
  </div>

</body>
</html>