<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Hasil extends CI_Controller {

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
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal=tb_hasil.id_jadwal');
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien=tb_jadwal.id_pasien');
		$this->db->join('tb_piket', 'tb_piket.id_piket=tb_jadwal.id_piket');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan=tb_jadwal.id_layanan');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter=tb_dokter.id_dokter');
		$this->db->join('tb_jasa_layanan', 'tb_jasa_layanan.id_layanan=tb_hasil.id_jasa');
		if ($this->session->userdata('level') == 'pasien') {
			$this->db->where('tb_jadwal.id_pasien', $this->session->userdata('id'));
		}
		$parser['p_semuahasil'] = $this->db->get('tb_hasil')->result();
		$this->load->view('hasil/v_daftar', $parser);
	}

	public function tambah()
	{

		$this->db->join('tb_pasien', 'tb_pasien.id_pasien=tb_jadwal.id_pasien');
		$this->db->join('tb_piket', 'tb_piket.id_piket=tb_jadwal.id_piket');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan=tb_jadwal.id_layanan');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter=tb_dokter.id_dokter');
		$this->db->where('tb_jadwal.id_jadwal NOT IN (select id_jadwal from tb_hasil)');
		$data['p_semuajadwal'] = $this->db->get('tb_jadwal')->result();
		//$this->db->join('tb_dokter', 'tb_dokter.id_dokter=tb_piket.id_dokter');
		
		$data['p_semuaketerangan_hasil'] = $this->db->get('tb_hasil')->result();
		$this->load->view('hasil/v_tambah', $data);
	}

	public function tambahHasil($id_jadwal)
	{
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien=tb_jadwal.id_pasien');
		$this->db->join('tb_piket', 'tb_piket.id_piket=tb_jadwal.id_piket');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan=tb_jadwal.id_layanan');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter=tb_dokter.id_dokter');
		$this->db->order_by('tb_jadwal.id_jadwal', 'ASC');
		$this->db->where('tb_jadwal.id_jadwal', $id_jadwal);
		$data['p_jadwal'] = $this->db->get('tb_jadwal')->row();
		$this->load->view('hasil/v_tambah2', $data);
	}
	public function proses_tambah()
	{
	
		$v_id_jadwal = $this->input->post('i_id_jadwal');
		$v_id_jasa = $this->input->post('i_id_jasa');
		// $v_id_pasien = $this->input->post('i_id_pasien');
		// $v_id_piket = $this->input->post('i_id_piket');
		// $v_id_layanan = $this->input->post('i_id_layanan');
		// $v_status_jadwal = $this->input->post('i_status_jadwal');
		// $v_tanggal_daftar = $this->input->post('i_tanggal_daftar');
		$v_keterangan_hasil = $this->input->post('i_keterangan_hasil');
		
		

		$data_tambah = array(
			
			'id_jadwal' => $v_id_jadwal,
			'id_jasa' => $v_id_jasa,
			'keterangan_hasil' => $v_keterangan_hasil);


			
		$tambah_data = $this->db->insert('tb_hasil', $data_tambah);

		// $data_update = array(
		// 	'status_jadwal' => 'Sudah ditangani'
		// );

		$this->db->where('id_jadwal', $v_id_jadwal);
		// $this->db->update('tb_jadwal', $data_update);




		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah hasil berhasil.');
			redirect('hasil');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tambah hasil gagal.');
			redirect ('hasil');
		}
	}
	public function edit($id_hasil)
	{
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal=tb_hasil.id_jadwal');
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien=tb_jadwal.id_pasien');
		$this->db->join('tb_piket', 'tb_piket.id_piket=tb_jadwal.id_piket');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan=tb_jadwal.id_layanan');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter=tb_dokter.id_dokter');
		$parser['p_hasil'] = $this->db->get_where('tb_hasil', array('id_hasil'=>$id_hasil))->row();
		$this->load->view('hasil/v_edit', $parser);
		// $parser = array(
		// 	'p_hasil' => $this->db->get_where('tb_hasil', array('id_hasil'=>$id_hasil))->row()
		// 	);
		// $this->load->view('hasil/edit', $parser);
	}
	public function proses_edit()
	{
		$v_id_hasil = $this->input->post('i_id_hasil');
		$v_id_jadwal = $this->input->post('i_id_jadwal');
		$v_keterangan_hasil = $this->input->post('i_keterangan_hasil');
		
		$data_tambah = array(
			
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
			redirect('hasil');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus hasil gagal.');
			redirect ('hasil');
		}
	}

	public function getJasa(){
		$id_jadwal = $this->input->post('id_jadwal');
		$this->db->where('id_jadwal', $id_jadwal);
		$jadwal = $this->db->get('tb_jadwal')->row();

		$this->db->where('kategori', $jadwal->id_layanan);
		$jasa = $this->db->get('tb_jasa_layanan')->result();

		echo json_encode($jasa);

	}
}
?>