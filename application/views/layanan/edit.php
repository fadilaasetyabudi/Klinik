<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit layanan</title>
</head>
<body>
	<form action="<?php echo site_url('layanan/proses_edit'); ?>" method="POST">
	<input type="hidden" name="i_id_layanan" value="<?php echo $p_layanan->id_layanan; ?>">
	<p>
		<label for="i nama layanan">Nama Layana</label>
		<select name="i_nama_layanan">
			<option value="UMUM" <?php echo ($p_layanan->nama_layanan == 'UMUM' ? 'selected="selected"' : ''); ?>>UMUM</option>
			<option value="KECANTIKAN" <?php echo ($p_layanan->nama_layanan == 'KECANTIKAN' ? 'selected="selected"' : ''); ?>>KECANTIKAN</option>
		</select>
	</p>
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>