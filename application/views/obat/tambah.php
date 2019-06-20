<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('obat/proses_tambah'); ?>" method="POST">
	<p>
		<label for="i nama obat">Nama obat</label>
		<input type="text" name="i_nama_obat"></input>
	</p>
	<p>
		<label for="i kategori">Kategori</label>
		<select name="i_kategori">
			<option value="Krim" <?php echo ($p_obat->kategori == 'Krim' ? 'selected="selected"' : ''); ?>></option>
			<option value="Obat" <?php echo ($p_obat->kategori == 'Obat' ? 'selected="selected"' : ''); ?>></option>
			
		<!-- <input type="text" name="i_kategori"></input> -->
	</p>
	
	<p>
		<label for="i harga obat">Harga obat</label>
		<input type="text" name="i_harga_obat"></input>
	</p>
	<p>
		<label for="i harga obat">Keterangan obat</label>
		<input type="text" name="i_keterangan_obat"></input>
	</p>
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>