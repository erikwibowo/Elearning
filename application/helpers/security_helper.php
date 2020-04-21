<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('x')){
	function x($s){
		return htmlentities($s, ENT_QUOTES, 'UTF-8');
	}
}