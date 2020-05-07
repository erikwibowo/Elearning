<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mgaleri');
		$this->load->model('Malbumgaleri');
		admin();
	}

	public function index(){
		$x['title']		= "Galeri - Admin ".get_webinfo()->nama_website;
		$x['data']		= $this->Mgaleri->read()->result();
		$this->load->view('admin/galeri/index', $x);
	}

	public function album(){
		$x['title']		= "Album - Admin ".get_webinfo()->nama_website;
		$x['data']		= $this->Malbumgaleri->read()->result();
		$this->load->view('admin/galeri/index', $x);
	}

	public function insert(){
		if ($this->Mgaleri->insert($this->input->post())) {
			notif("Data behasil disimpan", "s");
		}else{
			notif("Data gagal disimpan", "e");
		}
		redirect('admin/galeri','refresh');
	}

	public function update(){
		if ($this->Mgaleri->update($this->input->post(), $this->input->post('id_info'))) {
			notif("Data behasil disimpan", "s");
		}else{
			notif("Data gagal disimpan", "e");
		}
		redirect('admin/galeri','refresh');
	}

	public function delete($id){
		if ($this->Mgaleri->delete($id)) {
			notif("Data behasil dihapus", "s");
		}else{
			notif("Data gagal dihapus", "e");
		}
		redirect('admin/galeri','refresh');
	}

	public function data(){
		$id = $this->input->post('id');
		$x= $this->Mgaleri->read_where(array('id_info' => $id))->row();
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

/* End of file Galeri.php */
/* Location: ./application/controllers/admin/Galeri.php */