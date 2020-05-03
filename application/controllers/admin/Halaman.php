<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mhalaman');
		admin();
	}

	public function index(){
		$x['title']		= "Halaman - Admin ".get_webinfo()->nama_website;
		$x['data']		= $this->Mhalaman->read()->result();
		$this->load->view('admin/halaman/index', $x);
	}

	public function tambah(){
		$x['title']		= "Tulis Blog - Admin ".get_webinfo()->nama_website;
		$this->load->view('admin/halaman/form/tambah', $x);
	}

	public function edit($id){
		$x['title']		= "Tulis Blog - Admin ".get_webinfo()->nama_website;
		$x['data']		= $this->Mhalaman->read_where(array('id_halaman' => $id))->row();
		$this->load->view('admin/halaman/form/edit', $x);
	}

	public function publish($id){
		if ($this->Mhalaman->update(array('publish' => 1), $id)) {
			notif("Data berhasil dipublish", "s");
		}else{
			notif("Data gagal dipublish", "e");
		}
		redirect('admin/halaman','refresh');
	}

	public function unpublish($id){
		if ($this->Mhalaman->update(array('publish' => 0), $id)) {
			notif("Data berhasil diunpublish", "s");
		}else{
			notif("Data gagal diunpublish", "e");
		}
		redirect('admin/halaman','refresh');
	}

	public function delete($id){
		$data = $this->Mhalaman->read_where(array('id_halaman' => $id))->row();
		if ($this->Mhalaman->delete($id)) {
			$path = "./files/halaman/";
			unlink($path."source/".$data->foto_halaman);
			unlink($path."thumb/".$data->thumb_halaman);
			notif("Data berhasil dihapus", "s");
		}else{
			notif("Data gagal dihapus", "e");
		}
		redirect('admin/halaman','refresh');
	}

	public function insert(){
		$nm_file = "halaman_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/halaman/source/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
		$this->upload->initialize($config);

        if(isset($_FILES['foto']['name'])){
            if($this->upload->do_upload('foto')){
        		//echo "Foto ada";
                $data_upload = $this->upload->data();
                $create_thumb = array(
                    'image_library' => 'gd2',
                    'source_image' => './files/halaman/source/'.$data_upload['file_name'],
                    'new_image' => './files/halaman/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => true,
                    'create_thumb' => true,
                    'quality' => '40%',
                    'height' => '100',
                    'width' => '100'
                );

                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();

                $data = array(
					'judul_halaman'		=> $this->input->post('judul_halaman'),
					'slug_halaman'			=> slug($this->input->post('judul_halaman')),
					'foto_halaman'    		=> $data_upload['file_name'],
                    'thumb_halaman'		=> $nm_file.'_thumb'.$data_upload['file_ext'],
					'meta_halaman'			=> $this->input->post('meta_halaman'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);
            }
        }
		if ($this->Mhalaman->insert($data)) {
			notif("Data berhasil disimpan", "s");
		}else{
			notif("Data gagal disimpan", "e");
		}
		redirect('admin/halaman','refresh');
	}

	public function update(){
		$nm_file = "halaman_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/halaman/source/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
		$this->upload->initialize($config);
		$id_halaman = $this->input->post('id_halaman');

        if(isset($_FILES['foto']['name'])){
            if($this->upload->do_upload('foto')){
        		//echo "Foto ada";
                $data_upload = $this->upload->data();
                $create_thumb = array(
                    'image_library' => 'gd2',
                    'source_image' => './files/halaman/source/'.$data_upload['file_name'],
                    'new_image' => './files/halaman/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => true,
                    'create_thumb' => true,
                    'quality' => '40%',
                    'height' => '100',
                    'width' => '100'
                );

                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();

                $data = array(
					'judul_halaman'		=> $this->input->post('judul_halaman'),
					'slug_halaman'			=> slug($this->input->post('judul_halaman')),
					'foto_halaman'    		=> $data_upload['file_name'],
                    'thumb_halaman'		=> $nm_file.'_thumb'.$data_upload['file_ext'],
					'isi_halaman'			=> $this->input->post('isi_halaman'),
					'meta_halaman'			=> $this->input->post('meta_halaman'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);

				$x = $this->Mhalaman->read_where(array('id_halaman' => $id_halaman))->row();
				if ($this->Mhalaman->update($data, $id_halaman)) {
					$path = "./files/halaman/";
					unlink($path."source/".$x->foto_halaman);
					unlink($path."thumb/".$x->thumb_halaman);
					notif("Data berhasil disimpan", "s");
				}else{
					notif("Data gagal disimpan", "e");
				}
            }else{
            	$data = array(
					'judul_halaman'		=> $this->input->post('judul_halaman'),
					'slug_halaman'			=> slug($this->input->post('judul_halaman')),
					'isi_halaman'			=> $this->input->post('isi_halaman'),
					'meta_halaman'			=> $this->input->post('meta_halaman'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);
            	if ($this->Mhalaman->update($data, $id_halaman)) {
					notif("Data berhasil disimpan", "s");
				}else{
					notif("Data gagal disimpan", "e");
				}
            }
        }
		redirect('admin/halaman','refresh');
	}

}

/* End of file Halaman */
/* Location: ./application/controllers/admin/Halaman */