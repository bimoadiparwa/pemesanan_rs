<?php

class Welcome extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
       	$s = $this->session->userdata('status');
    	if($s != "adminlogin"){ redirect("login_admin"); }
    } 

	public function index()
	{
		$data['admin'] = $this->login_model->tampil()->result();

		$this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/layout/content');
		$this->load->view('admin/layout/footer');
	}
}
