<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Piket extends CI_Controller {

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
		$this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_piket.id_dokter');
		$parser['p_semuapiket'] = $this->db->get('tb_piket')->result();
		$this->load->view('piket/v_daftar', $parser);
	}
	public function tambah()
	{
		$parser['p_dokter'] = $this->db->get('tb_dokter')->result();
		$this->load->view('piket/v_tambah',$parser);
	}
	public function proses_tambah()
	{
		$v_id_dokter = $this->input->post('i_id_dokter');
		$v_hari = $this->input->post('i_hari');
		$v_jam_mulai = $this->input->post('i_jam_mulai');
		$v_jam_selesai = $this->input->post('i_jam_selesai');
		
		$data_tambah = array(
			'id_dokter' => $v_id_dokter,
			'hari' 		=> $v_hari,
			'jam_mulai' => $v_jam_mulai,
			'jam_selesai' => $v_jam_selesai);
		$tambah_data = $this->db->insert('tb_piket', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah piket berhasil.');
			redirect('piket');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tmbah piket gagal.');
			redirect ('piket');
		}
	}
	public function edit($id_piket)
	{
		$parser = array(
			'p_piket' => $this->db->get_where('tb_piket', array('id_piket'=>$id_piket))->row()
			);
		$this->load->view('piket/v_edit', $parser);
	}
	public function proses_edit($id_piket)
	{
		$v_id_piket = $this->input->post('i_id_piket');
		$v_id_dokter = $this->input->post('i_id_dokter');
		$v_hari = $this->input->post('i_hari');
		$v_jam_mulai = $this->input->post('i_jam_mulai');
		$v_jam_selesai = $this->input->post('i_jam_selesai');
		$data_tambah = array(
			'id_piket' 	=> $v_id_piket,
			'id_dokter' => $v_id_dokter,
			'hari' 		=> $v_hari,
			'jam_mulai' => $v_jam_mulai,
			'jam_selesai' => $v_jam_selesai);
		$data_where= array(
			'id_piket' => $v_id_piket
			);
		$this->db->where('id_piket', $id_piket);
		$tambah_data = $this->db->update('tb_piket', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit piket berhasil.');
			redirect('piket');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit piket gagal.');
			redirect ('piket');
		}
	}

	public function proses_hapus($id_piket)
	{
			$data_where= array(
			'id_piket' => $id_piket
			);

		$hapus_data = $this->db->delete('tb_piket', $data_where, $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus piket berhasil.');
			redirect('piket');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus piket gagal.');
			redirect ('piket');
		}
	}
}
?>