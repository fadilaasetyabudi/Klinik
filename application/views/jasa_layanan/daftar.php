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
<a href="<?php echo site_url('jasa_layanan/tambah'); ?>">Tambah Jasa layanan</a>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Jasa Layanan</th>
				<th>Harga</th>
				
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($p_semuajasa_layanan) > 0) { ?>
			<?php $no = 1; ?>
			<?php foreach ($p_semuajasa_layanan as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data->nama_layanan; ?></td>
				<td><?php echo $data->harga; ?></td>
				
				
				<td>
					<a href="<?php echo site_url('jasa_layanan/edit/' . $data->id_layanan); ?>">Edit</a>
					<a href="<?php echo site_url('jasa_layanan/proses_hapus/' . $data->id_layanan); ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
			<?php } else { ?>
			<tr>
				<td colspan="4">Tidak ada Jasa layanan</td>
			</tr>
			<?php } ?>
			
		</tbody>
		
	</table>

</body>
</html>