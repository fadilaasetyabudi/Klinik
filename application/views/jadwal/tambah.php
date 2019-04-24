<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('jadwal/proses_tambah'); ?>" method="POST">

	<p>
		<label for="i id pasien">ID Pasien</label>
		<select name="i_id_pasien">
			<?php foreach ($p_semuapasien as $key) { ?>
				<option value="<?php echo $key->id_pasien; ?>"><?php echo $key->nama_pasien; ?></option>
			<?php } ?>
		</select>
	</p>
	
		<p>
		<label for="i status jadwal">Status Jadwal</label>
		<!-- <input type="text" name="i_jenis_kelamin"></input> -->

	
		<select name="i_status_jadwal">
			<option value="L" <?php echo ($p_jadwal->status_jadwal == 'B' ? 'selected="selected"' : ''); ?>>Belum Ditangani</option>
			<option value="P" <?php echo ($p_jadwal->status_jadwal == 'S' ? 'selected="selected"' : ''); ?>>Sudah Ditangani</option>
		</select>
	</p>
	
	<p>
		<label for="i tanggal daftar">Tanggal Daftar</label>
		<input type="local-time" name="i_tanggal_daftar"></input>
	</p>
	<p>
		<label for="i tanggal ditangani">Tanggal Ditangani</label>
		<input type="local-time" name="i_tanggal_ditangani"></input>
	</p>
	<p>
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>