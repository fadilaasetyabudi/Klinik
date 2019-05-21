<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('piket/proses_tambah'); ?>" method="POST">
	<p>
		<label for="i id piket">id Piket</label>
		<input type="text" name="i_id_piket"></input>
	</p>
	<p>
		<label for="i nama dokter">Nama Dokter</label>
		<input type="text" name="i_id_piket"></input>
	</p>
		<p>
		<label for="i hari">hari</label>
		<!-- <input type="text" name="i_jenis_kelamin"></input> -->
		<select name="i_hari">
			<option value="senin" <?php echo ($p_piket->hari == 'senin' ? 'selected="selected"' : ''); ?>>Senin</option>
			<option value="selasa" <?php echo ($p_piket->hari == 'selasa' ? 'selected="selected"' : ''); ?>>Selasa</option>
			<option value="rabo" <?php echo ($p_piket->hari == 'rabo' ? 'selected="selected"' : ''); ?>>Rabo</option>
			<option value="kamis" <?php echo ($p_piket->hari == 'kamis' ? 'selected="selected"' : ''); ?>>Kamis</option>
			<option value="jumat" <?php echo ($p_piket->hari == 'jumat' ? 'selected="selected"' : ''); ?>>Jumat</option>
		</select>
	</p>
	<p>
		<label for="i jam mulai">Jam Mulai</label>
		<input type="text" name="i_jam_mulai"></input>
	</p>
	<p>
		<label for="i jam selesai">Jam Selesai</label>
		<input type="text" name="i_jam_selesai"></input>
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>