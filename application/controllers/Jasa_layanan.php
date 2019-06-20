<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Layanan extends CI_Controller {

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
			'p_semuajasa_layanan' => $this->db->get_where('tb_jasa_layanan')->result()
			);
		$this->load->view('jasa/v_daftar', 
			$parser);
	}

	public function piket()
	{
		$this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_piket.id_dokter');
		$this->db->order_by('tb_piket.id_dokter', 'asc');
		$this->db->order_by('FIELD(hari,"senin","selasa","rabo","kamis","jumat")');
		$this->db->order_by('jam_mulai', 'asc');
		$parser['p_semuapiket'] = $this->db->get('tb_piket')->result();

		$this->load->view('layanan/piket_dokter', $parser);


	}

	public function tambah()
	{
		$this->load->view('jasa/v_tambah');
	}
	public function proses_tambah()
	{
		$v_nama_layanan = $this->input->post('i_nama_layanan');
		
		$data_tambah = array(
			'nama_layanan' => $v_nama_layanan);
		
			
		$tambah_data = $this->db->insert('tb_layanan', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah layanan berhasil.');
			redirect('layanan');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tmbah layanan gagal.');
			redirect ('layanan');
		}
	}
	public function edit($id_layanan)
	{
		
		$parser = array(
			'p_layanan' => $this->db->get_where('tb_layanan', array('id_layanan'=>$id_layanan))->row()
			);
		$this->load->view('layanan/v_edit', $parser);
	}
	public function proses_edit()
	{
		$v_nama_layanan = $this->input->post('i_nama_layanan');
		
		$data_tambah = array(
			'nama_layanan' => $v_nama_layanan);
		

		$data_where= array(
			'id_layanan' => $v_id_layanan
			);

		$tambah_data = $this->db->update('tb_layanan', $data_tambah, $data_where);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit layanan berhasil.');
			redirect('layanan');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit layanan gagal.');
			redirect ('layanan');
		}
	}

	public function proses_hapus($id_layanan)
	{
			$data_where= array(
			'id_layanan' => $id_layanan
			);

		$hapus_data = $this->db->delete('tb_layanan', $data_where, $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus layanan berhasil.');
			redirect('layanan');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus layanan gagal.');
			redirect ('layanan');
		}
	}

	
}
?>