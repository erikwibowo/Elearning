<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mmateri');
		admin();
	}

	public function index(){
		$x['title']		= "Materi - Admin ".get_webinfo()->nama_website;
		$x['data']		= $this->Mmateri->read()->result();
		$this->load->view('admin/materi/index', $x);
	}

	public function insert(){
		if ($this->Mmateri->insert($this->input->post())) {
			notif("Data behasil disimpan", "s");
		}else{
			notif("Data gagal disimpan", "e");
		}
		redirect('admin/materi','refresh');
	}

	public function update(){
		if ($this->Mmateri->update($this->input->post(), $this->input->post('id_info'))) {
			notif("Data behasil disimpan", "s");
		}else{
			notif("Data gagal disimpan", "e");
		}
		redirect('admin/materi','refresh');
	}

	public function delete($id){
		if ($this->Mmateri->delete($id)) {
			notif("Data behasil dihapus", "s");
		}else{
			notif("Data gagal dihapus", "e");
		}
		redirect('admin/materi','refresh');
	}

	public function data(){
		$id = $this->input->post('id');
		$x= $this->Mmateri->read_where(array('id_info' => $id))->row();
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

/* End of file Materi.php */
/* Location: ./application/controllers/admin/Materi.php */