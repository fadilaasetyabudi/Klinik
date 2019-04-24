<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('jadwal/proses_edit'); ?>" method="POST">
	<input type="hidden" name="i_id_jadwal" value="<?php echo $p_jadwal->id_jadwal; ?>">

	<p>
		<label for="i pasien">ID Pasien</label>
		<input type="local-tim" name="i_tanggal_daftar" value="<?php echo $p_jadwal->tanggal_daftar; ?>">
	</p>
	
	<p>
		<label for="i status jadwal">Status Jadwal/label>
		<!-- <input type="text" name="i_jenis_kelamin" value="<?php echo $p_jadwal->jenis_kelamin; ?>"> -->
		<select name="i_status_jadwal">
			<option value="L" <?php echo ($p_jadwal->status_jadwal == 'B' ? 'selected="selected"' : ''); ?>>Belum Ditangani</option>
			<option value="P" <?php echo ($p_jadwal->sudah_ditangani == 'S' ? 'selected="selected"' : ''); ?>>Sudah Ditangani</option>
		</select>
	</p>
	<p>
		<label for="i tanggal ditangani">Tanggal Daftar</label>
		<input type="local-time" name="i_tanggal_daftar" value="<?php echo $p_jadwal->tanggal_daftar; ?>">
	</p>
	
	<p>
		<label for="i tanggal ditangani">Tanggal Ditangani</label>
		<input type="local-time" name="i_tanggal_ditangani" value="<?php echo $p_jadwal->tanggal_ditangani; ?>">
	</p>
	

	
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>