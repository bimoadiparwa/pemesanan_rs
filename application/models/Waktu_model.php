<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Waktu_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil()
    {
        $query = $this->db->get('waktu');

        return $query;
    }
    function get_waktu($id_waktu)
    {
        return $this->db->get_where('waktu',array('id_waktu'=>$id_waktu))->row_array();
    }
        
    /*
     * Get all waktu
     */
    function get_all_waktu()
    {
        $this->db->order_by('id_waktu', 'desc');
        return $this->db->get('waktu')->result_array();
    }
        
    /*
     * function to add new waktu
     */
    function add_waktu($params)
    {
        $this->db->insert('waktu',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update waktu
     */
    function update_waktu($id_waktu,$params)
    {
        $this->db->where('id_waktu',$id_waktu);
        return $this->db->update('waktu',$params);
    }
    
    /*
     * function to delete waktu
     */
    function delete_waktu($id_waktu)
    {
        return $this->db->delete('waktu',array('id_waktu'=>$id_waktu));
    }
}