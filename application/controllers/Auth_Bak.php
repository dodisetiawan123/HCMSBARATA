<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(['url', 'language']);
		date_default_timezone_set('Asia/Jakarta');
	}

	//Login
	public function login()
	{
		$this->load->view('login');
	}


}
