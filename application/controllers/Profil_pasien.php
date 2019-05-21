<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('level') == 'pasien') {
			$this->db->where('id_pasien', $this->session->userdata('id'));
			$data['profil_pasien'] = $this->db->get('tb_pasien')->row();
			
		} else {
			$this->db->where('id_admin', $this->session->userdata('id'));
			$data['profil_pasien'] = $this->db->get('tb_admin')->row();
		}

		$this->load->view('profil/v_profil_pasien', $data);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */