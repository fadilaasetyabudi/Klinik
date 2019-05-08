<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('resep/proses_edit'); ?>" method="POST">
	<input type="hidden" name="i_id_obat" value="<?php echo $p_obat->id_obat; ?>">
	<p>
		<label for="i id Resep">id Resep</label>
		<input type="text" name="i_id_resep" value="<?php echo $p_resep->id_resep; ?>">
	</p>
	<p>
		<label for="i id hasil">id Hasil</label>
		<input type="text" name="i_id_hasil" value="<?php echo $p_resep->id_hasil; ?>">
	</p>
	<p>
		<label for="i id obat">id Obat</label>
		<input type="text" name="i_id_obat" value="<?php echo $p_resep->id_obat; ?>">
	</p>
	<p>
		<label for="i jumlah obat">Jumlah Obat</label>
		<input type="text" name="i_jumlah_obat" value="<?php echo $p_resep->jumlah_obat; ?>">
	</p>
	<p>
		<label for="i total harga">total harga</label>
		<input type="text" name="i_itotal_harga" value="<?php echo $p_resep->total_harga; ?>">
	</p>
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>