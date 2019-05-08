<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit piket</title>
</head>
<body>
	<form action="<?php echo site_url('piket/proses_edit'); ?>" method="POST">
	<input type="hidden" name="i_id_piket" value="<?php echo $p_piket->id_piket; ?>">
	<p>
		<label for="i id piket">id Pasien</label>
		<input type="text" name="i_id_pasien" value="<?php echo $p_piket->id_piket; ?>">
	</p>
	<p>
		<label for="i id dokter">id Dokter</label>
		<input type="text" name="i_id_dokter" value="<?php echo $p_dokter->id_dokter; ?>">
	</p>
	<p>
		<label for="i hari">Hari</label>
		<!-- <input type="text" name="i_jenis_kelamin" value="<?php echo $p_pasien->jenis_kelamin; ?>"> -->
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
		<input type="time" name="i_jam_mulai" value="<?php echo $p_piket->jam_mulai; ?>">
	</p>
	<p>
		<label for="i jam selesai">jam Selesai</label>
		<input type="time" name="i_jam_selsai" value="<?php echo $p_piket->jam_selesai; ?>">
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>