<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
	public function index()
	{
		$data['title'] = "Profile";
		$data['pasien'] = $this->Pasien_model->tampil()->result();
		$this->load->view('user/user/profile', $data);
	}
	public function edit()
	{
	 	$data['pasien'] = $this->Pasien_model->tampil()->result();
		$this->load->view('user/user/edit',$data);
	}
	public function update($id_pasien = NULL)
	{
		$data['title'] = "Update Profile";
		$where = array('id_pasien' => $id_pasien);
		$data['pasien'] = $this->Pasien_model->get_one($id_pasien)->result();
		$this->load->view('user/user/edit',$data);	
	}
	public function update_data()
	{
		$gambar = $_FILES['gambar']['name'];

        if ($gambar = '') {}else{
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'png|jpeg|jpg|gif';
			
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Upload gambar gagal";
			}else{
				$gambar = $this->upload->data('file_name');
			}
        }
		$this->Pasien_model->update($gambar);

				$sess['id_pasien']		= $this->input->post('id_pasien');
				$sess['nama_pasien'] 	= $this->input->post('nama_pasien');
				$sess['ttl_pasien'] 	= $this->input->post('ttl_pasien');
				$sess['jk_pasien'] 		= $this->input->post('jk_pasien');
				$sess['alamat'] 		= $this->input->post('alamat');
				$sess['email'] 			= $this->input->post('email');
				$sess['no_telp'] 		= $this->input->post('no_telp');
				$sess['password'] 		= $this->input->post('password');
				$sess['gambar'] 		= $gambar = $this->upload->data('file_name');
		$this->session->set_userdata($sess);
		redirect('profile','refresh');
	}
    /* End of file Profile.php */ 
    /* Location: ./application/controllers/Profile.php */
    
	
	//Update one item
}
/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */
