<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umum extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Pemesanan_model');
        $this->load->model('Dokter_model');
        $this->load->model('Pasien_model');
        $this->load->model('Poli_model');
        $this->load->model('Waktu_model');
    } 

	public function index()
	{

		$data['title'] 		= 'X-Malang Hospital';
		$data['poli']		= $this->Poli_model->tampil()->result();
		$data['pasien'] 	= $this->Pasien_model->tampil()->result();
		$data['pemesanan'] 	= $this->Pemesanan_model->tampil()->result();
		$data['waktu'] 		= $this->Waktu_model->tampil()->result();
		$data['dokter'] 	= $this->Dokter_model->tampil()->result();
		

		$this->load->view('user/layout/nav',$data);
		$this->load->view('user/layout/content',$data);
		$this->load->view('user/layout/slider');
		$this->load->view('user/layout/about');
		if($this->session->userdata('status') == 'pasienlogin'){
			$this->load->view('user/user/footer',$data);
		} else {
			$this->load->view('user/layout/footer');
		}
		
	}
	  
}
