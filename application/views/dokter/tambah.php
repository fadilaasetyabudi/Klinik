<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('dokter/proses_tambah'); ?>" method="POST">
	<p>
		<label for="i nama dokter">Nama dokter</label>
		<input type="text" name="i_nama_dokter"></input>
	</p>
	<p>
		<label for="i email dokter">Email Dokter</label>
		<input type="text" name="i_email_dokter"></input>
	</p>
	<p>
		<label for="i password dokter">Password Dokter</label>
		<input type="text" name="i_password_dokter" ></input>
	</p>
	<!-- <p>
		<label for="i current password ">Current Password </label>
		<input type="text" name="i_current_password" ></input>
	</p> -->
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>