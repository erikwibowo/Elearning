<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		$x['title']		= "Login Admin ".get_webinfo()->nama_website;
		$this->load->view('admin/auth/login', $x);
		if (!empty($this->session->userdata('id_admin'))) {
			notif("Selamat datang, <b>".admin()->nama_admin."</b>", "i");
			redirect('admin','refresh');
		}
	}

	public function auth(){
		$this->load->model('Mlog');
		$email		= $this->input->post("email");
		$password	= $this->input->post("password");
		$response_key = $this->input->post('g-recaptcha-response');
		$secret_key = "6LcWV8cUAAAAALE22UKZozVR1QfgORhxgKV7eYkS";

		$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$response_key);
		$response = json_decode($verify);

		$auth = $this->Madmin->read_where(array('email_admin' => $email));

		if($response->success){
			if ($auth->num_rows() == 1) {
				$data = $auth->row();
				if ($data->status == 1) {
					if (password_verify($password, $data->password)) {
						$this->Madmin->update(array('login' => date("Y-m-d H:i")), $data->id_admin);
						$data_log = array(
							'ip_address'	=> ip(),
							'browser'		=> $_SERVER['HTTP_USER_AGENT'],
							'keterangan'	=> $data->nama_admin." berhaisil login ke halaman admin",
							'url'			=> current_url()
						);
						$this->Mlog->insert($data_log);
						$this->session->set_userdata(array('id_admin' => $data->id_admin));
						notif("Selamat datang, <b>".$data->nama_admin."</b>", "i");
						redirect('admin','refresh');
					}else{
						$data_log = array(
							'ip_address'	=> ip(),
							'browser'		=> $_SERVER['HTTP_USER_AGENT'],
							'keterangan'	=> $email." | ".$password.". Gagal login ke halaman admin karena kombinasi email dan kata sandi tidak cocok",
							'url'			=> current_url()
						);
						$this->Mlog->insert($data_log);
						notif("Kombinasi email dan kata sandi anda tidak cocok", "e");
					}
				}else{
					$data_log = array(
						'ip_address'	=> ip(),
						'browser'		=> $_SERVER['HTTP_USER_AGENT'],
						'keterangan'	=> $email." | ".$password.". Gagal login ke halaman admin karena akun tidak aktif",
						'url'			=> current_url()
					);
					$this->Mlog->insert($data_log);
					notif("Akun anda tidak aktif. Hubungi adminitrator", "e");
				}
			}else{
				$data_log = array(
					'ip_address'	=> ip(),
					'browser'		=> $_SERVER['HTTP_USER_AGENT'],
					'keterangan'	=> $email." | ".$password.". Gagal login ke halaman admin karena kombinasi email dan kata sandi tidak cocok",
					'url'			=> current_url()
				);
				$this->Mlog->insert($data_log);
				notif("Kombinasi email dan kata sandi anda tidak cocok", "e");
			}
		}else{
			$data_log = array(
				'ip_address'	=> ip(),
				'browser'		=> $_SERVER['HTTP_USER_AGENT'],
				'keterangan'	=> $email." | ".$password.". Gagal login ke halaman admin karena kesalahan recaptcha",
				'url'			=> current_url()
			);
			$this->Mlog->insert($data_log);
			notif("Ups! Sepertinya anda robot", "e");
		}
		redirect('admin/login','refresh');
	}

	public function logout(){
		$this->load->model('Mlog');
		$data_log = array(
			'ip_address'	=> ip(),
			'browser'		=> $_SERVER['HTTP_USER_AGENT'],
			'keterangan'	=> admin()->nama_admin." keluar dari sistem admin",
			'url'			=> current_url()
		);
		$this->Mlog->insert($data_log);
		$this->session->unset_userdata(array('id_admin'));
		notif("Sampai jumpa lagi :)", "i");
		redirect('admin/login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */