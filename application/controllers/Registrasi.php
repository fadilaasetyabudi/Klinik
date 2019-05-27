<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller{
	public function index() 
	{
		$this->load->model('regis_model');
		
		$this->load->view('daftar');
	}
	

	public function create()
	{
		$this->load->model('regis_model');
		$this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('email_pasien', 'Email Pasien', 'trim|required');
		$this->form_validation->set_rules('kontak_pasien', 'Kontak Pasien', 'trim|required');
		$this->form_validation->set_rules('alamat_pasien', 'Alamat Pasien', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('golongan_darah', 'Golongan Darah', 'trim|required');
		$this->form_validation->set_rules('password_pasien', 'Kata Sandi', 'trim|required');
		$this->form_validation->set_rules('kode_verivikasi', 'Kode Verivikasi', 'trim|required|callback_cekpass');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('daftar');
		} else {
			$this->db->order_by('id_pasien', 'desc');
		$pasien = $this->db->get('tb_pasien', 1)->row();
		$id_pasien = $pasien->id_pasien + 1;

			$this->load->library('ciqrcode'); 
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
				'nama_pasien' => $this->input->post('nama_pasien'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'email_pasien' => $this->input->post('email_pasien'),
				'kontak_pasien' => $this->input->post('kontak_pasien'),
				'alamat_pasien' => $this->input->post('alamat_pasien'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'golongan_darah' => 	$this->input->post('golongan_darah'),
				'password_pasien' => $this->input->post('password_pasien'),
				'kode_verivikasi' => $this->input->post('kode_verivikasi'),
				'qr_code' => $image_name
			);
			$tambah_data = $this->db->insert('tb_pasien', $data_tambah);
			$this->load->view('login/index.php');
		}
	}

	public function cekpass($konfirm)
	{
		$pass = $this->input->post('password_pasien');
		$konfirm = $this->input->post('kode_verivikasi');


		if($konfirm != $pass){
			$this->form_validation->set_message('cekpass', "Password Tidak Sama");
			return false;
		}
		else{
			return true;
		}
	}
}