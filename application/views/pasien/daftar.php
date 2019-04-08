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
<a href="<?php echo site_url('pasien/tambah'); ?>">Tambah pasien</a>
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Pasien</th>
				<th>Jenis Kelamin</th>
				<th>Email Pasien</th>
				<th>Kontak Pasien</th>
				<th>Alamat Pasien/th>
				<th>Tanggal Lahir</th>
				<th>Golongan Darah</th>
				<th>Kata Sandi</th>
				<th>Kode Verivikasi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($p_semuapasien) > 0) { ?>
			<?php $no = 1; ?>
			<?php foreach ($p_semuapasien as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data->nama_pasien; ?></td>
				<td><?php echo $data->jenis_kelamin; ?></td>
				<td><?php echo $data->email_pasien; ?></td>
				<td><?php echo $data->kontak_pasien; ?></td>
				<td><?php echo $data->alamat_pasien; ?></td>
				<td><?php echo $data->tanggal_lahir; ?></td>
				<td><?php echo $data->golongan_darah; ?></td>
				<td><?php echo $data->kata_sandi; ?></td>
				<td><?php echo $data->kode_verivikasi; ?></td>
				<td>
					<a href="<?php echo site_url('pasien/edit/' . $data->id_pasien); ?>">Edit</a>
					<a href="<?php echo site_url('pasien/proses_hapus/' . $data->id_pasien); ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
			<?php } else { ?>
			<tr>
				<td colspan="4">Tidak ada pasien</td>
			</tr>
			<?php } ?>
			
		</tbody>
		
	</table>

</body>
</html>