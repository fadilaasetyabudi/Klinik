<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Resep extends CI_Controller {

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
			'p_semuaresep' => $this->db->get_where('tb_resep')->result()
			);
		$this->load->view('resep/v_daftar', 
			$parser);
	}

	public function tambah()
	{
		$this->load->view('resep/v_tambah');
	}

	public function proses_tambah()
	{
		$v_id_hasil = $this->input->post('i_id_hasil');
		$v_id_obat = $this->input->post('i_id_obat');
		$v_jumlah_obat = $this->input->post('i_jumlah_obat');
		$v_total_harga = $this->input->post('i_total_harga');
		$data_tambah = array(
			'id_hasil' => $v_id_hasil,
			'id_obat' => $v_id_obat,
			'jumlah_obat' =>  $v_jumlah_obat,
			'total_harga' => $v_total_harga);
		$tambah_data = $this->db->insert('tb_resep', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah resep berhasil.');
			redirect('resep');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tambah resep gagal.');
			redirect ('resep');
		}
	}
	public function edit($id_resep)
	{
		$parser = array(
			'p_resep' => $this->db->get_where('tb_resep', array('id_resep'=>$id_resep))->row()
			);
		$this->load->view('resep/v_edit', $parser);
	}
	public function proses_edit($id_resep)
	{
		$v_id_obat = $this->input->post('i_id_obat');
		$v_jumlah_obat = $this->input->post('i_jumlah_obat');
		$v_total_harga = $this->input->post('i_total_harga');

		$data_tambah = array(
			'id_obat' => $v_id_obat,
			'jumlah_obat' => $v_jumlah_obat,
			'total_harga' => $v_total_harga);

		$data_where= array(
			'id_resep' => $v_id_resep
			);
		$this->db->where('id_resep', $id_resep);
		$tambah_data = $this->db->update('tb_resep', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit resep berhasil.');
			redirect('resep');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit resep gagal.');
			redirect ('resep');
		}
	}

	public function proses_hapus($id_resep)
	{
			$data_where= array(
			'id_resep' => $id_resep
			);

		$hapus_data = $this->db->delete('tb_resep', $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus resep berhasil.');
			redirect('resep');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus resep gagal.');
			redirect ('resep');
		}
	}
}
?>