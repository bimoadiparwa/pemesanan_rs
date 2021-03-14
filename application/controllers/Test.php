<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Autofill_model');
	}
	public function index()
	{
		$data['poli']	= $this->Autofill_model->get_poli_query();
		$this->load->view('admin/layout/test', $data);
	}
	public function get_autofill()
	{
		$id_poli = $this->input->post('id_poli');
		$dokter	 = $this->Autofill_model->get_dokter_query($id_poli);
		if (count($dokter) > 0) {
		 	$pro_select_box = '';
		 	$pro_select_box .= '<option value="">Pilih Dokter</option>';
		 	foreach ($dokter as $d) {
		 		$pro_select_box .= '<option value="'.$d->id_dokter.'">'.$d->nama_dokter.'</option>';
		 	}
		 	echo json_encode($pro_select_box);
		}
	}
}