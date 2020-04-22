<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('notif')){
	function notif($notif, $type){
		$ci =& get_instance();
		$ci->session->set_flashdata('notif', $notif);
		$ci->session->set_flashdata('type', $type);
	}
}

if ( ! function_exists('role_admin')){
	function role_admin(){
		$ci =& get_instance();
		if (empty($ci->session->userdata('id_admin'))) {
			notif("Ups! Anda tidak memiliki hak akses untuk memasuki halaman ini", "i");
			redirect('admin/login','refresh');
		}
	}
}