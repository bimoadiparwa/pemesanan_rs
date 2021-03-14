<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Poli extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Poli_model');
        $this->load->helper(array('form', 'url'));
            $s = $this->session->userdata('status');
        if($s != "adminlogin"){ redirect("login_admin"); }
    } 

    /*
     * Listing of poli
     */
    function index()
    {
        $data['title'] = 'Data Poli';
        $data['poli'] = $this->Poli_model->tampil()->result();
        $this->load->model('login_model');
        $data['login'] = $this->login_model->tampil()->result();
        

        $this->load->view('admin/layout/nav',$data);
		$this->load->view('admin/poli/list', $data);
		$this->load->view('admin/layout/footer');   
    }

    /*
     * Adding a new poli
     */
    private function uploadGambar(){
            $config['upload_path']          = './assets/upload/';
            $config['allowed_types']        = 'gif|jpg|png|svg';
            $config['overwrite']            = true;
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                return $this->upload->data('file_name');
            }
            return "default.jpg";
    }
    function add()
    {   

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_poli','Nama Poli','required',
        array('required' => 'Nama Poli harus diisi.'));
		$this->form_validation->set_rules('lokasi_poli','Lokasi Poli','required',
        array('required' => 'Lokasi Poli harus diisi.'));
        if($this->form_validation->run())     
        {   
            $nama_poli   = $this->input->post('nama_poli');
            $lokasi_poli = $this->input->post('lokasi_poli');
            $gambar      = $this->uploadGambar();

            $params = array(
				'nama_poli'     => $nama_poli,
				'lokasi_poli'   => $lokasi_poli,
                'gambar'        => $gambar,
            );
            
            $id_poli = $this->Poli_model->add_poli($params);
            redirect('poli/index');
        }
        else
        {   
            $data['title'] = "Tambah Poli";         
            $data['_view'] = 'poli/add';
            $this->load->view('admin/layout/nav',$data);
            $this->load->view('admin/poli/add', $data);
            $this->load->view('admin/layout/footer'); 
        }
    }  

    /*
     * Editing a poli
     */
    function edit($id_poli)
    {   
        // check if the poli exists before trying to edit it
        $data['title'] = "Update Poli";
        $data['poli'] = $this->Poli_model->get_poli($id_poli);
        
        if(isset($data['poli']['id_poli']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('nama_poli','Nama Poli','required');
			$this->form_validation->set_rules('lokasi_poli','Lokasi Poli','required');
		
			if($this->form_validation->run())     
            {   
                $ret =  $this->db->query('SELECT gambar from poli where id_poli = ?',array($id_poli))->row_array();
                unlink('./assets/upload/' . $ret['gambar']);
                $nama_poli   = $this->input->post('nama_poli');
                $lokasi_poli = $this->input->post('lokasi_poli');
                $old_gambar      = $this->uploadGambar();

                $params = array(
					'nama_poli' => $nama_poli,				
                    'lokasi_poli' => $lokasi_poli,
                    'gambar'    => $old_gambar,

                );

                $this->Poli_model->update_poli($id_poli,$params);            
                redirect('poli/index');
            }
            else
            {
                $data['_view'] = 'poli/edit';
                $this->load->view('admin/layout/nav',$data);
                $this->load->view('admin/poli/edit', $data);
                $this->load->view('admin/layout/footer');   
            }
        }
        else
            show_error('The poli you are trying to edit does not exist.');
    } 

    /*
     * Deleting poli
     */
    function remove($id_poli)
    {
        $poli = $this->Poli_model->get_poli($id_poli);

        // check if the poli exists before trying to delete it
        if(isset($poli['id_poli']))
        {
            $this->Poli_model->delete_poli($id_poli);
            redirect('poli/index');
        }
        else
            show_error('The poli you are trying to delete does not exist.');
    }
    
}
