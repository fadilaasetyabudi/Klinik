<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('hasil/proses_tambah'); ?>" method="POST">
	<p>
		<label for="i nama hasil">id Hasil</label>
		<input type="text" name="i_id_hasil"></input>
	</p>
	<p>
		<label for="i harga hasil">id Jadwal</label>
		<input type="text" name="i_id_jadwal"></input>
	</p>
	<p>
		<label for="i harga hasil">Keterangan hasil</label>
		<input type="text" name="i_keterangan_hasil"></input>
	</p>
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>