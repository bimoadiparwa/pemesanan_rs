<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$s = $this->session->userdata('status');
		$this->load->helper('url');
        if($s != "adminlogin"){ redirect("login_admin"); }  
        $this->load->helper('form');
        $this->load->model('Pemesanan_model');
        $this->load->model('Dokter_model');
        $this->load->model('Pasien_model');
        $this->load->model('Poli_model');
        $this->load->model('History_model');
        $this->load->model('Waktu_model');

	}

	public function index()
	{   $data['title'] = "History Pemesanan";
		$data['history'] = $this->History_model->tampil_reservasi();
		$this->load->view('admin/layout/nav',$data);
		$this->load->view('user/user/history_reservasi',$data);
		$this->load->view('admin/layout/footer',$data);
	}

	// Add a new item
	public function add($id)
	{
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('dokter','dokter.id_dokter=pemesanan.id_dokter');
        $this->db->join('pasien','pasien.id_pasien=pemesanan.id_pasien');
        $this->db->join('poli','poli.id_poli=pemesanan.id_poli');
        $this->db->join('waktu','waktu.id_waktu=pemesanan.id_waktu')->where('id_pemesanan',$id);
        
        $query = $this->db->get()->result_array();
        foreach ($query as $key ) {
                
            }
        
            $nama_pasien = $key['nama_pasien'];
            $nama_dokter = $key['nama_dokter'];
            $nama_poli = $key['nama_poli'];
            $tanggal = $key['tanggal'];
            $waktu = $key['waktu'];
            
	        $params = array(
				'nama_pasien' => $nama_pasien,
				'nama_dokter' => $nama_dokter,
				'nama_poli' => $nama_poli,
				'tanggal' => $tanggal,
				'waktu' => $waktu,
            );
            $this->History_model->simpan($params);

            redirect('reservasi/');
	}

	//Update one item
    public function admbilId( $nama )
	{
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('dokter','dokter.id_dokter=pemesanan.id_dokter');
        $this->db->join('pasien','pasien.id_pasien=pemesanan.id_pasien');
        $this->db->join('poli','poli.id_poli=pemesanan.id_poli');
        $this->db->join('waktu','waktu.id_waktu=pemesanan.id_waktu')->where('pasien.nama_pasien',$nama);
        
        $query = $this->db->get();
        echo var_dump($query);

	}
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
