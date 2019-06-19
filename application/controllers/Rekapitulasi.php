<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekapitulasi extends CI_Controller{
	public function index() 
	{
		$this->db->join('tb_hasil', 'tb_hasil.id_hasil = tb_resep.id_hasil');
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal = tb_hasil.id_jadwal');
		$this->db->join('tb_jasa_layanan', 'tb_jasa_layanan.id_layanan = tb_hasil.id_jasa');
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_jadwal.id_pasien');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan = tb_jadwal.id_layanan');
		$data['p_semuarekap'] = $this->db->get('tb_resep')->result();
		$this->load->view('rekapitulasi/rekapitulasi', $data);

	}

	public function print_waktu()
	{
		$this->db->select('YEAR(tb_jadwal.tanggal_daftar) AS tahun');
		$this->db->join('tb_hasil', 'tb_hasil.id_hasil = tb_resep.id_hasil');
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal = tb_hasil.id_jadwal');
		$this->db->join('tb_jasa_layanan', 'tb_jasa_layanan.id_layanan = tb_hasil.id_jasa');
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_jadwal.id_pasien');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan = tb_jadwal.id_layanan');
		$this->db->group_by('YEAR(tb_jadwal.tanggal_daftar)');
		$data['p_tahun'] = $this->db->get('tb_resep')->result();

		$data['p_layanan'] = $this->db->get('tb_layanan')->result();

		$this->load->view('rekapitulasi/v_laporan_rekapitulasi', $data);
	}

	public function print_download()
	{
		$tanggal = $this->input->post('i_tanggal');
		$sampai = $this->input->post('i_sampai');
		$pilihan = $this->input->post('i_layanan');

		
		$namaBulan = array('01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');

		$this->db->join('tb_hasil', 'tb_hasil.id_hasil = tb_resep.id_hasil');
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal = tb_hasil.id_jadwal');
		$this->db->join('tb_jasa_layanan', 'tb_jasa_layanan.id_layanan = tb_hasil.id_jasa');
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_jadwal.id_pasien');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan = tb_jadwal.id_layanan');
		$this->db->where('tanggal_daftar >=', $tanggal);
		$this->db->where('tanggal_daftar <=', $sampai);
		if ($pilihan != "semua") {
			$this->db->where('tb_jadwal.id_layanan', $pilihan);
		}
		
		$data['p_rekap'] = $this->db->get('tb_resep')->result();
		$dateTanggal = new datetime($tanggal);
		$dateSampai = new datetime($sampai);
		$data['p_tanggal'] = $dateTanggal->format('d');
		$data['p_sampai'] = $dateSampai->format('d');
		$data['p_bulan'] = $namaBulan[$dateTanggal->format('m')];
		$data['p_bulansampai'] = $namaBulan[$dateSampai->format('m')];
		$data['p_tahun'] = $dateTanggal->format('Y');
		$data['p_tahunsampai'] = $dateSampai->format('Y');

		$this->load->library('pdf');

		$this->pdf->load_view('rekapitulasi/v_laporan_rekapitulasi_print', $data);

	}
}