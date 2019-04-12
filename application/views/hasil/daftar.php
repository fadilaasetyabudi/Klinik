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
				<th>Nama Obat</th>
				<th>Harga Obat</th>
				<th>keterangan Obat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($p_semuaobat) > 0) { ?>
			<?php $no = 1; ?>
			<?php foreach ($p_semuaobat as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data->nama_obat; ?></td>
				<td><?php echo $data->hargahhghg_obat; ?></td>
				
				<td>
					<a href="<?php echo site_url('obat/edit/' . $data->id_obat); ?>">Edit</a>
					<a href="<?php echo site_url('obat/proses_hapus/' . $data->id_obat); ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
			<?php } else { ?>
			<tr>
				<td colspan="4">Tidak ada obat</td>
			</tr>
			<?php } ?>
			
		</tbody>
		
	</table>

</body>
</html>