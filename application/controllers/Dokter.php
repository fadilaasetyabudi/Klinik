<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Dokter extends CI_Controller {

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
			'p_semuadokter' => $this->db->get_where('tb_dokter')->result()
			);
		$this->load->view('dokter/v_daftar', 
			$parser);
	}
	public function tambah()
	{
		$this->load->view('dokter/v_tambah');
	}
	public function proses_tambah()
	{
		$v_nama_dokter = $this->input->post('i_nama_dokter');
		$v_email_dokter = $this->input->post('i_email_dokter');
		$v_password_dokter = $this->input->post('i_password_dokter');
		$v_current_password = $this->input->post('i_password_dokter');
		$data_tambah = array(
			'nama_dokter' => $v_nama_dokter,
			'email_dokter' => $v_email_dokter,
			'password_dokter' =>  md5($v_password_dokter),
			'current_password' => $v_current_password);
		$tambah_data = $this->db->insert('tb_dokter', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah dokter berhasil.');
			redirect('dokter');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tmbah dokter gagal.');
			redirect ('dokter');
		}
	}
	public function edit($id_dokter)
	{
		$parser = array(
			'p_dokter' => $this->db->get_where('tb_dokter', array('id_dokter'=>$id_dokter))->row()
			);
		$this->load->view('dokter/v_edit', $parser);
	}
	public function proses_edit($id_dokter)
	{
		$v_id_dokter = $this->input->post('i_id_dokter');
		$v_nama_dokter = $this->input->post('i_nama_dokter');
		$v_email_dokter = $this->input->post('i_email_dokter');
		$v_password_dokter = $this->input->post('i_password_dokter');
		$v_current_password = $this->input->post('i_current_password');

		$data_tambah = array(
			'nama_dokter' => $v_nama_dokter,
			'email_dokter' => $v_email_dokter,
			'password_dokter' => md5($v_password_dokter));

		$data_where= array(
			'id_dokter' => $v_id_dokter
			);
		$this->db->where('id_dokter', $id_dokter);
		$tambah_data = $this->db->update('tb_dokter', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit dokter berhasil.');
			redirect('dokter');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit dokter gagal.');
			redirect ('dokter');
		}
	}

	public function proses_hapus($id_dokter)
	{
			$data_where= array(
			'id_dokter' => $id_dokter
			);

		$hapus_data = $this->db->delete('tb_dokter', $data_where, $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus dokter berhasil.');
			redirect('dokter');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus dokter gagal.');
			redirect ('dokter');
		}
	}
}
?>