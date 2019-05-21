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
		<label for="i bentuk">Bentuk</label>
		<select name="i_bentuk">
			<option value="Botol" <?php echo ($p_obat->bentuk == 'Botol' ? 'selected="selected"' : ''); ?>></option>
			<option value="Stripe" <?php echo ($p_obat->bentuk == 'Stripe' ? 'selected="selected"' : ''); ?>></option>
			<option value="Tube" <?php echo ($p_obat->bentuk == 'Tube' ? 'selected="selected"' : ''); ?>></option>
		</select>
		<!-- <input type="text" name="i_bentuk"></input> -->
	</p>
	<p>
		<label for="i ukuran">Ukuran</label>
		<input type="text" name="i_ukuran"></input>
	</p>
	<p>
		<label for="i satuan">Satuan</label>
		<select name="i_satuan">
			<option value="ML" <?php echo ($p_satuan->satuan == 'ML' ? 'selected="selected"' : ''); ?>></option>
			<option value="Tablet" <?php echo ($p_satuan->satuan == 'Tablet' ? 'selected="selected"' : ''); ?>></option>
			<option value="Kapsul" <?php echo ($p_satuan->satuan == 'Kapsul' ? 'selected="selected"' : ''); ?>></option>
			<option value="Kaplet" <?php echo ($p_satuan->satuan == 'Kaplet' ? 'selected="selected"' : ''); ?>></option>
		</select>
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