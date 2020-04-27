<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mslider');
		admin();
	}

	public function index(){
		$x['title']		= "Slider - Admin ".get_webinfo()->nama_website;
		$x['data']		= $this->Mslider->read()->result();
		$this->load->view('admin/slider/index', $x);
	}

	public function aktifkan($id){
		if ($this->Mslider->update(array('aktif' => 1), $id)) {
			notif("Data berhasil diaktifkan", "s");
		}else{
			notif("Data gagal diaktifkan", "e");
		}
		redirect('admin/slider','refresh');
	}

	public function non_aktifkan($id){
		if ($this->Mslider->update(array('aktif' => 0), $id)) {
			notif("Data berhasil dinonaktifkan", "s");
		}else{
			notif("Data gagal dinonaktifkan", "e");
		}
		redirect('admin/slider','refresh');
	}

	public function insert(){
		$nm_file = "slider_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
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

                $data = array(
					'judul'				=> $this->input->post('judul'),
					'subjudul'			=> $this->input->post('subjudul'),
					'foto' 			   	=> $data_upload['file_name'],
					'link'				=> $this->input->post('link')
				);
            }
        }
		if ($this->Mslider->insert($data)) {
			notif("Data berhasil disimpan", "s");
		}else{
			notif("Data gagal dinonaktifkan", "e");
		}
		redirect('admin/slider','refresh');
	}

	public function update(){
		$nm_file = "slider_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/slider/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
		$this->upload->initialize($config);
		$id_slider = $this->input->post('id_slider');
		

        if(isset($_FILES['foto']['name'])){
            if($this->upload->do_upload('foto')){
        		//echo "Foto ada";
                $data_upload = $this->upload->data();

                $data = array(
					'judul'				=> $this->input->post('judul'),
					'subjudul'			=> $this->input->post('subjudul'),
					'foto' 			   	=> $data_upload['file_name'],
					'link'				=> $this->input->post('link')
				);

				$x = $this->Mslider->read_where(array('id_slider' => $id_slider))->row();
				if ($this->Mslider->update($data, $id_slider)) {
					$path = "./files/slider/";
					unlink($path.$x->foto);
					notif("Data berhasil disimpan", "s");
				}else{
					notif("Data gagal dinonaktifkan", "e");
				}
            }else{
				$data = array(
					'judul'				=> $this->input->post('judul'),
					'subjudul'			=> $this->input->post('subjudul'),
					'link'				=> $this->input->post('link')
				);
				if ($this->Mslider->update($data, $id_slider)) {
					notif("Data berhasil disimpan", "s");
				}else{
					notif("Data gagal dinonaktifkan", "e");
				}
			}
        }
		
		redirect('admin/slider','refresh');
	}

	public function delete($id){
		$data = $this->Mslider->read_where(array('id_slider' => $id))->row();
		if ($this->Mslider->delete($id)) {
			$path = "./files/slider/";
			unlink($path.$data->foto);
			notif("Data berhasil dihapus", "s");
		}else{
			notif("Data gagal dihapus", "e");
		}
		redirect('admin/slider','refresh');
	}

	public function data(){
		$id = $this->input->post('id');
		$x = $this->Mslider->read_where(array('id_slider' => $id))->row();
		$data = array(
			"id_slider"		=> $x->id_slider,
			"judul"			=> $x->judul,
			"subjudul"		=> $x->subjudul,
			"link"			=> $x->link,
			"foto"	=> base_url('files/slider/').$x->foto
		);
		echo json_encode($data);
	}

}

/* End of file Slider.php */
/* Location: ./application/controllers/admin/Slider.php */