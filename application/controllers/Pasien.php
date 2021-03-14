<?php

class Pasien extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
        $this->load->model('Pasien_model');

        $s = $this->session->userdata('status');
        if($s != "adminlogin"){ redirect("login_admin"); }
    } 

    /*
     * Listing of pasien
     */
    function index()
    {
        $data['title'] = 'Data Pasien';
        $data['pasien'] = $this->Pasien_model->tampil()->result();
        $this->load->model('login_model');
        $data['login'] = $this->login_model->tampil()->result();
        
        $this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/pasien/list', $data);
		$this->load->view('admin/layout/footer');   
    }

    /*
     * Adding a new pasien
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('conf-password','Password','required|matches[password]');
		$this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
		$this->form_validation->set_rules('ttl_pasien','Ttl Pasien','required');
		$this->form_validation->set_rules('jk_pasien','Jk Pasien','required');
		$this->form_validation->set_rules('no_telp','No Telp','max_length[13]');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[pasien.email]');
		
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
            
            $pasien_id = $this->Pasien_model->add_pasien($params);
            redirect('pasien/index');
        }
        else
        {            
            $data['_view'] = 'pasien/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pasien
     */
    function edit($id_pasien)
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
                redirect('pasien/index');
            }
            else
            {
                $data['_view'] = 'pasien/edit';
                $this->load->view('admin/layout/nav');
                $this->load->view('admin/pasien/edit',$data);
                $this->load->view('admin/layout/footer');
            }
        }
        else
            show_error('The pasien you are trying to edit does not exist.');
    } 
    /*
     * Deleting pasien
     */
    function remove($id_pasien)
    {
        $pasien = $this->Pasien_model->get_pasien($id_pasien);

        // check if the pasien exists before trying to delete it
        if(isset($pasien['id_pasien']))
        {
            $this->Pasien_model->delete_pasien($id_pasien);
            redirect('pasien/index');
        }
        else
            show_error('The pasien you are trying to delete does not exist.');
    }
    
}
