<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		// var_dump($this->session->userdata());
		// if ($this->uri->segment(3) != 'logout') {
		// 	if ($this->session->userdata('is_login')) {
		// 		if ($this->session->userdata('level') == 'admin') {
		// 			redirect('dokter');
		// 		} else if ($this->session->userdata('level') == 'dokter') {
		// 			redirect('Profil');
		// 		} else if ($this->session->userdata('level') == 'pasien') {
		// 			redirect('Profil_pasien');
		// 		}
		// 	}
		// }
	}
	
	public function index()
	{
		$parser = array(
			'p_semuadokter' => $this->db->get_where('tb_dokter')->result()
			);
		$this->load->view('login/index');
	}
	public function proses_login() {
		$v_email = $this->input->post('i_email');
		$v_password = $this->input->post('i_password');

		$data_where = array(
			'email_admin' => $v_email,
			'password_admin' => md5($v_password)
		);

		$cek_login = $this->db->get_where('tb_admin', $data_where)->result();

		if (count($cek_login) > 0) {
			//jika data lebih dari 0 / jika data ada
			$this->session->set_userdata('is_login', TRUE);
			$this->session->set_userdata('id', $cek_login[0]->id_admin);
			$this->session->set_userdata('level', 'admin');

			redirect("pasien/scan_pasien");
		
		} else if (count($cek_login) == 0) {

			$data_where = array(
				'email_dokter' => $v_email,
				'password_dokter' => md5($v_password)
			);
			
			$cek_login2 = $this->db->get_where('tb_dokter', $data_where)->result();			
			
			if (count($cek_login2) > 0) {
				//jika data lebih dari 0 / jika data ada
				$this->session->set_userdata('is_login', TRUE);
				$this->session->set_userdata('id', $cek_login2[0]->id_dokter);
				$this->session->set_userdata('level', 'dokter');

				redirect("Profil");
		
			
			}else if (count($cek_login2) == 0) {

				$data_where = array(
					'email_pasien' => $v_email,
					'password_pasien' => md5($v_password)
				);
			
				$cek_login3 = $this->db->get_where('tb_pasien', $data_where)->result();			
			
				if (count($cek_login3) > 0) {
					//jika data lebih dari 0 / jika data ada
					$this->session->set_userdata('is_login', TRUE);
					$this->session->set_userdata('id', $cek_login3[0]->id_pasien);
					$this->session->set_userdata('level', 'pasien');

					redirect("Profil_pasien");
		
			
				}
			}
		}
	}
	

	public function logout()
	{
		$this->session->unset_userdata('is_login');
		$this->session->sess_destroy();
		redirect('login','refresh');	
	}
	
}
?>