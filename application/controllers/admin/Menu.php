<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mmenu');
		admin();
	}

	public function index(){
		$x['title']		= "Menu - Admin ".get_webinfo()->nama_website;
		$x['data']		= $this->Mmenu->read()->result();
		$this->load->view('admin/menu/index', $x);
	}

	public function insert(){
		if ($this->Mmenu->insert($this->input->post())) {
			notif("Data behasil disimpan", "s");
		}else{
			notif("Data gagal disimpan", "e");
		}
		redirect('admin/menu','refresh');
	}

	public function update(){
		if ($this->Mmenu->update($this->input->post(), $this->input->post('id_info'))) {
			notif("Data behasil disimpan", "s");
		}else{
			notif("Data gagal disimpan", "e");
		}
		redirect('admin/menu','refresh');
	}

	public function delete($id){
		if ($this->Mmenu->delete($id)) {
			notif("Data behasil dihapus", "s");
		}else{
			notif("Data gagal dihapus", "e");
		}
		redirect('admin/menu','refresh');
	}

	public function data(){
		$id = $this->input->post('id');
		$x= $this->Mmenu->read_where(array('id_info' => $id))->row();
		$data = array(
			"id_info"				=> $x->id_info,
		    "nama_website"			=> $x->nama_website,
		    "nama_singkat_website"	=> $x->nama_singkat_website,
		    "deskripsi"				=> $x->deskripsi,
		    "alamat"				=> $x->alamat,
		    "email"					=> $x->email,
		    "no_telepon"			=> $x->no_telepon,
		    "facebook"				=> $x->facebook,
		    "instagram"				=> $x->instagram,
		    "twitter"				=> $x->twitter
		);
		echo json_encode($data);
	}

}

/* End of file Menu.php */
/* Location: ./application/controllers/admin/Menu.php */