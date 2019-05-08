<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('penjualan/proses_tambah'); ?>" method="POST">
	<p>
		<label for="i id penjualan">id Penjualan</label>
		<input type="text" name="i_id_penjualan"></input>
	</p>
	<p>
		<label for="i tanggal penjualan">Tanggal Penjualan</label>
		<input type="text" name="i_tanggal_penjualan"></input>
	</p>
	<p>
		<label for="i jumlah pembelian">Jumlah Pembelian</label>
		<input type="text" name="i_jumlah_pembelian"></input>
	</p>
	<p>
		<label for="i total harga">Total Harga</label>
		<input type="date" name="i_total_harga"></input>
	</p>
	<p>
		<label for="i id obat">id Obat</label>
		<input type="text" name="i_id_obat"></input>
	</p>
	<p>
		<label for="i id pasien">id Pasien</label>
		<input type="text" name="i_id_pasien"></input>
	</p>
	<p>
		<label for="i id resep">id resep</label>
		<input type="text" name="i_id_resep"></input>
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>