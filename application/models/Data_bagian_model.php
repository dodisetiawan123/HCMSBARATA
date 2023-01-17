<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_bagian_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function get_bagian()
    {
        $this->db->select('idmd_bagian,kodebagian,namabagian,namabidang,namaorganisasi');
        $this->db->from('md_bagian');
        $this->db->join('md_bidang', 'md_bidang.idmd_bidang = md_bagian.idmd_bidang', 'left' );
        $this->db->join('md_organisasi', 'md_organisasi.idmd_organisasi = md_bidang.idmd_organisasi', 'left' );
        $query=$this->db->get();
        return $query->result();
    }

    public function get_organisasi()
    {
        $this->db->select('idmd_organisasi,kodeorganisasi,namaorganisasi');
        $this->db->from('md_organisasi');
        $query=$this->db->get();
        return $query->result();
    }
    public function get_bidang()
    {
        $this->db->select('idmd_bidang,kodebidang,namabidang');
        $this->db->from('md_bidang');
        $query=$this->db->get();
        return $query->result();
    }
    
    public function insertbagian($data)
    {
        $this->db->insert('md_bagian', $data);
        
    }
    
     
}
