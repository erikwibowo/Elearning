<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		admin();
	}

	public function index(){
		$x['title']		= "Dashboard - Admin ".get_webinfo()->nama_website;
		$this->load->view('admin/dashboard/index', $x);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */