<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autofill_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}	
	public function get_poli_query()
	{
		$query = $this->db->get('poli');
		return $query->result();
	}
	public function get_dokter_query($id_poli)
	{
		$query = $this->db->get_where('dokter', array('id_poli' => $id_poli ));
		return $query->result();
	}
}