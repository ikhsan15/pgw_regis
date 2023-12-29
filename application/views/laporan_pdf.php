<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf;?></title>
    <style>
      #table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      #table td, #table th {
        border: 1px solid #ddd;
        padding: 8px;
      }
      #table tr:nth-child(even){background-color: #f2f2f2;}
      #table tr:hover {background-color: #ddd;}
      #table th {
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
      }
    </style>
  </head>
  <body>
    <div style="text-align:center">
      <h3> Laporan PDF Toko Kita</h3>
    </div>
    <table id="table">
      <thead>
          <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>No. KTP</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>

            <th>Alamat Rumah (KTP)</th>
            <th>Alamat Rumah (Sekarang)</th>
            <th>No. WA</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>

            <th>Agama</th>
            <th>Kewarganegaraan</th>
            <th>Anak Ke</th>
            <th>Dari</th>
            <th>Status Pekawinan</th>
            
            <th>Jumlah Anak</th>
          </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          foreach ($rec_pgwcalon->result() as $r){
        ?>
        <tr class="tr-class-<?php echo $active?> ">
          <!-- memanggil data sesuai nama field di view -->
          <td><?php echo $no ?></td>
          <td><?php echo $r->pc_nama ?></td>
          <td><?php echo $r->pc_no_ktp ?></td>
          <td><?php echo $r->pc_tmp_lahir ?></td>
          <td><?php echo $r->pc_tgl_lahir ?></td>

          <td><?php echo $r->pc_alamat_ktp ?></td>
          <td><?php echo $r->pc_alamat_sekarang ?></td>
          <td><?php echo $r->pc_telp ?></td>
          <td><?php echo $r->pc_email ?></td>
          <td><?php echo $r->pc_gender ?></td>

          <td><?php echo $r->pc_alamat_ktp ?></td>
          <td><?php echo $r->pc_kewarganegaraan ?></td>
          <td><?php echo $r->pc_anak_ke ?></td>
          <td><?php echo $r->pc_anak_ke_dari ?></td>
          <td><?php echo $r->pc_alamat_ktp ?></td>
          
          <td><?php echo $r->pc_jumlah_anak ?></td>
        </tr>
        <?php
            $no++;
          }
        ?>
      </tbody>
    </table>
  </body>
</html>