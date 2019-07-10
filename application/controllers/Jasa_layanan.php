<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Jasa_layanan extends CI_Controller {

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
		
		$this->db->select('tb_jasa_layanan.id_layanan, tb_jasa_layanan.nama_jasa, tb_jasa_layanan.harga, tb_layanan.nama_layanan');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan=tb_jasa_layanan.kategori');
		$parser['p_semuajasa_layanan'] = $this->db->get('tb_jasa_layanan')->result();
		$this->load->view('jasa_layanan/v_daftar', 
			$parser);
	}

	

	public function tambah()
	{
		$parser['p_layanan'] = $this->db->get('tb_layanan')->result();
		$this->load->view('jasa_layanan/v_tambah', $parser);
	}
	public function proses_tambah()
	{
		$v_nama_jasa = $this->input->post('i_nama_jasa_layanan');
		$v_jenis_layanan = $this->input->post('i_layanan');
		$v_harga = $this->input->post('i_harga');
		
		$data_tambah = array(
			'nama_jasa' => $v_nama_jasa,
			'harga'		=> $v_harga,
			'kategori' => $v_jenis_layanan
		);
		
			
		$tambah_data = $this->db->insert('tb_jasa_layanan', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah jasa layanan berhasil.');
			redirect('jasa_layanan');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tmbah jasa layanan gagal.');
			redirect ('jasa_layanan');
		}
	}
	public function edit($id_layanan)
	{
		
		$parser['p_layanan'] = $this->db->get('tb_layanan')->result();
		$parser['p_jasa_layanan'] = $this->db->get_where('tb_jasa_layanan', array('id_layanan'=>$id_layanan))->row();
		$this->load->view('jasa_layanan/v_edit', $parser);
	}
	public function proses_edit($id_layanan)
	{

		$v_nama_jasa = $this->input->post('i_nama_jasa');
		$v_jenis_layanan = $this->input->post('i_layanan');
		$v_harga = $this->input->post('i_harga');

		
		$data_tambah = array(
			'nama_jasa' => $v_nama_jasa,
			'harga' => $v_harga,
			'kategori' => $v_jenis_layanan);
		

		$data_where= array(
			'id_layanan' => $id_layanan
			);

		$tambah_data = $this->db->update('tb_jasa_layanan', $data_tambah, $data_where);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit jasa layanan berhasil.');
			redirect('jasa_layanan');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit jasa layanan gagal.');
			redirect ('jasa_layanan');
		}
	}

	public function proses_hapus($id_layanan)
	{
			$data_where= array(
			'id_layanan' => $id_layanan
			);

		$hapus_data = $this->db->delete('tb_jasa_layanan', $data_where, $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus jasa layanan berhasil.');
			redirect('jasa_layanan');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus jasa layanan gagal.');
			redirect ('jasa_layanan');
		}
	}

	
}
?>