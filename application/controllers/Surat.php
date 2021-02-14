<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jayapura');

class Surat extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        is_login();
		$this->load->model('Surat_model');
    }

	public function index()
	{
		$this->load->view('surat');
	}

	public function dasu()
	{
	//	$this->load->model('Surat_model', 'surat');

		$data['surat'] = $this->Surat_model->viewSurat();

        $this->load->view('dasu', $data);
	
	}






	
	public function kembali($id)
	{
		$this->load->model('Surat_model', 'surat');
	 
	  $data['surat'] = $this->Surat_model->getById($id);

	  $this->surat->ubahSurat($id, $data);

	  redirect('surat/dasu');

	}

	public function store()
	{
		$this->load->model('Surat_model', 'surat');
		$validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('id_user', 'id_user', 'required');
        $validation->set_rules('jam_berangkat', 'jam_berangkat', 'required');
        $validation->set_rules('jam_kembali', 'jam_kembali', 'required');
        $validation->set_rules('kegiatan', 'kegiatan', 'required');
      //  $validation->set_rules('jabatan', 'jabatan', 'required');
        $validation->set_rules('pejabat', 'pejabat', 'required');

	
        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->surat->tambahSurat();
			redirect('surat/dasu');
        } else {
          
          redirect('surat');
        }


	}

}
