<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('jadwal/proses_tambah'); ?>" method="POST">

	<p>
		<label for="i id pasien">ID Pasien</label>
		<select name="i_id_pasien">
			<?php foreach ($p_semuapasien as $key) { ?>
				<option value="<?php echo $key->id_pasien; ?>"><?php echo $key->nama_pasien; ?></option>
			<?php } ?>
		</select>
	</p>
	
	
	<p>
		<label for="i tanggal daftar">Tanggal Daftar</label>
		<input type="local-time" name="i_tanggal_daftar"></input>
	</p>
	<p>
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>