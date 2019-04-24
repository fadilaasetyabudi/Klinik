<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Admin extends CI_Controller {
	
	public function index()
	{
		$parser = array(
			'p_semuadokter' => $this->db->get_where('tb_dokter')->result()
			);
		$this->load->view('admin/index');
	}
	public function proses_admin() {
		$v_username = $this->input->post('i_username');
		$v_password = $this->input->post('i_password');

		$data_where = array(
			'username' => $v_username,
			'password' => md5($v_password)
		);

		$cek_login = $this->db->get_where('tb_admin', $data_where)->result();

		if (count($cek_login) > 0) {
			//jika data lebih dari 0 / jika data ada
			$this->session->set_userdata('is_amin', TRUE);
			redirect("dokter");
		
		} else {
			//jika data tidak ada
			redirect("admin");
		}
	}
	
}
?>