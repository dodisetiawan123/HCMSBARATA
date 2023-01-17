<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dashboard_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    
     public function get_gender()
    {
     	$this->db->select('count(case when jeniskelamin="LK" then 1 end) as male_cnt, count(case when jeniskelamin="PR" then 1 end) as female_cnt, count(*) as total_cnt');
        $this->db->from('md_karyawan');

        $query=$this->db->get();
        return $query->row_array();  
    }

     public function get_pendidikan()
    {
        $this->db->select('count(case when levelpendidikan="SD" then 1 end) as sd_cnt, count(case when levelpendidikan="SMP" then 1 end) as smp_cnt, count(case when levelpendidikan="SMA" then 1 end) as sma_cnt, count(case when levelpendidikan="SMK" then 1 end) as smk_cnt, count(case when levelpendidikan="Diploma 1" then 1 end) as d1_cnt, count(case when levelpendidikan="Diploma 2" then 1 end) as d2_cnt, count(case when levelpendidikan="Diploma 3" then 1 end) as d3_cnt, count(case when levelpendidikan="Diploma 4" then 1 end) as d4_cnt, count(case when levelpendidikan="Sarjana 1" then 1 end) as s1_cnt, count(case when levelpendidikan="Sarjana 2" then 1 end) as s2_cnt, count(*) as total_cnt');
        $this->db->from('mk_pendidikan');

        $query=$this->db->get();
        return $query->row_array();  
    }

    
     
}
