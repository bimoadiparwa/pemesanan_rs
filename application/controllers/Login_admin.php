<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->helper(array('form', 'url'));
    } 
	public function index()
	{
		$this->load->view('admin/login/login');
	}
	public function login(){
		$email = $this->input->post('email');
		$pass  = md5($this->input->post('password'));

		$cek = $this->Login_model->cek_login($email, $pass);

		if($cek->num_rows() > 0)
		{
			foreach ($cek->result() as $atr) {
				$sess['id_admin'] 	= $atr->id_admin;
				$sess['nama'] 		= $atr->nama;
				$sess['email'] 		= $atr->email;
				$sess['status'] 	= 'adminlogin';

				$this->session->set_userdata($sess);
				redirect('welcome');
			}
		}
		else
		{
			redirect('login_admin');
		}
	}
	public function logout(){
		session_destroy();
		redirect('login_admin','refresh');
	}
}
