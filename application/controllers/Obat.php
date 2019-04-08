<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Obat extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();

		if ($this->session->userdata('is_login')) {

			//sudah login
			echo "Sudah Login";
			
		} else {
			//belum login

			redirect('login');
		}
	}
	
	public function index()
	{
		$parser = array(
			'p_semuaobat' => $this->db->get_where('tb_obat')->result()
			);
		$this->load->view('obat/v_daftar', 
			$parser);
	}
	public function tambah()
	{
		$this->load->view('obat/v_tambah');
	}
	public function proses_tambah()
	{
		$v_nama_obat = $this->input->post('i_nama_obat');
		$v_harga_obat = $this->input->post('i_harga_obat');
		
		

		$data_tambah = array(
			'nama_obat' => $v_nama_obat,
			'harga_obat' => $v_harga_obat);
			
		$tambah_data = $this->db->insert('tb_obat', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah obat berhasil.');
			redirect('obat');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tmbah obat gagal.');
			redirect ('obat');
		}
	}
	public function edit($id_obat)
	{
		$parser = array(
			'p_obat' => $this->db->get_where('tb_obat', array('id_obat'=>$id_obat))->row()
			);
		$this->load->view('obat/edit', $parser);
	}
	public function proses_edit()
	{
		$v_nama_obat = $this->input->post('i_nama_obat');
		$v_harga_obat = $this->input->post('i_harga_obat');
		
		$data_tambah = array(
			'nama_obat' => $v_nama_obat,
			'i_harga_obat' => $v_harga_obat);
			

		$data_where= array(
			'id_obat' => $v_id_obat
			);

		$tambah_data = $this->db->update('tb_obat', $data_tambah, $data_where);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit obat berhasil.');
			redirect('obat');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit obat gagal.');
			redirect ('obat');
		}
	}

	public function proses_hapus($id_obat)
	{
			$data_where= array(
			'id_obat' => $id_obat
			);

		$hapus_data = $this->db->delete('tb_obat', $data_where, $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus obat berhasil.');
			redirect('obat');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus obat gagal.');
			redirect ('obat');
		}
	}
}
?>