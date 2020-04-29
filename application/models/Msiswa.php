<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msiswa extends CI_Model {

	public function read(){
		return $this->db->get('siswa');
	}

	public function read_where($where){
		$this->db->where($where);
		return $this->db->get('siswa');
	}

	public function insert($data){
		return $this->db->insert('siswa', $data);
	}

	public function update($data, $id){
		$this->db->where('id_siswa', $id);
		return $this->db->update('siswa', $data);
	}

	public function delete($id){
		$this->db->where('id_siswa', $id);
		return $this->db->delete('siswa');
	}

}

/* End of file Msiswa.php */
/* Location: ./application/models/Msiswa.php */