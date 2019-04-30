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
<a href="<?php echo site_url('penjualan'); ?>">Tambah penjualan</a>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>id_Penjualan</th>
				<th>Tanggal penjualan</th>
				<th>Jumlah pembelian</th>
				<th>Total Harga</th>
				<th>id_Obat</th>
				<th>id_penjualan</th>
				<th>id_Resep</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($p_semuapenjualan) > 0) { ?>
			<?php $no = 1; ?>
			<?php foreach ($p_semuapenjualan as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data->id_penjualan; ?></td>
				<td><?php echo $data->tanggal_penjualan; ?></td>
				<td><?php echo $data->jumlah_pembelian; ?></td>
				<td><?php echo $data->total_harga; ?></td>
				<td><?php echo $data->id_obat; ?></td>
				<td><?php echo $data->id_pasien; ?></td>
				<td><?php echo $data->id_resep; ?></td>
				<td>
					<a href="<?php echo site_url('penjualan/edit/' . $data->id_penjualan); ?>">Edit</a>
					<a href="<?php echo site_url('penjualan/proses_hapus/' . $data->id_penjualan); ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
			<?php } else { ?>
			<tr>
				<td colspan="4">Tidak ada penjualan</td>
			</tr>
			<?php } ?>
			
		</tbody>
		
	</table>

</body>
</html>