<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('obat/proses_edit'); ?>" method="POST">
	<input type="hidden" name="i_id_obat" value="<?php echo $p_obat->id_obat; ?>">
	<p>
		<label for="i nama obat">Nama obat</label>
		<input type="text" name="i_nama_obat" value="<?php echo $p_obat->nama_obat; ?>">
	</p>
	<p>
		<label for="i bentuk">Bentuk</label>
		<input type="text" name="i_bentuk" value="<?php echo $p_obat->bentuk; ?>">
	</p>
	<p>
		<label for="i ukuran">Ukuran</label>
		<input type="text" name="i_ukuran" value="<?php echo $p_obat->ukuran; ?>">
	</p>
	<p>
		<label for="i satuan">Satuan</label>
		<input type="text" name="i_satuan" value="<?php echo $p_obat->satuan; ?>">
	</p>
	<p>
		<label for="i harga obat">Harga Obat</label>
		<input type="text" name="i_harga_obat" value="<?php echo $p_obat->harga_obat; ?>">
	</p>
	<p>
		<label for="i keterangan obat">Keterangan Obat</label>
		<input type="text" name="i_keterangan_obat" value="<?php echo $p_obat->keterangan_obat; ?>">
	</p>
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>