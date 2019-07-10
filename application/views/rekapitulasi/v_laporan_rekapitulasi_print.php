<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" width="1000px;" border="1px">
	<tr align="center">
		<td colspan="6"><b><h2>Laporan Data Rekapitulasi Klinik Dr.Lia 
      <br> 
      <?php echo $p_tanggal; ?> <?php echo $p_bulan; ?> Tahun <?php echo $p_tahun; ?> Hingga <?php echo $p_sampai; ?> <?php echo $p_bulansampai; ?> Tahun <?php echo $p_tahunsampai; ?></h2></b><b><h3>Kesehatan dan Kecantikan</h3></b></td>
	</tr>
	<tr align="center">
		
		<td width="60px;"><b>No</b></td>
		<td><b>Nama pasien</b></td>
		<td><b>Jenis Layanan</b></td>
		<td><b>Jasa</b></td>
		<td><b>Resep</b></td>
		<td><b>Total Harga</b></td>
		</b>
	</tr>
	 <?php if(count($p_rekap) > 0) { ?>
      <?php $no = 1; $totalPol = 0; ?>
      <?php foreach ($p_rekap as $data) { ?>
        <?php $hargaJasa = $data->harga; $totalObat = 0; ?>
        <?php $this->db->join('tb_obat', 'tb_obat.id_obat = tb_detail_resep.id_obat'); $this->db->where('id_resep', $data->id_resep); $detail_resep = $this->db->get('tb_detail_resep')->result(); ?>
       <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data->nama_pasien; ?></td>
        <td><?php echo $data->nama_layanan; ?></td>
        <td><?php echo $data->nama_jasa; ?></td>
        <td><?php foreach ($detail_resep as $key) { ?>
          <?php $totalObat += $key->total;  ?>
          <?php echo $key->nama_obat." : ".$key->jumlah; ?>
          <br>
        <?php } $totalHarga = $hargaJasa + $totalObat; ?></td>
        <td><?php echo get_rupiah($totalHarga); ?></td>
      </tr>
      <?php $totalPol += $totalHarga;} ?>
      <?php } else { ?>
      <tr>
        <td colspan="6">Tidak ada penjualan resep</td>
      </tr>
      <?php } ?>
	<tr align="center" style="height: 50px;">
		<td colspan="5"><b>Total</b></td>
		<td>Rp. <?php echo number_format($totalPol, 0, ',', '.'); ?></td>
	</tr>
</table>
</body>
</html>