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
		<label for="i tanggal ditangani">Tanggal Daftar</label>
		<input type="local-time" name="i_tanggal_daftar" value="<?php echo $p_jadwal->tanggal_daftar; ?>">
	</p>
	
	

	
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>