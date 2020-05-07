<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgaleri extends CI_Model {

	public function read(){
		return $this->db->get('galeri');
	}

	public function read_where($where){
		$this->db->where($where);
		return $this->db->get('galeri');
	}

	public function insert($data){
		return $this->db->insert('galeri', $data);
	}

	public function update($data, $id){
		$this->db->where('id_galeri', $id);
		return $this->db->update('galeri', $data);
	}

	public function delete($id){
		$this->db->where('id_galeri', $id);
		return $this->db->delete('galeri');
	}

}

/* End of file Mgaleri.php */
/* Location: ./application/models/Mgaleri.php */