<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_organisasi_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function get_organisasi()
    {
        
        $this->db->select('md_organisasi.idmd_organisasi,md_organisasi.kodeorganisasi, md_organisasi.idmd_organisasi as id,namaorganisasi,IFNULL(SUM(standard), 0) as standard,(SELECT COUNT(idmk_jabatan) FROM mk_jabatan where idmd_organisasi = id) as actual');
        $this->db->from('md_organisasi');
        $this->db->join('md_bidang', 'md_bidang.idmd_organisasi = md_organisasi.idmd_organisasi', 'left' );
        $this->db->join('md_jabatan', 'md_bidang.idmd_bidang = md_jabatan.idmd_bidang', 'left' );
        $this->db->where('md_bidang.deleted', '0');
        $this->db->group_by("idmd_organisasi");
        $query=$this->db->get();
        return $query->result();
    }

    public function insertorganisasi($data)
    {
        $this->db->insert('md_organisasi', $data);
        
    }

     public function hapusorganisasi($idmd_organisasi)
    {
        $data = array(
                    'deleted' => '1',
            );

        $this->db->where('idmd_organisasi', $idmd_organisasi);
        $this->db->update('md_organisasi', $data);
        
    }
    public function get_namaorg($idmd_organisasi)
    {
        $this->db->select('md_organisasi.kodeorganisasi,namaorganisasi');
        $this->db->from('md_organisasi');
        $this->db->where('md_organisasi.idmd_organisasi', $idmd_organisasi);
        $query=$this->db->get();
        return $query->row_array();
    }

    public function get_bidang($idmd_organisasi)
    {
        $this->db->select('idmd_bidang,idmd_bidang as id,kodebidang,namabidang,namaorganisasi,(SELECT IFNULL(SUM(standard), 0) FROM md_jabatan where idmd_bidang = id) as standard,(SELECT COUNT(idmk_jabatan) FROM mk_jabatan where idmd_bidang = id) as "actual"');
        $this->db->from('md_bidang');
        $this->db->join('md_organisasi', 'md_organisasi.idmd_organisasi = md_bidang.idmd_organisasi', 'left' );
        $this->db->where('md_bidang.deleted', '0');
        $this->db->where('md_organisasi.idmd_organisasi', $idmd_organisasi);
        $query=$this->db->get();
        return $query->result();
    }
    
     
}
