<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_email extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Memail_config');
		admin();
	}

	public function index(){
		$x['title']		= "Konfigurasi Email - Admin ".get_webinfo()->nama_website;
		$x['data']		= $this->Memail_config->read()->result();
		$this->load->view('admin/email-config/index', $x);
	}

	public function aktifkan($id){
		if ($this->Memail_config->update(array('aktif' => 1), $id)) {
			$this->Memail_config->update_not(array('aktif' => 0), $id);
			notif("Data berhasil diaktifkan", "s");
		}else{
			notif("Data gagal diaktifkan", "e");
		}
		redirect('admin/konfigurasi-email','refresh');
	}

	public function delete($id){
		if ($this->Memail_config->delete($id)) {
			notif("Data berhasil dihapus", "s");
		}else{
			notif("Data gagal dihapus", "e");
		}
		redirect('admin/konfigurasi-email','refresh');
	}

	public function non_aktifkan($id){
		if ($this->Memail_config->update(array('aktif' => 0), $id)) {
			notif("Data berhasil dinonaktifkan", "s");
		}else{
			notif("Data gagal dinonaktifkan", "e");
		}
		redirect('admin/konfigurasi-email','refresh');
	}

	public function insert(){
		if ($this->Memail_config->insert($this->input->post())) {
			notif("Data berhasil disimpan", "s");
		}else{
			notif("Data gagal disimpan", "e");
		}
		redirect('admin/konfigurasi-email','refresh');
	}

	public function update(){
		if ($this->Memail_config->update($this->input->post(), $this->input->post('id'))) {
			notif("Data berhasil disimpan", "s");
		}else{
			notif("Data gagal disimpan", "e");
		}
		redirect('admin/konfigurasi-email','refresh');
	}

	public function data(){
		$id = $this->input->post('id');
		$x = $this->Memail_config->read_where(array('id_email_config' => $id))->row();
		echo json_encode($x);
	}

}

/* End of file Konfigurasi_email.php */
/* Location: ./application/controllers/admin/Konfigurasi_email.php */