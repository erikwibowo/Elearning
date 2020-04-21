<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_webinfo')){
	function get_webinfo(){
		$ci =& get_instance();
		$ci->load->model('Minfo');

		$data = $ci->Minfo->read_where(array('aktif' => 1))->row();
		return $data;
	}
}