<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_bidang_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function get_bidang()
    {
        $this->db->select('idmd_bidang,idmd_bidang as id,kodebidang,namabidang,namaorganisasi,(SELECT IFNULL(SUM(standard), 0) FROM md_jabatan where idmd_bidang = id) as standard,(SELECT COUNT(idmk_jabatan) FROM mk_jabatan where idmd_bidang = id) as "actual"');
        $this->db->from('md_bidang');
        $this->db->join('md_organisasi', 'md_organisasi.idmd_organisasi = md_bidang.idmd_organisasi', 'left' );
        $this->db->where('md_bidang.deleted', '0');
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
    
    public function insertbidang($data)
    {
        $this->db->insert('md_bidang', $data);
        
    }

     public function hapusbidang($idmd_bidang)
    {
        $data = array(
                    'deleted' => '1',
            );

        $this->db->where('idmd_bidang', $idmd_bidang);
        $this->db->update('md_bidang', $data);
        
    }

     public function get_jabatan($idmd_bidang)
    {
        $this->db->select('md_organisasi.kodeorganisasi,md_bidang.kodebidang,idmd_jabatan,idmd_jabatan as id,kodejabatan,namajabatan,standard,(SELECT COUNT(idmk_jabatan) FROM mk_jabatan where idmd_jabatan = id) as "actual"');
        $this->db->from('md_jabatan');
        $this->db->join('md_bidang', 'md_bidang.idmd_bidang = md_jabatan.idmd_bidang');
        $this->db->join('md_organisasi', 'md_organisasi.idmd_organisasi = md_bidang.idmd_organisasi');
        $this->db->where('md_jabatan.idmd_bidang', $idmd_bidang);
        $this->db->where('md_jabatan.deleted', '0');
        $query=$this->db->get();
        return $query->result();
    }

    public function get_namabdg($idmd_bidang)
    {
        $this->db->select('md_organisasi.kodeorganisasi,md_bidang.kodebidang,namaorganisasi,namabidang');
        $this->db->from('md_bidang');
        $this->db->join('md_organisasi', 'md_organisasi.idmd_organisasi = md_bidang.idmd_organisasi');
        $this->db->where('md_bidang.idmd_bidang', $idmd_bidang);
        $query=$this->db->get();
        return $query->row_array();
    }
    
     
}
