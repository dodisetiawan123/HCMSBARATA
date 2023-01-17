<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->model('data_karyawan_model');
		$this->load->model('data_renumerasi_model');
		$this->load->model('data_organisasi_model');
		$this->load->model('data_dashboard_model');
		$this->load->model('data_bidang_model');
		$this->load->model('data_bagian_model');
		$this->load->model('data_jabatan_model');
		$this->load->helper(['url', 'language']);
		date_default_timezone_set('Asia/Jakarta');
	}

	//DASHBOARD
	public function dashboard()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{

		//$this->data['karyawan'] = $this->data_karyawan_model->get_karyawan();
		$this->data['count_pendidikan'] = $this->data_dashboard_model->get_pendidikan();
		$this->data['count_gender'] = $this->data_dashboard_model->get_gender();
		$this->load->view('dashboard', $this->data);

		}
	}

	//RENUMERASI
	public function renumerasi()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
			$this->data['grade'] = $this->data_renumerasi_model->get_renumerasi();
			$this->load->view('matrik_grade', $this->data);
		}
	}


	//ORGANISASI
	public function satuan_organisasi()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->data['organisasi'] = $this->data_organisasi_model->get_organisasi();
		$this->load->view('satuan_organisasi', $this->data);
		}
	}

	public function insertorganisasi()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$data = array(
				'kodeorganisasi' => strtoupper($this->input->post('kodeorganisasi')),
				'namaorganisasi' => ucwords($this->input->post('namaorganisasi'))
			);
		$this->data_organisasi_model->insertorganisasi($data);
		$this->session->set_flashdata('done', 'Data berhasil tersimpan');
		redirect('admin/satuan_organisasi', 'refresh');
		}

		
	}

	public function hapus_satuan($idmd_organisasi)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		
		$this->data_organisasi_model->hapusorganisasi($idmd_organisasi);
		$this->session->set_flashdata('done', 'Data berhasil diupdate');
		redirect('admin/satuan_organisasi', 'refresh');

		}
	}


	public function detail_organisasi($idmd_organisasi)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->data['namaorganisasi'] = $this->data_organisasi_model->get_namaorg($idmd_organisasi);
		$this->data['bidang'] = $this->data_organisasi_model->get_bidang($idmd_organisasi);
		$this->load->view('detail_organisasi', $this->data);
		}
	}




	//BIDANG
	public function bidang()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->data['bidang'] = $this->data_bidang_model->get_bidang();
		$this->data['organisasi'] = $this->data_bidang_model->get_organisasi();
		$this->load->view('bidang_organisasi', $this->data);
		}
	}

	public function insertbidang()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$data = array(
				'kodebidang' => strtoupper($this->input->post('kodebidang')),
				'namabidang' => ucwords($this->input->post('namabidang')),
				'idmd_organisasi' => $this->input->post('idmd_organisasi')
			);

		$this->data_bidang_model->insertbidang($data);
		$this->session->set_flashdata('done', 'Data berhasil tersimpan');
		redirect('admin/bidang', 'refresh');
		}
		
	}

	public function hapus_bidang($idmd_bidang)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->data_bidang_model->hapusbidang($idmd_bidang);
		$this->session->set_flashdata('done', 'Data berhasil diupdate');
		redirect('admin/bidang', 'refresh');
		}
		
	}

	public function detail_bidang($idmd_bidang)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->data['namabidang'] = $this->data_bidang_model->get_namabdg($idmd_bidang);
		$this->data['jabatan'] = $this->data_bidang_model->get_jabatan($idmd_bidang);
		$this->load->view('detail_bidang', $this->data);
		}
	}




	//BAGIAN
	public function bagian()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->data['bagian'] = $this->data_bagian_model->get_bagian();
		$this->data['organisasi'] = $this->data_bagian_model->get_organisasi();
		$this->load->view('bagian_organisasi', $this->data);
		}
	}

	public function insertbagian()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$data = array(
				'kodebagian' => strtoupper($this->input->post('kodebagian')),
				'namabagian' => ucwords($this->input->post('namabagian')),
				'idmd_bidang' => $this->input->post('idmd_bidang')
			);

		$this->data_bagian_model->insertbagian($data);
		redirect('admin/bagian', 'refresh');
		}
		
	}


	//JABATAN
	public function jabatan()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->data['jabatan'] = $this->data_jabatan_model->get_jabatan();
		// var_dump($this->data['jabatan']);
		// exit;
		$this->data['organisasi'] = $this->data_jabatan_model->get_organisasi();
		$this->load->view('jabatan_organisasi', $this->data);
		}
	}

	public function jbtpersonil($idmd_jabatan)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->data['jabatan'] = $this->data_jabatan_model->get_namajbt($idmd_jabatan);
		$this->data['personaldata'] = $this->data_jabatan_model->get_personil($idmd_jabatan);
		$this->load->view('jabatan_personil', $this->data);
		}
	}

	public function insertjabatan()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$data = array(
				'namajabatan' => ucwords($this->input->post('namajabatan')),
				'kodejabatan' => $this->input->post('kodejabatan'),
				'standart' => $this->input->post('standart'),
				'idmd_bidang' => $this->input->post('idmd_bidang')
			);

		$this->data_jabatan_model->insertjabatan($data);
		$this->session->set_flashdata('done', 'Data berhasil tersimpan');
		redirect('admin/jabatan', 'refresh');
		}
		
	}

	public function hapus_jabatan($idmd_jabatan)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->data_jabatan_model->hapusjabatan($idmd_jabatan);
		$this->session->set_flashdata('done', 'Data berhasil diupdate');
		redirect('admin/jabatan', 'refresh');
		}
	}

	public function struktur()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->load->view('struktur_organisasi');
		}
	}

	//PROYEK
	public function master_proyek()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->load->view('dashboard');
		}
	}

	public function jabatan_proyek()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		$this->load->view('dashboard');
		}
	}

	//Data Karyawan
	public function data_karyawan()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
			$this->data['karyawan'] = $this->data_karyawan_model->get_karyawan();
			$this->data['level'] = $this->data_karyawan_model->get_level();
			$this->data['grade'] = $this->data_karyawan_model->get_grade();
			$this->data['organisasi'] = $this->data_karyawan_model->get_organisasi();
			$this->load->view('list_karyawan', $this->data);
		}
	}

	public function insertdata()
	{
		
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{

			$data_md_karyawan = array(
				'npk' => $this->input->post('npk'),
				'idmd_marital' => $this->input->post('idmd_marital'),
				'nama' => $this->input->post('nama'),
				'tempatlahir' => $this->input->post('tempatlahir'),
				'tgllahir' => $this->input->post('tgllahir'),
				'jeniskelamin' => $this->input->post('jeniskelamin'),
				'agama' => $this->input->post('agama'),
				'nik' => $this->input->post('nik'),
				'alamatsekarang' => $this->input->post('alamatsekarang'),
				'nohp' => $this->input->post('nohp'),
				'email' => $this->input->post('email'),
				'mulaibekerja' => $this->input->post('mulaibekerja'),
				'tgldiangkat' => $this->input->post('tgldiangkat')
			);
			$data_mk_pendidikan = array(
				'npk' => $this->input->post('npk'),
				'levelpendidikan' => $this->input->post('levelpendidikan'),
				'jurusan' => $this->input->post('jurusan'),
				'institusi' => $this->input->post('institusi'),
				'tahunlulus' => $this->input->post('tahunlulus')
			);
			$data_mk_jabatan = array(
				'idmd_jabatan' => $this->input->post('idmd_jabatan'),
				'npk' => $this->input->post('npk'),
				'idmd_bidang' => $this->input->post('idmd_bidang'),
				'idmd_organisasi' => $this->input->post('idmd_organisasi'),
				'idmd_level' => $this->input->post('idmd_level'),
				'tglmulai' => $this->input->post('tglmulai'),
				'kategorifungsi' => $this->input->post('kategorifungsi'),
				'statusjabatan' => $this->input->post('statusjabatan')
			);
			$data_mk_renumerasi = array(
				'idmd_grade' => $this->input->post('idmd_grade'),
				'npk' => $this->input->post('npk'),
				'tgldiangkat' => $this->input->post('tgldiangkatgrade'),
				'ub_gajipokokkonversi' => $this->input->post('ub_gajipokokkonversi'),
				'ub_tunjkesejahteraankonversi' => $this->input->post('ub_tunjkesejahteraankonversi'),
				'ub_tunjperalihanupahpokok' => $this->input->post('ub_tunjperalihanupahpokok'),
				'ub_tunjperalihanjabatan' => $this->input->post('ub_tunjperalihanjabatan'),
				'ub_tunjperalihan' => $this->input->post('ub_tunjperalihan'),
				'ub_tunjjabatan' => $this->input->post('ub_tunjjabatan'),
				'ub_upahpokokberlaku' => $this->input->post('ub_upahpokokberlaku'),
				'uf_gajipokokkonversi' => $this->input->post('uf_gajipokokkonversi'),
				'uf_tunjkesejahteraankonversi' => $this->input->post('uf_tunjkesejahteraankonversi'),
				'uf_tunjperalihanupahpokok' => $this->input->post('uf_tunjperalihanupahpokok'),
				'uf_tunjperalihanjabatan' => $this->input->post('uf_tunjperalihanjabatan'),
				'uf_tunjperalihan' => $this->input->post('uf_tunjperalihan'),
				'uf_tunjjabatan' => $this->input->post('uf_tunjjabatan'),
				'uf_upahpokokberlaku' => $this->input->post('uf_upahpokokberlaku'),
				'uf_tunjpenyesuaian' => $this->input->post('uf_tunjpenyesuaian'),
				'statuskeaktifan' => $this->input->post('statuskeaktifan'),
				'statusdirumahkan' => $this->input->post('statusdirumahkan'),
				'batchdirumahkan' => $this->input->post('batchdirumahkan'),
				'tgldirumahkan' => $this->input->post('tgldirumahkan'),
				'aktivitasobsolete' => $this->input->post('aktivitasobsolete'),
				'aktivitas2022' => $this->input->post('aktivitas2022'),
				'subaktivitas' => $this->input->post('subaktivitas'),
				'statuskepegawaian' => $this->input->post('statuskepegawaian'),
				'tekniknonteknik' => $this->input->post('tekniknonteknik'),
				'golpend' => $this->input->post('golpend')
			);

			$this->data_karyawan_model->insertmdkaryawan($data_md_karyawan);
			$this->data_karyawan_model->insertmkpendidikan($data_mk_pendidikan);
			$this->data_karyawan_model->insertmkjabatan($data_mk_jabatan);	
			$this->data_karyawan_model->insertmkrenumerasi($data_mk_renumerasi);	

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('admin/data_karyawan');

		}
	}


	public function apiupdatedata($npk)
	{
		
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{

			$data_md_karyawan = array(
				'idmd_marital' => $this->input->post('idmd_marital'),
				'nama' => $this->input->post('nama'),
				'tempatlahir' => $this->input->post('tempatlahir'),
				'tgllahir' => $this->input->post('tgllahir'),
				'jeniskelamin' => $this->input->post('jeniskelamin'),
				'agama' => $this->input->post('agama'),
				'nik' => $this->input->post('nik'),
				'alamatsekarang' => $this->input->post('alamatsekarang'),
				'nohp' => $this->input->post('nohp'),
				'email' => $this->input->post('email'),
				'mulaibekerja' => $this->input->post('mulaibekerja'),
				'tgldiangkat' => $this->input->post('tgldiangkat')
			);
			$data_mk_pendidikan = array(
				'levelpendidikan' => $this->input->post('levelpendidikan'),
				'jurusan' => $this->input->post('jurusan'),
				'institusi' => $this->input->post('institusi'),
				'tahunlulus' => $this->input->post('tahunlulus')
			);
			$data_mk_jabatan = array(
				'statusjabatan' => $this->input->post('statusjabatan'),
			);

			$this->data_karyawan_model->updatemdkaryawan($data_md_karyawan,$npk);
			$this->data_karyawan_model->updatemkpendidikan($data_mk_pendidikan,$npk);
			$this->data_karyawan_model->updatemkjabatan($data_mk_jabatan,$npk);

		}
	}







	public function updatedata($npk)
	{
		
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{

			$data_md_karyawan = array(
				'npk' => $this->input->post('npk'),
				'idmd_marital' => $this->input->post('idmd_marital'),
				'nama' => $this->input->post('nama'),
				'tempatlahir' => $this->input->post('tempatlahir'),
				'tgllahir' => $this->input->post('tgllahir'),
				'jeniskelamin' => $this->input->post('jeniskelamin'),
				'agama' => $this->input->post('agama'),
				'nik' => $this->input->post('nik'),
				'alamatsekarang' => $this->input->post('alamatsekarang'),
				'nohp' => $this->input->post('nohp'),
				'email' => $this->input->post('email'),
				'mulaibekerja' => $this->input->post('mulaibekerja'),
				'tgldiangkat' => $this->input->post('tgldiangkat')
			);
			$data_mk_pendidikan = array(
				'npk' => $this->input->post('npk'),
				'levelpendidikan' => $this->input->post('levelpendidikan'),
				'jurusan' => $this->input->post('jurusan'),
				'institusi' => $this->input->post('institusi'),
				'tahunlulus' => $this->input->post('tahunlulus')
			);
			$data_mk_jabatan = array(
				'idmd_jabatan' => $this->input->post('idmd_jabatan'),
				'npk' => $this->input->post('npk'),
				'idmd_bidang' => $this->input->post('idmd_bidang'),
				'idmd_organisasi' => $this->input->post('idmd_organisasi'),
				'idmd_level' => $this->input->post('idmd_level'),
				'tglmulai' => $this->input->post('tglmulai'),
				'kategorifungsi' => $this->input->post('kategorifungsi'),
				'statusjabatan' => $this->input->post('statusjabatan')
			);
			$data_mk_renumerasi = array(
				'idmd_grade' => $this->input->post('idmd_grade'),
				'npk' => $this->input->post('npk'),
				'tgldiangkat' => $this->input->post('tgldiangkatgrade'),
				'ub_gajipokokkonversi' => $this->input->post('ub_gajipokokkonversi'),
				'ub_tunjkesejahteraankonversi' => $this->input->post('ub_tunjkesejahteraankonversi'),
				'ub_tunjperalihanupahpokok' => $this->input->post('ub_tunjperalihanupahpokok'),
				'ub_tunjperalihanjabatan' => $this->input->post('ub_tunjperalihanjabatan'),
				'ub_tunjperalihan' => $this->input->post('ub_tunjperalihan'),
				'ub_tunjjabatan' => $this->input->post('ub_tunjjabatan'),
				'ub_upahpokokberlaku' => $this->input->post('ub_upahpokokberlaku'),
				'uf_gajipokokkonversi' => $this->input->post('uf_gajipokokkonversi'),
				'uf_tunjkesejahteraankonversi' => $this->input->post('uf_tunjkesejahteraankonversi'),
				'uf_tunjperalihanupahpokok' => $this->input->post('uf_tunjperalihanupahpokok'),
				'uf_tunjperalihanjabatan' => $this->input->post('uf_tunjperalihanjabatan'),
				'uf_tunjperalihan' => $this->input->post('uf_tunjperalihan'),
				'uf_tunjjabatan' => $this->input->post('uf_tunjjabatan'),
				'uf_upahpokokberlaku' => $this->input->post('uf_upahpokokberlaku'),
				'uf_tunjpenyesuaian' => $this->input->post('uf_tunjpenyesuaian'),
				'statuskeaktifan' => $this->input->post('statuskeaktifan'),
				'statusdirumahkan' => $this->input->post('statusdirumahkan'),
				'batchdirumahkan' => $this->input->post('batchdirumahkan'),
				'tgldirumahkan' => $this->input->post('tgldirumahkan'),
				'aktivitasobsolete' => $this->input->post('aktivitasobsolete'),
				'aktivitas2022' => $this->input->post('aktivitas2022'),
				'subaktivitas' => $this->input->post('subaktivitas'),
				'statuskepegawaian' => $this->input->post('statuskepegawaian'),
				'tekniknonteknik' => $this->input->post('tekniknonteknik'),
				'golpend' => $this->input->post('golpend')
			);

			$this->data_karyawan_model->updatemdkaryawan($data_md_karyawan,$npk);
			$this->data_karyawan_model->updatemkpendidikan($data_mk_pendidikan,$npk);
			$this->data_karyawan_model->updatemkjabatan($data_mk_jabatan,$npk);	
			$this->data_karyawan_model->updatemkrenumerasi($data_mk_renumerasi,$npk);	

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('admin/detail_karyawan/'.$this->input->post('npk'));

		}
	}

	public function detail_karyawan($npk)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		if (empty($npk)) {
			echo "Hayo mau ngapainnn";
			exit;
		}else{
			//$this->data['karyawan'] = $this->data_karyawan_model->get_karyawan();
			$this->data['level'] = $this->data_karyawan_model->get_level();
			$this->data['grade'] = $this->data_karyawan_model->get_grade();
			$this->data['organisasi'] = $this->data_karyawan_model->get_organisasi();
			$this->data['personaldata'] = $this->data_karyawan_model->getpersonaldata($npk);
			$this->data['riwayatjbt'] = $this->data_karyawan_model->getriwayatjbt($npk);
			$this->load->view('detail_karyawan', $this->data);
		}
		}

		
	}

	

	public function kehadiran_karyawan($npk)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		if (empty($npk)) {
			echo "Hayo mau ngapainnn";
			exit;
		}else{
			$this->data['personaldata'] = $this->data_karyawan_model->getpersonaldata($npk);
			$this->load->view('kehadiran_karyawan', $this->data);
		}
		}
	}

	public function uploadfoto($npk)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		if (empty($npk)) {
			echo "Hayo mau ngapainnn";
			exit;
		}else{
			
			$config['upload_path']          = './image/';
            $config['allowed_types']        = 'jpg|jpeg';
            $config['encrypt_name']         = TRUE;
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('false', 'Data gagal tersimpan');
                    redirect('admin/detail_karyawan/'.$npk);
            }
            else
            {
                    $data = $this->upload->data();
                    $additional_data = array(
                        'file_foto'  => $data['file_name']
                    );
                	$this->data_karyawan_model->insert_filename($additional_data,$npk);
                	$this->session->set_flashdata('done', 'Data berhasil tersimpan');
                    redirect('admin/detail_karyawan/'.$npk);
            }
		}
		}
		
	}

	public function transferjabatan($npk)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		if (empty($npk)) {
			echo "Hayo mau ngapainnn";
			exit;
		}else{
			$startdate = $this->input->post('tglmulai');
			$oldjabatan = $this->data_karyawan_model->ambil_data($npk);
			$additional_data = array(
                        'npk'  => $oldjabatan['npk'],
                        'tglmulai'  => $oldjabatan['tglmulai'],
                        'idmd_organisasi'  => $oldjabatan['idmd_organisasi'],
                        'namaorganisasi'  => $oldjabatan['namaorganisasi'],
                        'idmd_bidang'  => $oldjabatan['idmd_bidang'],
                        'namabidang'  => $oldjabatan['namabidang'],
                        'idmd_jabatan'  => $oldjabatan['idmd_jabatan'],
                        'namajabatan'  => $oldjabatan['namajabatan'],
                        'idmd_level'  => $oldjabatan['idmd_level'],
                        'namalevel'  => $oldjabatan['namalevel'],
                        'statusjabatan'  => $oldjabatan['statusjabatan'],
                        'kategorifungsi'  => $oldjabatan['kategorifungsi'],
                        'keterangan'  => $this->input->post('keterangantrf'),
                        'tglberahir'  => date('Y-m-d',strtotime($startdate . "-1 days")),
                    );
			$this->data_karyawan_model->insert_riwayat($additional_data);


			$update_data = array(
                        'npk'  => $this->input->post('npktrf'),
                        'tglmulai'  => $this->input->post('tglmulai'),
                        'idmd_organisasi'  => $this->input->post('idmd_organisasitrf'),
                        'idmd_bidang'  => $this->input->post('idmd_bidangtrf'),
                        'idmd_jabatan'  => $this->input->post('idmd_jabatantrf'),
                        'idmd_level'  => $this->input->post('idmd_leveltrf'),
                        'statusjabatan'  => $this->input->post('statusjabatantrf'),
                        'kategorifungsi'  => $this->input->post('kategorifungsitrf')
                    );

			$this->data_karyawan_model->update_jabatan($update_data,$npk);
			$this->session->set_flashdata('done', 'Data berhasil tersimpan');
			redirect('admin/detail_karyawan/'.$npk);
			
		}
		}
		
	}

}
