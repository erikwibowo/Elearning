<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mlog');
		admin();
	}

	public function index(){
		$x['title']		= "Admin - Log ".get_webinfo()->nama_website;
		$x['data']		= $this->Mlog->read()->result();
		$this->load->view('admin/log/index', $x);
	}

}

/* End of file Log.php */
/* Location: ./application/controllers/admin/Log.php */