<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Handling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlog');
	}

	public function e404(){
		$data_log = array(
			'ip_address'	=> ip(),
			'browser'		=> $_SERVER['HTTP_USER_AGENT'],
			'keterangan'	=> "404 - Not found",
			'url'			=> current_url()
		);
		$this->Mlog->insert($data_log);
		$this->load->view('errors/html/error_404');
	}

}

/* End of file Handling.php */
/* Location: ./application/controllers/Handling.php */