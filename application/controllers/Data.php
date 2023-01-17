<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
	}

	//Bidang
	public function getbidang()
	{
		header('Content-Type:application/json');
		header('Access-Control-Allow-Origin: *');
		$id   = $this->input->post('id');
		$data = $this->db->query("SELECT * FROM md_bidang WHERE idmd_organisasi='$id'")->result();
		echo json_encode($data);
	}

	//Jabatan
	public function getjabatan()
	{
		header('Content-Type:application/json');
		header('Access-Control-Allow-Origin: *');
		$id   = $this->input->post('id');
		$data = $this->db->query("SELECT * FROM md_jabatan WHERE idmd_bidang='$id'")->result();
		echo json_encode($data);
	}

	//Jabatan
	public function ceknpk()
	{
		header('Content-Type:application/json');
		header('Access-Control-Allow-Origin: *');
		$npk   = $this->input->post('npk');
		$data = $this->db->query("SELECT npk FROM md_karyawan WHERE npk='$npk'")->result();
		echo json_encode($data);
	}

}
