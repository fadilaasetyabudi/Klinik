<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><?php echo $this->session->flashdata('fd_pesan'); ?></p>
<a href="<?php echo site_url('jadwal/tambah'); ?>">Tambah jadwal</a>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>ID Pasien<th> 
				<th>ID Piket<th>
				<th>ID Layanan<th>
				<th>ID Jasa Layanan</th>
				<th>Tanggal Daftar</th>				

				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($p_semuajadwal) > 0) { ?>
			<?php $no = 1; ?>
			<?php foreach ($p_semuajadwal as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data->id_pasien; ?></td>
				<td><?php echo $data->id_piket; ?></td>
				<td><?php echo $data->id_layanan; ?></td>
				<td><?php echo $data->id_jasa; ?></td>
				<!--  -->
				<td><?php echo $data->tanggal_daftar; ?></td>
				
				<td>
					<a href="<?php echo site_url('jadwal/edit/' . $data->id_jadwal); ?>">Edit</a>
					<a href="<?php echo site_url('jadwal/proses_hapus/' . $data->id_jadwal); ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
			<?php } else { ?>
			<tr>
				<td colspan="4">Tidak ada jadwal</td>
			</tr>
			<?php } ?>
			
		</tbody>
		
	</table>

</body>
</html>