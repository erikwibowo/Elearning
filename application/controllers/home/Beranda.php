<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mslider');
	}

	public function index(){
		$x['slider']	= $this->Mslider->read_where(array('aktif' => 1))->result();
		$this->load->view('home/index', $x);
	}

	public function kirim_email(){
		$this->load->helper('email');
		$data = array(
			'email_to'	=> $this->input->post('email'),
			'subject'	=> "Test kirim email",
			'message'	=> "Test test",
			'notif'		=> "Pengiriman email"
		);
		send_email($data);
		redirect('','refresh');
	}

}

/* End of file Beranda.php */
/* Location: ./application/controllers/home/Beranda.php */