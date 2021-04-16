<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jayapura');

class Surat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Surat_model');
		$this->load->model('User_Model');
	}

	public function index()
	{
		$level_user = $this->session->userdata('level');
		$role_user = $this->session->userdata('role');

		if ($role_user == "staff") {
			$role = "spv";
			$data['pejabat'] =  $this->User_model->get_pejabat($level_user, $role);
		} else {
			$ketua = "1";
			$role = "mgr";
			$data['pejabat'] =  $this->User_model->get_pejabat($ketua, $role);
		}
		$this->load->view('surat', $data);
	}

	public function dasu()
	{
		$data['surat'] = $this->Surat_model->viewSurat();
		$this->load->view('dasu', $data);
	}

	public function darisu()
	{
		$id = $this->session->id_user;
		$data['surat'] = $this->Surat_model->getSurat($id);
		$this->load->view('darisu', $data);
	}

	public function darisulvl()
	{
		$pejabat = $this->session->userdata('nama');
		$data['surat'] = $this->Surat_model->getPejabat($pejabat);
		$this->load->view('darisulvl', $data);
	}

	public function kembali($id)
	{
		$this->load->model('Surat_model', 'surat');
		$data['surat'] = $this->Surat_model->getById($id);
		$this->surat->ubahSurat($id, $data);
		redirect('surat/darisu');
	}

	public function store()
	{
		$level_user = $this->session->userdata('level');
		$role_user = $this->session->userdata('role');

		if ($role_user == "staff") {
			$role = "spv";
			$pejabat =  $this->User_model->get_pejabat($level_user, $role);
		} else {
			$ketua = "1";
			$role = "mgr";
			$pejabat =  $this->User_model->get_pejabat($ketua, $role);
		}

		$this->load->model('Surat_model', 'surat');
		$validation = $this->form_validation; //untuk menghemat penulisan kode
		$validation->set_rules('id_user', 'id_user', 'required');
		$validation->set_rules('nip', 'nip', 'required');
		$validation->set_rules('nama', 'nama', 'required');
		$validation->set_rules('jam_berangkat', 'jam_berangkat', 'required');
		$validation->set_rules('jam_kembali', 'jam_kembali', 'required');
		$validation->set_rules('kegiatan', 'kegiatan', 'required');
		$validation->set_rules('pejabat', 'pejabat', 'required');

		if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
		{
			$this->surat->tambahSurat($pejabat);
			redirect('surat/darisu');
		} else {
			redirect('surat');
		}
	}

	public function cetak($id)
	{
		$this->load->model('Surat_model', 'surat');
		$data['surat'] = $this->Surat_model->previewSurat('id_surat', $id, true);
		//$this->load->view('cetaksurat', $data);

		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->setFileName = "laporan-surat-izin.pdf";
		$this->pdf->load_view('cetaksurat', $data);
	}
}
