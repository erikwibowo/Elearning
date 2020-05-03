<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhalaman extends CI_Model {

	public function read(){
		$this->db->select('a.id_halaman, a.judul_halaman, a.slug_halaman, a.meta_halaman, a.foto_halaman, a.thumb_halaman, a.isi_halaman, a.publish, a.dibuat, a.diubah, b.nama_admin, b.thumb_admin');
		$this->db->join('admin b', 'a.id_admin = b.id_admin');
		return $this->db->get('halaman a');
	}

	public function read_by_id(){
		$this->db->select('a.id_halaman, a.judul_halaman, a.slug_halaman, a.meta_halaman, a.foto_halaman, a.thumb_halaman, a.isi_halaman, a.publish, a.dibuat, a.diubah, b.nama_admin, b.thumb_admin');
		$this->db->join('admin b', 'a.id_admin = b.id_admin');
		return $this->db->get('halaman a');
	}

	public function read_where($where){
		$this->db->where($where);
		return $this->db->get('halaman');
	}

	public function insert($data){
		return $this->db->insert('halaman', $data);
	}

	public function update($data, $id){
		$this->db->where('id_halaman', $id);
		return $this->db->update('halaman', $data);
	}

	public function delete($id){
		$this->db->where('id_halaman', $id);
		return $this->db->delete('halaman');
	}

}

/* End of file Mhalaman.php */
/* Location: ./application/models/Mhalaman.php */