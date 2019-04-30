<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('resep/proses_tambah'); ?>" method="POST">
	<p>
		<label for="i id resep">id Resep</label>
		<input type="text" name="i_id_resep"></input>
	</p>
	<p>
		<label for="i id hasil">id Hasil</label>
		<input type="text" name="i_id_hasil"></input>
	</p>
	<p>
		<label for="i id obat">id Obat</label>
		<input type="text" name="i_id_obat"></input>
	</p>
	<p>
		<label for="i jumlah obat">Jumlah Obat</label>
		<input type="text" name="i_jumlah_obat"></input>
	</p>
	<p>
		<label for="i total harga">total harga</label>
		<input type="text" name="i_total_harga"></input>
	</p>
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>