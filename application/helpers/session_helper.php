<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('notif')){
	function notif($notif, $type){
		$ci =& get_instance();
		$ci->session->set_flashdata('notif', $notif);
		$ci->session->set_flashdata('type', $type);
	}
}