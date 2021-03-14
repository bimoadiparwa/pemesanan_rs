<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$s = $this->session->userdata('status');
        if($s != "pasienlogin"){ redirect("login_pasien"); }
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Pemesanan_model');
        $this->load->model('Dokter_model');
        $this->load->model('Pasien_model');
        $this->load->model('Poli_model');
        $this->load->model('Waktu_model');

	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data['pemesanan'] = $this->Pemesanan_model->tampil()->result();
		$this->load->view('user/user/history',$data);
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file History.php */
/* Location: ./application/controllers/History.php */
