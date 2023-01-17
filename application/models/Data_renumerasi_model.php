<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_renumerasi_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

   public function get_renumerasi()
    {
        $this->db->select('idmd_grade,grade,gajipokok');
        $this->db->from('md_grade');

        $query=$this->db->get();
        return $query->result();
    }

    
     
}
