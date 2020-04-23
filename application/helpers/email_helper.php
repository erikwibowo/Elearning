<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('send_email')){
	function send_email($data){
		// ini_set("SMTP","ssl:smtp.gmail.com" );
		// ini_set("smptp_port", 465);
		$ci =& get_instance();
		$ci->load->model('Memail_config');
		$mail_config = $ci->Memail_config->read_where(array('aktif' => 1))->row();
		// Konfigurasi email
        

        $ci = get_instance();
	    $ci->load->library('email');
	    $config['protocol'] = $mail_config->protocol;
	    $config['smtp_host'] = $mail_config->host;
	    $config['smtp_port'] = $mail_config->port;
	    $config['smtp_user'] = $mail_config->email;
	    $config['smtp_pass'] = $mail_config->password;
	    $config['charset'] = "utf-8";
	    $config['mailtype'] = "html";
	    $config['newline'] = "\r\n";
	    $ci->email->initialize($config);
	    $ci->email->from('no-reply@ebphtbpekalongankab.com', 'BPKD | Kab. Pekalongan');
	    $list = array($data['email_to']);
	    $ci->email->to($list);
	    $ci->email->subject($data['subject']);
	    $ci->email->message($data['message']);

        // Tampilkan pesan sukses atau error
        if ($ci->email->send()) {
            notif($data['notif']." berhasil", 's');
        } else {
            notif($data['notif']." gagal", 'e');
        }
	}

	
}