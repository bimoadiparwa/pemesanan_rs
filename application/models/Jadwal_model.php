<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Jadwal_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function add_jadwal($params)
    {
        $this->db->insert('jadwal',$params);
        return $this->db->insert_id();
    }

    public function tampil()
    {
        $this->db->select('*');
            $this->db->from('jadwal');
            $this->db->join('dokter', 'dokter.id_dokter = jadwal.id_dokter');

        $query = $this->db->get();

        return $query;
    }

    public function searchJadwal()
    {
            $keyword = $this->input->post('keyword',true);
            $this->db->select('*');
            $this->db->from('jadwal');
            $this->db->join('dokter', 'dokter.id_dokter = jadwal.id_dokter');
            $this->db->like('nama_dokter',$keyword);

        $query = $this->db->get()->result();

        return $query;
    }
    


}