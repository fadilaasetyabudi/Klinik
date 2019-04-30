<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('hasil/proses_edit'); ?>" method="POST">
	<input type="hidden" name="i_id_hasil" value="<?php echo $p_hasil->id_hasil; ?>">
	<p>
		<label for="i nama hasil">ID Jadwal</label>
		<input type="text" name="i_id_jadwal" value="<?php echo $p_hasil->id_jadwal; ?>">
	</p>
	<p>
		<label for="i keterangan hasil">Keterangan Hasil</label>
		<input type="text" name="i_keterangan_hasil" value="<?php echo $p_hasil->keterangan_hasil; ?>">
	</p>
	
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>