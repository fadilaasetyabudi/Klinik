<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller {
	
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

		$cek_login = $this->db->get_where('tb_admin', $data_where)->row();

		if (count($cek_login) > 0) {
			//jika data lebih dari 0 / jika data ada
			$this->session->set_userdata('is_login', TRUE);
			$this->session->set_userdata('id', $cek_login->id_admin);
			$this->session->set_userdata('level', 'admin');

			redirect("dokter");
		
		} else if (count($cek_login) > 0) {

			$data_where = array(
				'email_dokter' => $v_email,
				'password_dokter' => md5($v_password)
			);
			
			$cek_login2 = $this->db->get_where('tb_dokter', $data_where)->row();			
			
			if (count($cek_login2) > 0) {
				//jika data lebih dari 0 / jika data ada
				$this->session->set_userdata('is_login', TRUE);
				$this->session->set_userdata('id', $cek_login2->id_dokter);
				$this->session->set_userdata('level', 'dokter');

				redirect("profil");
		
			} else {
				//jika data tidak ada
				redirect("login");

			}
		// } else {
		// 	$data_where = array(
		// 		'email_pasien' => $v_email_pasien,
		// 		'password_pasien' => md5($v_password_pasien)
		// 	);
			
		// 	$cek_login3 = $this->db->get_where('tb_pasien', $data_where)->row();			
			
		// 	if (count($cek_login2) > 0) {
		// 		//jika data lebih dari 0 / jika data ada
		// 		$this->session->set_userdata('is_login', TRUE);
		// 		$this->session->set_userdata('id', $cek_login2->id_pasien);
		// 		$this->session->set_userdata('level', 'pasien');

		// 		redirect("profil");
			} else {
				redirect("login");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');	
	}
	
}
?>