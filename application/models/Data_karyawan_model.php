<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_karyawan_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function get_karyawan()
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

        $query=$this->db->get();
        return $query->result();
    }

    public function getpersonaldata($npk)
    {
        $this->db->select('nama,md_karyawan.npk,tempatlahir,tgllahir,md_organisasi.namaorganisasi,md_bidang.namabidang,md_jabatan.namajabatan,jeniskelamin,agama,md_marital.deskripsi,nik,nohp,email,alamatsekarang,levelpendidikan,jurusan,institusi,golpend,tahunlulus,md_grade.idmd_grade,mk_renumerasi.tgldiangkat,ub_gajipokokkonversi,ub_tunjkesejahteraankonversi,ub_tunjperalihanupahpokok,ub_tunjperalihanjabatan,ub_tunjperalihan,ub_tunjjabatan,ub_upahpokokberlaku,uf_gajipokokkonversi,uf_tunjkesejahteraankonversi,uf_tunjperalihanupahpokok,uf_tunjperalihanjabatan,uf_tunjperalihan,uf_tunjjabatan,uf_upahpokokberlaku,uf_tunjpenyesuaian,statuskeaktifan,statusdirumahkan,batchdirumahkan,tgldirumahkan,aktivitasobsolete,aktivitas2022,subaktivitas,statuskepegawaian,tekniknonteknik,md_karyawan.idmd_marital,mulaibekerja,md_karyawan.tgldiangkat,mk_jabatan.idmd_organisasi,mk_jabatan.idmd_bidang,mk_jabatan.idmd_jabatan,md_level.namalevel,md_level.level,statusjabatan,mk_jabatan.tglmulai,kategorifungsi,mk_renumerasi.tgldiangkat as tgldiangkatgrade,ub_gajipokokkonversi,ub_tunjkesejahteraankonversi,ub_tunjperalihanupahpokok,ub_tunjperalihanjabatan,ub_tunjperalihan,ub_tunjjabatan,ub_upahpokokberlaku,uf_gajipokokkonversi,uf_tunjkesejahteraankonversi,uf_tunjperalihanupahpokok,uf_tunjperalihanjabatan,uf_tunjperalihan,uf_tunjjabatan,uf_upahpokokberlaku,uf_tunjpenyesuaian,md_grade.grade,gajipokok,md_level.idmd_level,md_karyawan.file_foto');
        $this->db->from('md_karyawan');
        $this->db->join('md_marital', 'md_marital.status = md_karyawan.idmd_marital', 'left' );
        $this->db->join('mk_pendidikan', 'mk_pendidikan.npk = md_karyawan.npk', 'left' );
        $this->db->join('mk_renumerasi', 'md_karyawan.npk = mk_renumerasi.npk', 'left' );
        $this->db->join('md_grade', 'md_grade.idmd_grade = mk_renumerasi.idmd_grade', 'left' );
        $this->db->join('mk_jabatan', 'mk_jabatan.npk = md_karyawan.npk', 'left' );
        $this->db->join('md_level', 'md_level.idmd_level = mk_jabatan.idmd_level', 'left' );
        $this->db->join('md_jabatan', 'mk_jabatan.idmd_jabatan = md_jabatan.idmd_jabatan', 'left' );
        $this->db->join('md_bidang', 'mk_jabatan.idmd_bidang = md_bidang.idmd_bidang', 'left' );
        $this->db->join('md_organisasi', 'mk_jabatan.idmd_organisasi = md_organisasi.idmd_organisasi', 'left' );
        $this->db->where('md_karyawan.npk', $npk);
        $query=$this->db->get();
        return $query->row_array();
    }
    

    public function get_organisasi()
    {
        $this->db->select('idmd_organisasi,kodeorganisasi,namaorganisasi');
        $this->db->from('md_organisasi');
        $query=$this->db->get();
        return $query->result();
    }

    public function get_level()
    {
        $this->db->select('idmd_level,level,namalevel');
        $this->db->from('md_level');
        $query=$this->db->get();
        return $query->result();
    }
     public function get_grade()
    {
        $this->db->select('idmd_grade,grade,gajipokok');
        $this->db->from('md_grade');
        $query=$this->db->get();
        return $query->result();
    }

  
    public function insertmdkaryawan($data_md_karyawan)
    {
         $this->db->insert('md_karyawan', $data_md_karyawan);
            
    }

    public function insertmkpendidikan($data_mk_pendidikan)
    {
         $this->db->insert('mk_pendidikan', $data_mk_pendidikan);
            
    }

    public function insertmkjabatan($data_mk_jabatan)
    {
         $this->db->insert('mk_jabatan', $data_mk_jabatan);
            
    }

    public function insertmkrenumerasi($data_mk_renumerasi)
    {
         $this->db->insert('mk_renumerasi', $data_mk_renumerasi);
            
    }



       public function updatemdkaryawan($data_md_karyawan,$npk)
    {
         $this->db->where('npk', $npk);
         $this->db->update('md_karyawan', $data_md_karyawan);
            
    }

    public function updatemkpendidikan($data_mk_pendidikan,$npk)
    {
         $this->db->where('npk', $npk);
         $this->db->update('mk_pendidikan', $data_mk_pendidikan);
            
    }

    public function updatemkjabatan($data_mk_jabatan,$npk)
    {
         $this->db->where('npk', $npk);
         $this->db->update('mk_jabatan', $data_mk_jabatan);
            
    }

    public function updatemkrenumerasi($data_mk_renumerasi,$npk)
    {
         $this->db->where('npk', $npk);
         $this->db->update('mk_renumerasi', $data_mk_renumerasi);
            
    }

    public function insert_filename($data,$npk)
    {
         $this->db->where('npk', $npk);
         $this->db->update('md_karyawan', $data);
            
    }

    public function insert_riwayat($data)
    {
         $this->db->insert('riwayat_jabatan', $data);
            
    }

     public function update_jabatan($data,$npk)
    {
         $this->db->where('npk', $npk);
         $this->db->update('mk_jabatan', $data);
            
    }
    public function ambil_data($npk)
    {
        $this->db->select('mk_jabatan.tglmulai,mk_jabatan.npk,mk_jabatan.idmd_organisasi,md_organisasi.namaorganisasi,mk_jabatan.idmd_bidang,md_bidang.namabidang,mk_jabatan.idmd_jabatan,md_jabatan.namajabatan,mk_jabatan.idmd_level,md_level.namalevel,statusjabatan,kategorifungsi');
        $this->db->from('mk_jabatan');
        $this->db->join('md_jabatan', 'mk_jabatan.idmd_jabatan = md_jabatan.idmd_jabatan', 'left' );
        $this->db->join('md_bidang', 'mk_jabatan.idmd_bidang = md_bidang.idmd_bidang', 'left' );
        $this->db->join('md_organisasi', 'mk_jabatan.idmd_organisasi = md_organisasi.idmd_organisasi', 'left' );
        $this->db->join('md_level', 'md_level.idmd_level = mk_jabatan.idmd_level', 'left' );
        $this->db->where('mk_jabatan.npk', $npk);
        $query=$this->db->get();
        return $query->row_array();
    }
    public function getriwayatjbt($npk)
    {
        $this->db->select('tglmulai,timestamp,namajabatan,tglberahir');
        $this->db->from('riwayat_jabatan');
        $this->db->where('riwayat_jabatan.npk', $npk);
        $this->db->order_by('id_riwayat_jabatan', 'DESC');
        $query=$this->db->get();
        return $query->result_array();
    }

    
     
}
