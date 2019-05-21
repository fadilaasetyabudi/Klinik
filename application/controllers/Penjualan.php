<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Penjualan extends CI_Controller {

	// public function __construct() 
	// {
	// 	parent::__construct();

	// 	if ($this->session->userdata('is_login')) {

	// 		//sudah login
	// 		echo "Sudah Login";
			
	// 	} else {
	// 		//belum login

	// 		redirect('login');
	// 	}
	// }
	
	public function index()
	{
		$this->db->join('tb_resep','tb_penjualan.id_resep = tb_resep.id_resep');
		$this->db->join('tb_hasil','tb_hasil.id_hasil = tb_resep.id_hasil');
		$this->db->join('tb_jadwal','tb_jadwal.id_jadwal = tb_hasil.id_jadwal');
		$this->db->join('tb_pasien','tb_jadwal.id_pasien = tb_pasien.id_pasien');
		$this->db->join('tb_piket','tb_jadwal.id_piket = tb_piket.id_piket');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter = tb_dokter.id_dokter');
		$this->db->join('tb_layanan', 'tb_jadwal.id_layanan = tb_layanan.id_layanan');
		$parser['p_semuapenjualan'] = $this->db->get('tb_penjualan')->result();
		$this->load->view('penjualan/v_daftar', 
			$parser);
	}
	public function tambah()
	{

		$parser['p_obat'] = $this->db->get('tb_obat')->result();
		$parser['p_pasien'] = $this->db->get('tb_pasien')->result();
		$this->db->join('tb_hasil','tb_hasil.id_hasil = tb_resep.id_hasil');
		$this->db->join('tb_jadwal','tb_jadwal.id_jadwal = tb_hasil.id_jadwal');
		$this->db->join('tb_pasien','tb_jadwal.id_pasien = tb_pasien.id_pasien');
		$this->db->join('tb_piket','tb_jadwal.id_piket = tb_piket.id_piket');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter = tb_dokter.id_dokter');
		$this->db->join('tb_layanan', 'tb_jadwal.id_layanan = tb_layanan.id_layanan');
		$parser['p_resep'] = $this->db->get('tb_resep')->result();
		$this->load->view('penjualan/v_tambah', $parser);
	}
	public function lihatObat($id)
	{
		$this->db->join('tb_obat', 'tb_obat.id_obat = tb_detail_resep.id_obat');
		$this->db->where('id_resep', $id);
		$parser['p_obat'] = $this->db->get('tb_detail_resep')->result(); 
		$this->load->view('penjualan/v_daftar_obat', 
			$parser);
	}
	public function proses_tambah()
	{
		$date = date('Y-m-d H:i:s');
		$v_id_penjualan = $this->input->post('i_id_penjualan');
		// $v_tanggal_penjualan = $this->input->post('i_tanggal_penjualan');
		$v_jumlah_pembelian = $this->input->post('i_jumlah_pembelian');
		$v_total_harga = $this->input->post('i_total_harga');
		$v_id_resep = $this->input->post('i_id_resep');
		$data_tambah = array(
			'tanggal_penjualan' => $date,
			'total_harga' => $v_total_harga,
			'id_resep' => $v_id_resep);
		$tambah_data = $this->db->insert('tb_penjualan', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah data penjualan berhasil.');
			redirect('penjualan');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tmbah data penjualan gagal.');
			redirect ('penjualan');
		}
	}
	public function edit($id_penjualan)
	{
		$parser = array(
			'p_penjualan' => $this->db->get_where('tb_penjualan', array('id_penjualan'=>$id_penjualan))->row()
			);
		$this->load->view('penjualan/v_edit', $parser);
	}
	public function proses_edit($id_penjualan)
	{
		$v_id_penjualan = $this->input->post('i_id_penjualan');
		$v_tanggal_penjualan = $this->input->post('i_tanggal_penjualan');
		$v_jumlah_pembelian = $this->input->post('i_jumlah_pembelian');
		$v_total_harga = $this->input->post('i_total_harga');
		$v_id_obat = $this->input->post('i_id_obat');
		$v_id_pasien = $this->input->post('i_id_pasien');
		$v_id_resep = $this->input->post('i_id_resep');
		$data_tambah = array(
			'jumlah_pembelian' => $v_jumlah_pembelian,
			'total_harga' => $v_total_harga,
			'id_obat' => $v_id_obat,
			'id_resep' => $v_id_resep);

		$data_where= array(
			'id_penjualan' => $v_id_penjualan
			);
		$this->db->where('id_penjualan', $id_penjualan);
		$tambah_data = $this->db->update('tb_penjualan', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit data penjualan berhasil.');
			redirect('penjualan');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit data penjualan gagal.');
			redirect ('penjualan');
		}
	}

	public function proses_hapus($id_penjualan)
	{
			$data_where= array(
			'id_penjualan' => $id_penjualan
			);

		$hapus_data = $this->db->delete('tb_penjualan', $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus data penjualan berhasil.');
			redirect('penjualan');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus data penjualan gagal.');
			redirect ('penjualan');
		}
	}


	public function getDataObat($id)
	{	
		$this->db->join('tb_obat', 'tb_obat.id_obat = tb_detail_resep.id_obat');
		$this->db->where('id_resep', $id);
		echo json_encode($this->db->get('tb_detail_resep')->result());
	}
}
?>