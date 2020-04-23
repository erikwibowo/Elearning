<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mslider');
		admin();
	}

	public function index(){
		$x['title']		= "Admin - Slider ".get_webinfo()->nama_website;
		$x['data']		= $this->Mslider->read()->result();
		$this->load->view('admin/slider/index', $x);
	}

}

/* End of file Slider.php */
/* Location: ./application/controllers/admin/Slider.php */