<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		$x['title']		= "Admin - Admin ".get_webinfo()->nama_website;
		$x['data']		= $this->Madmin->read()->result();
		$this->load->view('admin/admin/index', $x);
	}

	public function aktifkan($id){
		if ($this->Madmin->update(array('status' => 1), $id)) {
			notif("Data berhasil diaktifkan", "s");
		}else{
			notif("Data gagal diaktifkan", "e");
		}
		redirect('admin/admin','refresh');
	}

	public function non_aktifkan($id){
		if ($this->Madmin->update(array('status' => 0), $id)) {
			notif("Data berhasil dinonaktifkan", "s");
		}else{
			notif("Data gagal dinonaktifkan", "e");
		}
		redirect('admin/admin','refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/admin/Admin.php */