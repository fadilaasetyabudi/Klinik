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
<a href="<?php echo site_url('dokter/tambah'); ?>">Tambah dokter</a>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Dokter</th>
				<th>Email Dokter</th>
				<th>Password Dokter</th>
				<th>Current  Password </th>

				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($p_semuadokter) > 0) { ?>
			<?php $no = 1; ?>
			<?php foreach ($p_semuadokter as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data->nama_dokter; ?></td>
				<td><?php echo $data->email_dokter; ?></td>
				<td><?php echo $data->password_dokter; ?></td>
				<td><?php echo $data->current_password; ?></td>
				<td>
					<a href="<?php echo site_url('dokter/edit/' . $data->id_dokter); ?>">Edit</a>
					<a href="<?php echo site_url('dokter/proses_hapus/' . $data->id_dokter); ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
			<?php } else { ?>
			<tr>
				<td colspan="4">Tidak ada dokter</td>
			</tr>
			<?php } ?>
			
		</tbody>
		
	</table>

</body>
</html>