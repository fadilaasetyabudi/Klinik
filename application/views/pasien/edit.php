<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit pasien</title>
</head>
<body>
	<form action="<?php echo site_url('pasien/proses_edit'); ?>" method="POST">
	<input type="hidden" name="i_id_pasien" value="<?php echo $p_pasien->id_pasien; ?>">
	<p>
		<label for="i nama pasien">Nama Pasien</label>
		<input type="text" name="i_nama_pasien" value="<?php echo $p_pasien->nama_pasien; ?>">
	</p>
	<p>
		<label for="i jenis kelamin">Jenis Kelamin</label>
		<!-- <input type="text" name="i_jenis_kelamin" value="<?php echo $p_pasien->jenis_kelamin; ?>"> -->
		<select name="i_jenis_kelamin">
			<option value="L" <?php echo ($p_pasien->jenis_kelamin == 'L' ? 'selected="selected"' : ''); ?>>Laki-laki</option>
			<option value="P" <?php echo ($p_pasien->jenis_kelamin == 'P' ? 'selected="selected"' : ''); ?>>Perempuan</option>
		</select>
	</p>
	<p>
		<label for="i kontak pasien">Kontak Pasien</label>
		<input type="text" name="i_kontak_pasien" value="<?php echo $p_pasien->kontak_pasien; ?>">
	</p>
	<p>
		<label for="i alamat pasien">Alamat Pasien</label>
		<textarea name="i_alamat_pasien" cols="30" rows="10"><?php echo $p_pasien->alamat_pasien; ?></textarea>
	</p>
	<p>
		<label for="i tanggal lahir">Tanggal Lahir</label>
		<input type="date" name="i_tanggal_lahir" value="<?php echo $p_pasien->tanggal_lahir; ?>">
	</p>
	<p>
		<label for="i golongan darah">Golongan Darah</label>
		<select name="i_jenis_kelamin">
			<option value="A" <?php echo ($p_pasien->jenis_kelamin == 'A' ? 'selected="selected"' : ''); ?>>A</option>
			<option value="B" <?php echo ($p_pasien->jenis_kelamin == 'B' ? 'selected="selected"' : ''); ?>>B</option>
			<option value="AB" <?php echo ($p_pasien->jenis_kelamin == 'AB' ? 'selected="selected"' : ''); ?>>AB</option>
			<option value="O" <?php echo ($p_pasien->jenis_kelamin == 'O' ? 'selected="selected"' : ''); ?>>O</option>
		</select>
	</p>

	<p>
		<label for="i kata sandi">Kata Sandi</label>
		<input type="text" name="i_password_pasien" value="<?php echo $p_pasien->password_pasien; ?>">
	</p>
	<p>
		<label for="i kode verivikasi">Kode Verivikasi</label>
		<input type="text" name="i_kode_verivikasi" value="<?php echo $p_pasien->kode_verivikasi; ?>">
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
	</form>
</body>
</html>