<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_jabatan_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function get_jabatan()
    {
        $this->db->select('md_organisasi.kodeorganisasi,md_bidang.kodebidang,idmd_jabatan,idmd_jabatan as id,kodejabatan,namajabatan,standard,(SELECT COUNT(idmk_jabatan) FROM mk_jabatan where idmd_jabatan = id) as "actual"');
        $this->db->from('md_jabatan');
        $this->db->join('md_bidang', 'md_bidang.idmd_bidang = md_jabatan.idmd_bidang');
        $this->db->join('md_organisasi', 'md_organisasi.idmd_organisasi = md_bidang.idmd_organisasi');
        $this->db->where('md_jabatan.deleted', '0');
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
    
    public function insertjabatan($data)
    {
        $this->db->insert('md_jabatan', $data);
        
    }

     public function hapusjabatan($idmd_jabatan)
    {
        $data = array(
                    'deleted' => '1',
            );

        $this->db->where('idmd_jabatan', $idmd_jabatan);
        $this->db->update('md_jabatan', $data);
        
    }

     public function get_personil($idmd_jabatan)
    {
        $this->db->select('nama,md_karyawan.npk,md_organisasi.namaorganisasi,md_bidang.namabidang,md_jabatan.namajabatan,md_karyawan.alamatsekarang,md_karyawan.jeniskelamin,md_marital.deskripsi,nik,nohp,email,alamatsekarang,levelpendidikan,jurusan,institusi,tahunlulus,tempatlahir,md_karyawan.mulaibekerja,md_karyawan.tgldiangkat,mk_jabatan.statusjabatan,mk_jabatan.tglmulai as tmt_jabatan,md_karyawan.idmd_marital,md_karyawan.tgllahir,md_karyawan.agama,kategorifungsi,mk_jabatan.idmd_level,md_level.level,md_level.namalevel');
        $this->db->from('md_karyawan');
        $this->db->join('mk_jabatan', 'mk_jabatan.npk = md_karyawan.npk', 'left' );
        $this->db->join('md_jabatan', 'mk_jabatan.idmd_jabatan = md_jabatan.idmd_jabatan', 'left' );
        $this->db->join('md_bidang', 'mk_jabatan.idmd_bidang = md_bidang.idmd_bidang', 'left' );
        $this->db->join('md_organisasi', 'mk_jabatan.idmd_organisasi = md_organisasi.idmd_organisasi', 'left' );
        $this->db->join('md_marital', 'md_marital.status = md_karyawan.idmd_marital', 'left' );
        $this->db->join('md_level', 'md_level.idmd_level = mk_jabatan.idmd_level', 'left' );
        $this->db->join('mk_pendidikan', 'mk_pendidikan.npk = md_karyawan.npk', 'left' );
        $this->db->where('mk_jabatan.idmd_jabatan', $idmd_jabatan);

        $query=$this->db->get();
        return $query->result();
    }

    public function get_namajbt($idmd_jabatan)
    {
        $this->db->select('md_organisasi.kodeorganisasi,md_bidang.kodebidang,md_jabatan.kodejabatan,namajabatan,namaorganisasi,namabidang');
        $this->db->from('md_jabatan');
        $this->db->join('md_bidang', 'md_bidang.idmd_bidang = md_jabatan.idmd_bidang');
        $this->db->join('md_organisasi', 'md_organisasi.idmd_organisasi = md_bidang.idmd_organisasi');
        $this->db->where('md_jabatan.idmd_jabatan', $idmd_jabatan);
        $query=$this->db->get();
        return $query->row_array();
    }
    
     
}
