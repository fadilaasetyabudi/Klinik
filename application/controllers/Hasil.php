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
			'p_semuahasil' => $this->db->get_where('tb_hasil')->result()
			);
		$this->load->view('hasil/v_hasil', 
			$parser);
	}
	public function tambah()
	{
		$this->load->view('hasil/v_hasil');
	}
	public function proses_tambah()
	{
		$v_id_hasil = $this->input->post('i_id_hasil');
		$v_id_jadwal = $this->input->post('i_id_jadwal');
		$v_keterangan_hasil = $this->input->post('i_keterangan_hasil');
		
		

		$data_tambah = array(
			'id_hasil' => $v_id_hasil,
			'id_jadwal' => $v_id_jadwal,
			'keterangan_hasil' => $v_keterangan_hasil);
			
		$tambah_data = $this->db->insert('tb_hasil', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah hasil berhasil.');
			redirect('hasil');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tambah hasil gagal.');
			redirect ('hasil');
		}
	}
	public function edit($id_jadwal)
	{
		
		$parser = array(
			'p_hasil' => $this->db->get_where('tb_hasil', array('id_hasil'=>$id_hasil))->row()
			);
		$this->load->view('hasil/edit', $parser);
	}
	public function proses_edit()
	{
		$v_id_hasil = $this->input->post('i_id_hasil');
		$v_id_jadwal = $this->input->post('i_id_jadwal');
		$v_keterangan_hasil = $this->input->post('i_keterangan_hasil');
		
		$data_tambah = array(
			'id_hasil' => $v_id_hasil,
			'id_jadwal' => $v_id_jadwal,
			'keterangan_hasil' => $v_keterangan_hasil);
			

		$data_where= array(
			'id_hasil' => $v_id_hasil
			);

		$tambah_data = $this->db->update('tb_hasil', $data_tambah, $data_where);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit hasil berhasil.');
			redirect('hasil');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit hasil gagal.');
			redirect ('hasil');
		}
	}

	public function proses_hapus($id_jadwal)
	{
			$data_where= array(
			'id_hasil' => $id_hasil
			);

		$hapus_data = $this->db->delete('tb_hasil', $data_where, $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus hasil berhasil.');
			redirect('hasil);
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus hasilgagal.');
			redirect ('hasil);
		}
	}
}
?>