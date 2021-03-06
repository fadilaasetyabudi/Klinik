<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Pasien extends CI_Controller {

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
			'p_semuapasien' => $this->db->get_where('tb_pasien')->result()
			);
		$this->load->view('pasien/v_daftar', 
			$parser);
	}

	public function scan_pasien(){
		$this->load->view('pasien/webcam');
	}

	public function show($id){
		$data_where = array(
			'id_pasien' => $id);
		$parser = array(
			'p_pasien' => $this->db->get_where('tb_pasien',$data_where)->row()
			);
		$this->load->view('pasien/v_bio', 
			$parser);
	}
	
	public function tambah()
	{
		$this->load->view('pasien/v_tambah');
	}
	public function proses_tambah()
	{
		$this->load->library('ciqrcode'); 

		$this->db->order_by('id_pasien', 'desc');
		$pasien = $this->db->get('tb_pasien', 1)->row();
		$id_pasien = $pasien->id_pasien + 1;


		$v_nama_pasien = $this->input->post('i_nama_pasien');
		$v_jenis_kelamin = $this->input->post('i_jenis_kelamin');
		$v_email_pasien = $this->input->post('i_email_pasien');
		$v_kontak_pasien = $this->input->post('i_kontak_pasien');
		$v_alamat_pasien = $this->input->post('i_alamat_pasien');
		$v_tanggal_lahir = $this->input->post('i_tanggal_lahir');
		$v_golongan_darah = $this->input->post('i_golongan_darah');
		$v_password_pasien = $this->input->post('i_password_pasien');
		$v_kode_verivikasi = $this->input->post('i_kode_verivikasi');
		
		$config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './uploads/qrcode/'; //string, the default is application/cache/
        $config['errorlog']     = './uploads/qrcode/'; //string, the default is application/logs/
        $config['imagedir']     = './uploads/qrcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 		
 		$image_name = $id_pasien.'.png'; //buat name dari qr code sesuai dengan nim
 		$params['data'] = $id_pasien; //data yang akan di jadikan QR CODE
 		$params['level'] = 'H'; //H=High
 		$params['size'] = 10;
 		$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
 		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

		$data_tambah = array(
			'nama_pasien' => $v_nama_pasien,
			'jenis_kelamin' => $v_jenis_kelamin,
			'email_pasien' => $v_email_pasien,
			'kontak_pasien' => $v_kontak_pasien,
			'alamat_pasien' => $v_alamat_pasien,
			'tanggal_lahir' => $v_tanggal_lahir,
			'golongan_darah' => 	$v_golongan_darah,
			'password_pasien' => md5($v_password_pasien),
			'kode_verivikasi' => $v_kode_verivikasi,
			'qr_code' => $image_name
		);
		$tambah_data = $this->db->insert('tb_pasien', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Tambah pasien berhasil.');
			redirect('pasien');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Tmbah pasien gagal.');
			redirect ('pasien');
		}
	}
	public function edit($id_pasien)
	{
		$parser = array(
			'p_pasien' => $this->db->get_where('tb_pasien', array('id_pasien'=>$id_pasien))->row()
			);
		$this->load->view('pasien/v_edit', $parser);
	}
	public function proses_edit($id_pasien)
	{
		$v_id_pasien = $this->input->post('i_id_pasien');
		$v_nama_pasien = $this->input->post('i_nama_pasien');
		$v_jenis_kelamin = $this->input->post('i_jenis_kelamin');
		$v_email_pasien = $this->input->post('i_email_pasien');
		$v_kontak_pasien = $this->input->post('i_kontak_pasien');
		$v_alamat_pasien = $this->input->post('i_alamat_pasien');
		$v_tanggal_lahir = $this->input->post('i_tanggal_lahir');
		$v_golongan_darah = $this->input->post('i_golongan_darah');
		$v_password_pasien = $this->input->post('i_password_pasien');
		$v_kode_verivikasi = $this->input->post('i_kode_verivikasi');
		
		$data_tambah = array(
			'nama_pasien' => $v_nama_pasien,
			'jenis_kelamin' => $v_jenis_kelamin,
			'email_pasien' => $v_email_pasien,
			'kontak_pasien' => $v_kontak_pasien,
			'alamat_pasien' => $v_alamat_pasien,
			'tanggal_lahir' => $v_tanggal_lahir,
			'golongan_darah' => 	$v_golongan_darah,
			'password_pasien' => md5($v_password_pasien)
		);

		$data_where= array(
			'id_pasien' => $v_id_pasien
		);
		$this->db->where('id_pasien', $id_pasien);
		$tambah_data = $this->db->update('tb_pasien', $data_tambah);

		if($tambah_data) {
			$this->session->set_flashdata('fd_pesan', 'Edit pasien berhasil.');
			redirect('pasien');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Edit pasien gagal.');
			redirect ('pasien');
		}
	}

	public function proses_hapus($id_pasien)
	{
			$data_where= array(
			'id_pasien' => $id_pasien
			);

		$hapus_data = $this->db->delete('tb_pasien', $data_where, $data_where);

		if($hapus_data) {
			$this->session->set_flashdata('fd_pesan', 'Hapus pasien berhasil.');
			redirect('pasien');
		} else {
			$this->session->set_flashdata('fd_pesan', 'Hapus pasien gagal.');
			redirect ('pasien');
		}
	}

	public function json_pasien(){
		$idPasien = $this->input->post('id_pasien');
		$query = $this->db->query("SELECT * FROM tb_pasien WHERE id_pasien = '$idPasien'");
		echo json_encode(array('data' => $query->result()));
	}
}
?>