<?php 
class Login_model extends CI_Model
{	
	public function __construct()
	{
		parent::__construct();
		$this->db->get('admin');
	}
	function cek_login($e, $p){
		return $this->db->get_where('admin', array('email' => $e , 'password' => $p ));
	}
	public function tampil()
    {
        $query = $this->db->get('admin');
        return $query;
    }
}