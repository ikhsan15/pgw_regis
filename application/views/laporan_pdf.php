<h2><center>Data Siswa</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
	</tr>
	<?php 
	$no = 1;
	foreach($siswa as $row)
	{
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->pc_foto; ?></td>
			<td width="25%" align="center"rowspan="6"><img src="http://localhost/pgw_regis/foto_pgw/Pertemuan_3-1_pak_nasrul.png" width="110" height="120">GAMBAR 1</td>
			<td width="25%" align="center"rowspan="6"><img src="'<?php echo base_url('/foto_pgw/'.$row->pc_foto); ?>'" width="110" height="120">GAMBAR 1</td>
			<td width="25%" align="center"rowspan="6"><img src="'<?php echo base_url().'/foto_pgw/Pertemuan_3-1_pak_nasrul.png'; ?>'" width="110" height="120">GAMBAR 2</td>
		</tr>
		<?php
	}
	?>
</table>