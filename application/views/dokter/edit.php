<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('dokter/proses_edit'); ?>" method="POST">
	<input type="hidden" name="i_id_dokter" value="<?php echo $p_dokter->id_dokter; ?>">
	<p>
		<label for="i nama dokter">Nama Dokter</label>
		<input type="text" name="i_nama_dokter" value="<?php echo $p_dokter->nama_dokter; ?>">
	</p>
	<p>
		<label for="i email dokter">Email Dokter</label>
		<input type="text" name="i_email_dokter" value="<?php echo $p_dokter->email_dokter; ?>">
	</p>
	<p>
		<label for="i password dokter">Password Dokter</label>
		<input type="text" name="i_password_dokter" value="<?php echo $p_dokter->password_dokter; ?>">
	</p>
	<p>
		<label for="i current password">Current_Password</label>
		<input type="text" name="i_current_password" value="<?php echo $p_dokter->current_password; ?>">
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>