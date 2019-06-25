<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('jasa_layanan/proses_edit'); ?>" method="POST">
	<input type="hidden" name="i_id_layanan" value="<?php echo $p_jasa_layanan->id_layanan; ?>">
	<p>
		<label for="i nama jasa">Nama Jasa Layanan</label>
		<input type="text" name="i_nama_jasa" value="<?php echo $p_jasa_layanan->nama_jasa; ?>">
	</p>
<!-- 	<p>
		<label for="i kategori">Kategori</label>
		<input type="text" name="i_kategori" value="<?php echo $p_jasa_layanan->kategori; ?>">
	</p> -->
	<p>
		<label for="i harga ">Harga </label>
		<input type="text" name="i_harga" value="<?php echo $p_jasa_layanan->harga; ?>">
	</p>
	
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>