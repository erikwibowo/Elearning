<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Malbumgaleri extends CI_Model {

	public function read(){
		return $this->db->get('album_galeri');
	}

	public function read_where($where){
		$this->db->where($where);
		return $this->db->get('album_galeri');
	}

	public function insert($data){
		return $this->db->insert('album_galeri', $data);
	}

	public function update($data, $id){
		$this->db->where('id_album_galeri', $id);
		return $this->db->update('album_galeri', $data);
	}

	public function delete($id){
		$this->db->where('id_album_galeri', $id);
		return $this->db->delete('album_galeri');
	}

}

/* End of file Malbumgaleri.php */
/* Location: ./application/models/Malbumgaleri.php */