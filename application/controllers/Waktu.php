<?php
class Waktu extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Waktu_model');
        $this->load->helper(array('form', 'url'));
            $s = $this->session->userdata('status');
        if($s != "adminlogin"){ redirect("login_admin"); }
    } 

    /*
     * Listing of waktu
     */
    function index()
    {
        $data['title'] = 'Data Waktu';
        $data['waktu'] = $this->Waktu_model->tampil()->result();
        $this->load->model('login_model');
        $data['login'] = $this->login_model->tampil()->result();
        

        $this->load->view('admin/layout/nav',$data);
        $this->load->view('admin/waktu/list', $data);
        $this->load->view('admin/layout/footer');   
    }
    function add()
    {   
        $this->load->library('form_validation');
        $this->form_validation->set_rules('waktu','Waktu','required',
        array('required' => 'Waktu harus diisi !'));
        
        if($this->form_validation->run())     
        {   
            $params = array(
                'waktu' => $this->input->post('waktu'),
            );
            
            $waktu_id = $this->Waktu_model->add_waktu($params);
            redirect('waktu/');
        }
        else
        {            
            $data['title'] = 'Tambah Waktu';
            $data['_view'] = 'waktu/add';
            $this->load->view('admin/layout/nav',$data);
            $this->load->view('admin/waktu/add', $data);
            $this->load->view('admin/layout/footer');
        }
    }  

    /*
     * Editing a waktu
     */
    function edit($id_waktu)
    {   
        // check if the waktu exists before trying to edit it
        $data['waktu'] = $this->Waktu_model->get_waktu($id_waktu);
        
        if(isset($data['waktu']['id_waktu']))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('hari','Hari','required');
            $this->form_validation->set_rules('waktu','Waktu','required');
        
            if($this->form_validation->run())     
            {   
                $params = array(
                    'hari' => $this->input->post('hari'),
                    'waktu' => $this->input->post('waktu'),
                );

                $this->Waktu_model->update_waktu($id_waktu,$params);            
                redirect('waktu/index');
            }
            else
            {
                $data['title'] = 'Edit Waktu';
                $data['_view'] = 'waktu/edit';
                $this->load->view('admin/layout/nav',$data);
                $this->load->view('admin/waktu/edit', $data);
                $this->load->view('admin/layout/footer');
            }
        }
        else
            show_error('The waktu you are trying to edit does not exist.');
    } 

    /*
     * Deleting waktu
     */
    function remove($id_waktu)
    {
        $waktu = $this->Waktu_model->get_waktu($id_waktu);

        // check if the waktu exists before trying to delete it
        if(isset($waktu['id_waktu']))
        {
            $this->Waktu_model->delete_waktu($id_waktu);
            redirect('waktu/index');
        }
        else
            show_error('The waktu you are trying to delete does not exist.');
    }
}