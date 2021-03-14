<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pasien extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->helper(array('form', 'url'));
    } 
	public function index()
	{
		if($this->session->userdata('status')== 'pasienlogin'){
			redirect('hal_user');
		} else {
			$this->load->view('user/login/login');
		}
		
	}
	public function login()
	{
		
		$email = $this->input->post('email');
		$pass  = md5($this->input->post('password'));

		$cek = $this->Pasien_model->cek_login($email, $pass);

		if($cek->num_rows() > 0)
		{
			foreach ($cek->result() as $atr) {
					$sess['id_pasien']		= $atr->id_pasien;
					$sess['nama_pasien'] 	= $atr->nama_pasien;
					$sess['ttl_pasien'] 	= $atr->ttl_pasien;
					$sess['jk_pasien'] 		= $atr->jk_pasien;
					$sess['alamat'] 		= $atr->alamat;
					$sess['email'] 			= $atr->email;
					$sess['no_telp'] 		= $atr->no_telp;
					$sess['password'] 		= $atr->password;
					$sess['status'] 		= 'pasienlogin';

				$this->session->set_userdata($sess);
				
				redirect('hal_user');
			}
		}
		else
		{
			redirect('login_pasien');
		}
	}
	public function logout(){
		session_destroy();
		redirect('umum','refresh');
	}

}
