<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlog extends CI_Model {

	public function read(){
		$this->db->order_by('dibuat', 'desc');
		return $this->db->get('log');
	}

	public function read_where($where){
		$this->db->where($where);
		$this->db->order_by('dibuat', 'desc');
		return $this->db->get('log');
	}

	public function insert($data){
		return $this->db->insert('log', $data);
	}

	public function update($data, $id){
		$this->db->where('id_log', $id);
		return $this->db->update('log', $data);
	}

	public function delete($id){
		$this->db->where('id_log', $id);
		return $this->db->delete('log');
	}

}

/* End of file Mlog.php */
/* Location: ./application/models/Mlog.php */