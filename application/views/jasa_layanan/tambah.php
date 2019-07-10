<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('jasa_layanan/proses_tambah'); ?>" method="POST">
	<p>
	
		<label for="i nama jasa">Nama Jasa Layanan</label>
		<input type="text" name="i_nama_jasa"></input>
	<p>
		<label for="i harga ">Harga </label>
		<input type="text" name="i_harga"></input>
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>