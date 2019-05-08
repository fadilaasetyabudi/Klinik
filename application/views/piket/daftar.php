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
<a href="<?php echo site_url('piket/tambah'); ?>">Tambah piket</a>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>id Piket</th>
				<th>id Dokter</th>
				<th>Hari</th>
				<th>Jam Mulai</th>
				<th>Jam Selesai</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($p_semuapiket) > 0) { ?>
			<?php $no = 1; ?>
			<?php foreach ($p_semuapiket as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data->id_piket; ?></td>
				<td><?php echo $data->id_dokter; ?></td>
				<td><?php echo $data->hari; ?></td>
				<td><?php echo $data->jam_mulai; ?></td>
				<td><?php echo $data->jam_selesai; ?></td>
				<td>
					<a href="<?php echo site_url('piket/edit/' . $data->id_piket); ?>">Edit</a>
					<a href="<?php echo site_url('piket/proses_hapus/' . $data->id_piket); ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
			<?php } else { ?>
			<tr>
				<td colspan="4">Tidak ada piket</td>
			</tr>
			<?php } ?>
			
		</tbody>
		
	</table>

</body>
</html>