<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pasien_model');
        $this->load->helper(array('form', 'url'));

	}

	// List all your items
	public function index()
	{
		$data['title'] = 'Update Profile';
		$this->load->view('user/user/edit',$data);
	}


	public function upload(){
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png|svg';
		$config['overwrite']            = true;
		$config['max_size']             = 2048;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('avatar')) {
			return $this->upload->data('file_name');
		}
		
		return redirect('Edit_profile/');
	}
	public function do_upload()
        {
			$config['upload_path']          = './assets/upload/';
			$config['allowed_types']        = 'gif|jpg|png|svg';
			$config['overwrite']            = true;
			$config['max_size']             = 2048;
			
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());


                        $this->load->view('user/user/edit', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('user/user/edit', $data);
                }
        }


	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{
		$data['pasien'] = $this->Pasien_model->tampil()->result();
		$this->Pasien_model->update();
        $this->load->view('user/user/edit',$data);
	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Edit_profile.php */
/* Location: ./application/controllers/Edit_profile.php */
