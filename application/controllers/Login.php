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

		$cek_login = $this->db->get_where('tb_admin', $data_where)->result();

		if (count($cek_login) > 0) {
			//jika data lebih dari 0 / jika data ada
			$this->session->set_userdata('is_login', TRUE);
			$this->session->set_userdata('level', 'admin');

			redirect("dokter");
		
		} else {

			$data_where = array(
				'email_dokter' => $v_email,
				'password_dokter' => md5($v_password)
			);
			
			$cek_login2 = $this->db->get_where('tb_dokter', $data_where)->result();			
			
			if (count($cek_login2) > 0) {
				//jika data lebih dari 0 / jika data ada
				$this->session->set_userdata('is_login', TRUE);
				$this->session->set_userdata('level', 'dokter');

				redirect("dokter");
		
			} else {
				//jika data tidak ada
				redirect("login");

			}
		} 
	}
	
}
?>