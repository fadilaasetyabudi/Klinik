<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class jadwal extends CI_Controller {

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
			'p_semuajadwal' => $this->db->get_where('tb_jadwal')->result()
			);
		$this->load->view('jadwal/v_daftar', 
			$parser);
	}
	public function tambah()
	{
		$this->load->view('jadwal/v_tambah');
	}
	public function proses_tambah()
	{
		$v_status_jadwal = $this->input->post('i_status_jadwal');
		$v_tanggal_daftar = $this->input->post('i_tanggal_daftar');
		
		

		$data_tambah = array(
			'status_jadwal' => $v_status_jadwal,
			'tanggal_daftar' => $v_tanggal_daftar);
			
		$tambah_data = $this->db->insert('tb_jadwal', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah jadwal berhasil.');
			redirect('jadwal');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tmbah jadwal gagal.');
			redirect ('jadwal');
		}
	}
	public function edit($id_jadwal)
	{
		
		$parser = array(
			'p_jadwal' => $this->db->get_where('tb_jadwal', array('id_jadwal'=>$id_jadwal))->row()
			);
		$this->load->view('jadwal/edit', $parser);
	}
	public function proses_edit()
	{
		$v_status_jadwal = $this->input->post('i_status_jadwal');
		$v_tanggal_daftar = $this->input->post('i_tanggal_daftar');
		$v_tanggal_ditangani = $this->input->post('i_tanggal_ditangani');
		
		$data_tambah = array(
			'status_jadwal' => $v_status_jadwal,
			'i_tanggal_daftar' => $v_tanggal_daftar,
		'i_tanggal_ditangani' => $v_tanggal_ditangani);
			

		$data_where= array(
			'id_jadwal' => $v_id_jadwal
			);

		$tambah_data = $this->db->update('tb_jadwal', $data_tambah, $data_where);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit jadwal berhasil.');
			redirect('jadwal');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit jadwal gagal.');
			redirect ('jadwal');
		}
	}

	public function proses_hapus($id_jadwal)
	{
			$data_where= array(
			'id_jadwal' => $id_jadwal
			);

		$hapus_data = $this->db->delete('tb_jadwal', $data_where, $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus jadwal berhasil.');
			redirect('jadwal');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus jadwal gagal.');
			redirect ('jadwal');
		}
	}
}
?>