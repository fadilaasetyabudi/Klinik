<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('level') == 'dokter') {
			$this->db->where('id_dokter', $this->session->userdata('id'));
			$data['profil'] = $this->db->get('tb_dokter')->row();
			
		} else {
			$this->db->where('id_admin', $this->session->userdata('id'));
			$data['profil'] = $this->db->get('tb_admin')->row();
		}

		$this->load->view('Profil/v_profil', $data);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */