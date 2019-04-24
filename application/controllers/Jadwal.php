cv<?php
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
	// 		echo "Suda		
	// 	} else {
	// 		//belum l	o		gin

	// 		redirect('login');
	// 	}
	// }
	
	public function index()
	{


		$this->db->join('tb_pasien', 'tb_pasien.id_pasien=tb_jadwal.id_pasien');
		$this->db->join('tb_piket', 'tb_piket.id_piket=tb_jadwal.id_piket');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan=tb_jadwal.id_layanan');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter=tb_dokter.id_dokter');

		$data['p_semuajadwal'] = $this->db->get('tb_jadwal')->result(); 

		$this->load->view('jadwal/v_daftar', 
			$data);
	}
	public function tambah()
	{
		$data['p_semuapasien'] = $this->db->get('tb_pasien')->result();
		$this->db->join('tb_dokter', 'tb_dokter.id_dokter=tb_piket.id_dokter');
		$data['p_semuapiket'] = $this->db->get('tb_piket')->result();
		$data['p_semualayanan'] = $this->db->get('tb_layanan')->result();
		$this->load->view('jadwal/v_tambah', $data);
	}
	public function proses_tambah()
	{
		$v_id_pasien = $this->input->post('i_id_pasien');
		$v_id_piket = $this->input->post('i_id_piket');
		$v_id_layanan = $this->input->post('i_id_layanan');
		$v_status_jadwal = $this->input->post('i_status_jadwal');
		$v_tanggal_daftar = $this->input->post('i_tanggal_daftar');
		$v_tanggal_ditangani = $this->input->post('i_tanggal_ditangani');

		
		

		$data_tambah = array(
			'id_pasien' => $v_id_pasien,
			'id_piket' => $v_id_piket,
			'id_layanan' => $v_id_layanan,
			'status_jadwal' => $v_status_jadwal,
			'tanggal_daftar' => $v_tanggal_daftar,
			'tanggal_ditangani' => $v_tanggal_ditangani
			);
			
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