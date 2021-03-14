<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hal_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $s = $this->session->userdata('status');
        
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Pemesanan_model');
        $this->load->model('Dokter_model');
        $this->load->model('Pasien_model');
        $this->load->model('Poli_model');
        $this->load->model('Waktu_model');
        $this->load->model('Autofill_model');

	}

	// List all your items
	public function index()
	{
		$data['title'] = 'X-Malang Hospital';
		$data['poli'] = $this->Poli_model->tampil()->result();
		$data['pasien'] = $this->Pasien_model->tampil()->result();
		$data['pemesanan'] = $this->Pemesanan_model->tampil()->result();
		$data['waktu'] = $this->Waktu_model->tampil()->result();
		$data['dokter'] = $this->Dokter_model->tampil()->result();
		$data['poli']	= $this->Autofill_model->get_poli_query();

		$this->load->view('user/user/nav',$data);
		$this->load->view('user/user/content',$data);
		$this->load->view('user/user/slider');
		$this->load->view('user/user/about');
		$this->load->view('user/user/footer',$data);
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
	public function tambah_pasien()
	{
		
		$this->Pasien_model->simpan();
		redirect('login_pasien','refresh');
	}
	

	// Add a new item

	public function add()
	{
		$this->Pemesanan_model->simpan();
		redirect('hal_user/');
	}

	
	//Update one ite,
	/*function edit($id = null)
    {   
        // Cek sebelum mengedit
        $data['title'] = "Update Data Pasien";
        $data['pasien'] = $this->Pasien_model->get_pasien($id_pasien);
        
        if(isset($data['pasien']['id_pasien']))
        {
            //memanggil library form validasi
            $this->load->library('form_validation');
            
            //memberi aturan form
			$this->form_validation->set_rules('password','Password','required|min_length[6]');
			$this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
			$this->form_validation->set_rules('ttl_pasien','Tanggal Lahir','required');
			$this->form_validation->set_rules('jk_pasien','Jenis Kelamin','required');
			$this->form_validation->set_rules('no_telp','No.Telp','required|max_length[13]');
			$this->form_validation->set_rules('alamat','Alamat','required');
			$this->form_validation->set_rules('email','Email','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'jk_pasien' => $this->input->post('jk_pasien'),
					'password' => $this->input->post('password'),
					'nama_pasien' => $this->input->post('nama_pasien'),
					'ttl_pasien' => $this->input->post('ttl_pasien'),
					'no_telp' => $this->input->post('no_telp'),
					'email' => $this->input->post('email'),
					'alamat' => $this->input->post('alamat'),
                );

                $this->Pasien_model->update_pasien($id_pasien,$params);            
                redirect('profile/index');
            }
            else
            {
                $data['_view'] = 'hal_user/edit';
                $this->load->view('user/user/edit', $data);
            }
        }
        else
            show_error('The pasien you are trying to edit does not exist.');
    } 

	//Delete one item
	public function delete( $id = NULL )
	{

	}*/
}

/* End of file Hal_user.php */
/* Location: ./application/controllers/Hal_user.php */
