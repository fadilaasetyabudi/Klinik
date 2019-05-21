<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url('pasien/proses_tambah'); ?>" method="POST">
	<p>
		<label for="i nama pasien">Nama pasien</label>
		<input type="text" name="i_nama_pasien"></input>
	</p>
		<p>
		<label for="i jenis kelamin">Jenis Kelamin</label>
		<!-- <input type="text" name="i_jenis_kelamin"></input> -->
		<select name="i_jenis_kelamin">
			<option value="L" <?php echo ($p_pasien->jenis_kelamin == 'L' ? 'selected="selected"' : ''); ?>>Laki-laki</option>
			<option value="P" <?php echo ($p_pasien->jenis_kelamin == 'P' ? 'selected="selected"' : ''); ?>>Perempuan</option>
		</select>
	</p>
	<p>
		<label for="i kontak pasien">Kontak Pasien</label>
		<input type="text" name="i_kontak_pasien"></input>
	</p>
	<p>
		<label for="i alamat pasien">Alamat Pasien</label>
		<textarea name="i_alamat_pasien"  cols="30" rows="10"></textarea>
	</p>
	<p>
		<label for="i tanggal lahir">Tanggal Lahir</label>
		<input type="date" name="i_nama_pasien"></input>
	</p>
	<p>
		<label for="i golongan darah">Golongan Darah</label>
		<input type="text" name="i_golongan_darah"></input>
	</p>
	<p>
		<label for="i kata sandi">Kata Sandi</label>
		<input type="text" name="i_password_pasien"></input>
	</p>
	<p>
		<label for="i kode verivikasi">Kode Verivikasi</label>
		<input type="text" name="i_kode_verivikasi"></input>
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>