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
		$parser = array(
			'p_semuapenjualan' => $this->db->get_where('tb_penjualan')->result()
			);
		$this->load->view('penjualan/v_daftar', 
			$parser);
	}
	public function tambah()
	{
		$this->load->view('penjualan/v_tambah');
	}
	public function proses_tambah()
	{
		$v_id_penjualan = $this->input->post('i_id_penjualan');
		$v_tanggal_penjualan = $this->input->post('i_tanggal_penjualan');
		$v_jumlah_pembelian = $this->input->post('i_jumlah_pembelian');
		$v_total_harga = $this->input->post('i_total_harga');
		$v_id_obat = $this->input->post('i_id_obat');
		$v_id_pasien = $this->input->post('i_id_pasien');
		$v_id_resep = $this->input->post('i_id_resep');
		$data_tambah = array(
			'id_penjualan' => $v_id_penjualan,
			'id_tanggal_penjualan' => $v_id_tanggal_penjualan,
			'jumlah_pembelian' => $v_jumlah_pembelian,
			'total_harga' => $v_total_harga,
			'id_obat' => $v_id_obat,
			'id_pasien' => $v_id_pasien,
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

		$hapus_data = $this->db->delete('tb_penjualan', $data_where, $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus data penjualan berhasil.');
			redirect('penjualan');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus data penjualan gagal.');
			redirect ('penjualan');
		}
	}
}
?>