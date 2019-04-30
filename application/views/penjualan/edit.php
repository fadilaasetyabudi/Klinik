<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit penjualan</title>
</head>
<body>
	<form action="<?php echo site_url('penjualan/proses_edit'); ?>" method="POST">
	<input type="hidden" name="i_id_penjualan" value="<?php echo $p_penjualan->id_penjualan; ?>">
	<p>
		<label for="i nama penjualan">id penjualan</label>
		<input type="text" name="i_id_penjualan" value="<?php echo $p_penjualan->id_penjualan; ?>">
	</p>
	<p>
		<label for="i kontak pasien">Tanggal Penjualan</label>
		<input type="text" name="i_tanggal_penjualan" value="<?php echo $p_pasien->tanggal_penjualan; ?>">
	</p>
	<p>
		<label for="i tanggal lahir">Jumlah Pembelian</label>
		<input type="date" name="i_jumlah_pembelian" value="<?php echo $p_pasien->jumlah_pembelian; ?>">
	</p>
	<p>
		<label for="i kata sandi">Total harga</label>
		<input type="text" name="i_total_harga" value="<?php echo $p_pasien->total_harga; ?>">
	</p>
	<p>
		<label for="i kode verivikasi">id Obat</label>
		<input type="text" name="i_id_obat" value="<?php echo $p_pasien->id_obat; ?>">
	</p>
	<p>
		<label for="i kode verivikasi">id Pasien</label>
		<input type="text" name="i_id_pasien" value="<?php echo $p_pasien->id_pasien; ?>">
	</p>
	<p>
		<label for="i kode verivikasi">id Resep</label>
		<input type="text" name="i_id_resep" value="<?php echo $p_pasien->id_resep; ?>">
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>