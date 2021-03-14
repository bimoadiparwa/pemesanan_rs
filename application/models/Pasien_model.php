<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function cek_login($e, $p){
        //exit(var_dump($e,$p));
        return $this->db->get_where('pasien', array('email' => $e , 'password' => $p ));
    }
    public function ambil_data($id_pasien)
    {
        $id_pasien = $this->session->userdata('id_pasien');
        $query = $this->db->query("SELECT * FROM pasien WHERE id_pasien = '$id_pasien'");
    }
    public function tampil()
    {
        $query = $this->db->get('pasien');
        //$tgl = $this->db->query('SELECT DATE_FORMAT(ttl_pasien, %d/%m/%Y) FROM pasien');
        return $query;
    }
    public function edit_data($where,$table){      
        return $this->db->get_where($table,$where);
    }
    public function get_one($id_pasien)
    {
        return $this->db->get_where('pasien', array('id_pasien' => $this->session->userdata('id_pasien')));
    }
   public function update()
    {
        $data = array(
            'id_pasien' => $this->session->userdata('id_pasien'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'ttl_pasien' => $this->input->post('ttl_pasien'),
            'jk_pasien' => $this->input->post('jk_pasien'),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            );
        $id = $this->session->userdata('id_pasien');

        //exit(var_dump($id));
        return $this->db->update('pasien', $data, array('id_pasien' => $id));

    }
    /*public function entry_update( $id_pasien ) {

                $this->db->select('*');
                $this->db->from('pasien');
                $this->db->where('id_pasien',$id_pasien );
                $query = $this->db->get();
                return $result = $query->row_array();

            }
    public function entry_update1($id_pasien, $data) {
            $data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            'ttl_pasien' => $this->input->post('ttl_pasien'),
            'jk_pasien' => $this->input->post('jk_pasien'),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            );
                 $this->db->where('id_pasien', $id_pasien);
                $this->db->update('pasien', $data);

            }
    /*public function edit_data($where, $table)
    {
        $query = $this->db->get_where($table, $where);

        return $query;
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }*/
    









    function get_pasien($id_pasien)
    {
        return $this->db->get_where('pasien',array('id_pasien'=>$id_pasien))->row_array();
    }
    
    /*
     * Get all pasien count
     */
    function get_all_pasien_count()
    {
        $this->db->from('pasien');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all pasien
     */
    function get_all_pasien($params = array())
    {
        $this->db->order_by('id_pasien', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('pasien')->result_array();
    }
        
    /*
     * function to add new pasien
     */
    function simpan()
    {      
            $params = array(
                'jk_pasien' => $this->input->post('jk_pasien'),
                'password' => md5($this->input->post('password')),
                'nama_pasien' => $this->input->post('nama_pasien'),
                'ttl_pasien' => $this->input->post('ttl_pasien'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
            );    
            
            return $this->db->insert('pasien',$params);
        }
    
    /*
     * function to update pasien
     */
    function update_pasien($id_pasien,$params)
    {
        $this->db->where('id_pasien',$id_pasien);
        return $this->db->update('pasien',$params);
    }
    
    /*
     * function to delete pasien
     */
    function delete_pasien($id_pasien)
    {
        return $this->db->delete('pasien',array('id_pasien'=>$id_pasien));
    }
}
