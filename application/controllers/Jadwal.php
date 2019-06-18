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

	public function tambah2($id)
	{
		$this->db->where('id_pasien', $id);
		$data['p_pasien'] = $this->db->get('tb_pasien')->row();
		$this->db->join('tb_dokter', 'tb_dokter.id_dokter=tb_piket.id_dokter');
		$data['p_semuapiket'] = $this->db->get('tb_piket')->result();
		$data['p_semualayanan'] = $this->db->get('tb_layanan')->result();
		$this->load->view('jadwal/v_tambah_2', $data);
	}

	public function proses_tambah()
	{
		$v_id_pasien = $this->input->post('i_id_pasien');
		$v_id_piket = $this->input->post('i_id_piket');
		$v_id_layanan = $this->input->post('i_id_layanan');
		$v_status_jadwal = $this->input->post('i_status_jadwal');
		$v_tanggal_daftar = $this->input->post('i_tanggal_daftar');

		
		$data_tambah = array(
			'id_pasien' => $v_id_pasien,
			'id_piket' => $v_id_piket,
			'id_layanan' => $v_id_layanan,
			'status_jadwal' => $v_status_jadwal,
			'tanggal_daftar' => $v_tanggal_daftar,
			);
			
		$tambah_data = $this->db->insert('tb_jadwal', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah jadwal berhasil.');
			$this->db->order_by('id_jadwal', 'desc');
			$jadwalInserted = $this->db->get('tb_jadwal', 1)->row();
			if ($v_status_jadwal == 'Sudah Ditangani') {
				redirect('hasil/tambahHasil/'.$jadwalInserted->id_jadwal,'refresh');
			} else {
				redirect('jadwal','refresh');
			}
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tmbah jadwal gagal.');
			redirect ('jadwal');
		}
	}
	public function edit($id_jadwal)
	{
		
		$parser['p_semuapasien'] = $this->db->get('tb_pasien')->result();
		$this->db->join('tb_dokter', 'tb_dokter.id_dokter=tb_piket.id_dokter');
		$parser['p_semuapiket'] = $this->db->get('tb_piket')->result();
		$parser['p_semualayanan'] = $this->db->get('tb_layanan')->result();
		$parser['p_jadwal'] = $this->db->get_where('tb_jadwal', array('id_jadwal'=>$id_jadwal))->row();
		$this->load->view('jadwal/v_edit', $parser);
	}
	public function proses_edit()
	{
		$v_id_jadwal = $this->input->post('i_id_jadwal');
		$v_id_pasien = $this->input->post('i_id_pasien');
		$v_id_piket = $this->input->post('i_id_piket');
		$v_id_layanan = $this->input->post('i_id_layanan');
		$v_status_jadwal = $this->input->post('i_status_jadwal');
		$v_tanggal_daftar = $this->input->post('i_tanggal_daftar');
		
		$data_tambah = array(
			'id_pasien' => $v_id_pasien,
			'id_piket' => $v_id_piket,
			'id_layanan' => $v_id_layanan,
			'status_jadwal' => $v_status_jadwal,
			'tanggal_daftar' => $v_tanggal_daftar,
			);
			

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

			$hasil = $this->db->get_where('tb_hasil', $data_where)->result();
			foreach ($hasil as $key) {
				$data_where2= array(
					'id_hasil' => $key->id_hasil
				);
				$resep = $this->db->get_where('tb_resep', $data_where2)->result();
				foreach ($resep as $key2) {
					$data_where3= array(
						'id_resep' => $key2->id_resep
					);

					$this->db->delete('tb_penjualan', $data_where3);
				}

				$this->db->delete('tb_resep', $data_where2);
			}

			$this->db->delete('tb_hasil', $data_where);

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