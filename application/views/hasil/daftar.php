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
<a href="<?php echo site_url('hasil/tambah'); ?>">Tambah Hasil</a>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
                     <th>id hasil</th>
                     <th>id jadwal</th>
                     <th>Keterangan hasil</th>
                     <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($p_semuahasil) > 0) { ?>
			<?php $no = 1; ?>
			<?php foreach ($p_semuahasil as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data->id_jadwal; ?></td>
				<td><?php echo $data->keterangan_hasil; ?></td>
				
				<td>
					<a href="<?php echo site_url('hsil/edit/' . $data->id_hasil); ?>">Edit</a>
					<a href="<?php echo site_url('hasil/proses_hapus/' . $data->id_hasil); ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
			<?php } else { ?>
			<tr>
				<td colspan="4">Tidak ada hasil</td>