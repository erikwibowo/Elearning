<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_email extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Memail_config');
		admin();
	}

	public function index(){
		$x['title']		= "Admin - Konfigurasi Email ".get_webinfo()->nama_website;
		$x['data']		= $this->Memail_config->read()->result();
		$this->load->view('admin/email-config/index', $x);
	}

}

/* End of file Konfigurasi_email.php */
/* Location: ./application/controllers/admin/Konfigurasi_email.php */