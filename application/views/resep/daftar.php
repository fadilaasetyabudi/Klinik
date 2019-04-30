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
<a href="<?php echo site_url('resep/tambah'); ?>">Tambah Resep</a>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
                     <th>id resep</th>
                     <th>id hasil</th>
                     <th>id obat</th>
                     <th>jumlah obat</th>
                     <th>total harga</th>
                     <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($p_semuaresep) > 0) { ?>
			<?php $no = 1; ?>
			<?php foreach ($p_semuaresep as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data->id_hasil; ?></td>
				<td><?php echo $data->id_obat; ?></td>
				<td><?php echo $data->jumlah_obat; ?></td>
				<td><?php echo $data->total_harga; ?></td>
				
				<td>
					<a href="<?php echo site_url('resep/edit/' . $data->id_hasil); ?>">Edit</a>
					<a href="<?php echo site_url('resep/proses_hapus/' . $data->id_hasil); ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
			<?php } else { ?>
			<tr>
				<td colspan="4">Tidak ada hasil</td>