<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('layanan/proses_tambah'); ?>" method="POST">
	<p>
	
		<label for="i status jadwal">Nama Layanan</label>
		<!-- <input type="text" name="i_jenis_kelamin"></input> -->

	
		<select name="i_status_jadwal">
			<option value="UMUM" <?php echo ($p_layanan->nama_layanan == 'UMUM' ? 'selected="selected"' : ''); ?>>UMUM</option>
			<option value="KECANTIKAN" <?php echo ($p_layanan->nama_layanan == 'KECANTIKAN' ? 'selected="selected"' : ''); ?>KECANTIKAN</option>
		</select>
	</p>
	<
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>