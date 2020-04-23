<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memail_config extends CI_Model {

	public function read(){
		return $this->db->get('email_config');
	}

	public function read_where($where){
		$this->db->where($where);
		return $this->db->get('email_config');
	}

	public function insert($data){
		return $this->db->insert('email_config', $data);
	}

	public function update($data, $id){
		$this->db->where('id_email_config', $id);
		return $this->db->update('email_config', $data);
	}

	public function delete($id){
		$this->db->where('id_email_config', $id);
		return $this->db->delete('email_config');
	}

}

/* End of file Memail_config.php */
/* Location: ./application/models/Memail_config.php */