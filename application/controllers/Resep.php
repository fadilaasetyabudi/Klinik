<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Resep extends CI_Controller {

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
		$this->db->join('tb_hasil', 'tb_hasil.id_hasil = tb_resep.id_hasil');
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal = tb_hasil.id_jadwal');
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien=tb_jadwal.id_pasien');
		$this->db->join('tb_piket', 'tb_piket.id_piket=tb_jadwal.id_piket');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan=tb_jadwal.id_layanan');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter=tb_dokter.id_dokter');

		if ($this->session->userdata('level') == 'pasien') {
			$this->db->where('tb_jadwal.id_pasien', $this->session->userdata('id'));
		}
		$parser['p_semuaresep'] = $this->db->get('tb_resep')->result(); 
		$this->load->view('resep/v_daftar', 
			$parser);
	}

	public function lihatObat($id)
	{

		$this->db->join('tb_obat', 'tb_obat.id_obat = tb_detail_resep.id_obat');
		$this->db->join('tb_resep', 'tb_resep.id_resep = tb_detail_resep.id_resep');
		$this->db->join('tb_hasil', 'tb_hasil.id_hasil = tb_resep.id_hasil');
		$this->db->join('tb_jasa_layanan', 'tb_jasa_layanan.id_layanan=tb_hasil.id_jasa');

		$this->db->where('tb_detail_resep.id_resep', $id);
		$parser['p_obat'] = $this->db->get('tb_detail_resep')->result(); 
		$this->load->view('resep/v_daftar_obat', 
			$parser);
	}

	public function tambah()
	{
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal = tb_hasil.id_jadwal');
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_jadwal.id_pasien');
		$this->db->join('tb_piket', 'tb_piket.id_piket = tb_jadwal.id_piket');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter = tb_dokter.id_dokter');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan = tb_jadwal.id_layanan');
		$this->db->join('tb_jasa_layanan', 'tb_jasa_layanan.id_layanan=tb_hasil.id_jasa');	
		$this->db->where('tb_hasil.id_hasil NOT IN (SELECT id_hasil FROM tb_resep)');
		$this->db->order_by('tb_hasil.id_hasil', 'asc');
		$parser['p_hasil'] = $this->db->get('tb_hasil')->result();
		$parser['p_obat'] = $this->db->get('tb_obat')->result();
		$this->load->view('resep/v_tambah', $parser);
	}

	public function proses_tambah()
	{
		$v_id_hasil = $this->input->post('i_id_hasil');
		$jumlah = $this->input->post('countObat');
		$data_tambah = array(
			'id_hasil' => $v_id_hasil);
		$tambah_data = $this->db->insert('tb_resep', $data_tambah);

		$this->db->order_by('id_resep', 'desc');
		$id_resep = $this->db->get('tb_resep', 1)->row()->id_resep;

		for ($i=1; $i < $jumlah+1 ; $i++) { 

			$this->db->where('id_obat', $this->input->post('i_id_obat'.$i));
			$hargaobat = $this->db->get('tb_obat', 1)->row()->harga_obat;
			
			$total = $hargaobat * $this->input->post('i_jumlah_obat'.$i);

			$data_tambah = array(
				'id_resep' => $id_resep,
				'id_obat' => $this->input->post('i_id_obat'.$i),
				'jumlah' => $this->input->post('i_jumlah_obat'.$i),
				'total' => $total
			);

			$this->db->insert('tb_detail_resep', $data_tambah);
		}

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah resep berhasil.');
			redirect('resep');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tambah resep gagal.');
			redirect ('resep');
		}
	}
	public function edit($id_resep)
	{	
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal = tb_hasil.id_jadwal');
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_jadwal.id_pasien');
		$this->db->join('tb_piket', 'tb_piket.id_piket = tb_jadwal.id_piket');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter = tb_dokter.id_dokter');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan = tb_jadwal.id_layanan');
		$this->db->join('tb_jasa_layanan', 'tb_jasa_layanan.id_layanan=tb_hasil.id_jasa');	
		$this->db->where('tb_hasil.id_hasil NOT IN (SELECT id_hasil FROM tb_resep)');
		$this->db->order_by('tb_hasil.id_hasil', 'asc');
		$data['p_hasil'] = $this->db->get('tb_hasil')->result();
		$this->db->where('id_resep', $id_resep);
		$data['p_resep'] = $this->db->get('tb_resep')->row();
		$this->db->join('tb_jadwal', 'tb_jadwal.id_jadwal = tb_hasil.id_jadwal');
		$this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_jadwal.id_pasien');
		$this->db->join('tb_piket', 'tb_piket.id_piket = tb_jadwal.id_piket');
		$this->db->join('tb_dokter', 'tb_piket.id_dokter = tb_dokter.id_dokter');
		$this->db->join('tb_layanan', 'tb_layanan.id_layanan = tb_jadwal.id_layanan');
		$this->db->join('tb_jasa_layanan', 'tb_jasa_layanan.id_layanan=tb_hasil.id_jasa');	
		$this->db->where('tb_hasil.id_hasil', $data['p_resep']->id_hasil);
		$data['p_hasildipilih'] = $this->db->get('tb_hasil')->row();

		$this->db->where('id_resep', $data['p_resep']->id_resep);
		$data['p_jumlahobat'] = $this->db->get('tb_detail_resep')->num_rows();
		$data['p_obat'] = $this->db->get('tb_obat')->result();
		$this->db->where('id_resep', $data['p_resep']->id_resep);
		$data['p_obatlist'] = $this->db->get('tb_detail_resep')->result();
		$this->load->view('resep/v_edit', $data);
	}
	public function proses_edit($id_resep)
	{
		$v_id_hasil = $this->input->post('i_id_hasil');
		$jumlah = $this->input->post('countObat');
		$data_update = array(
			'id_hasil' => $v_id_hasil);
		$this->db->where('id_resep', $id_resep);
		$tambah_data = $this->db->update('tb_resep', $data_update);

		$this->db->where('id_resep', $id_resep);
		$this->db->delete('tb_detail_resep');

		for ($i=1; $i < $jumlah+1 ; $i++) { 

			$this->db->where('id_obat', $this->input->post('i_id_obat'.$i));
			$hargaobat = $this->db->get('tb_obat', 1)->row()->harga_obat;
			
			$total = $hargaobat * $this->input->post('i_jumlah_obat'.$i);

			$data_tambah = array(
				'id_resep' => $id_resep,
				'id_obat' => $this->input->post('i_id_obat'.$i),
				'jumlah' => $this->input->post('i_jumlah_obat'.$i),
				'total' => $total
			);

			$this->db->insert('tb_detail_resep', $data_tambah);
		}

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit resep berhasil.');
			redirect('resep');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit resep gagal.');
			redirect ('resep');
		}
	}

	public function proses_hapus($id_resep)
	{
			$data_where= array(
			'id_resep' => $id_resep
			);

		$hapus_data = $this->db->delete('tb_resep', $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus resep berhasil.');
			redirect('resep');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus resep gagal.');
			redirect ('resep');
		}
	}

	public function getDataObat($id)
	{
		$this->db->where('id_obat', $id);
		echo json_encode($this->db->get('tb_obat')->row());
	}
}
?>