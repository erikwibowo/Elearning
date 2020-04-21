<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minfo extends CI_Model {

	public function read(){
		return $this->db->get('info');
	}

	public function read_where($where){
		$this->db->where($where);
		return $this->db->get('info');
	}

	public function update($data, $id){
		$this->db->where('id_info', $id);
		return $this->db->update('info', $data);
	}

	public function delete($id){
		$this->db->where('id_info', $id);
		return $this->db->delete('info');
	}

}

/* End of file Minfo.php */
/* Location: ./application/models/Minfo.php */