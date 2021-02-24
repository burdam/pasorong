<?php

class Pegawai extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_login();
    $this->load->model('Pegawai_model');
  }

  public function index()
  {
    $data['pegawai'] = $this->Pegawai_model->viewPegawai();
    $this->load->view('pegawai', $data);
  }

  public function tambah()
  {
    $validation = $this->form_validation; //untuk menghemat penulisan kode

    $test =    $validation->set_rules('nip', 'NIP', 'required');
    console_log($test);
    $validation->set_rules('nama', 'Nama', 'required');
    $validation->set_rules('gol', 'Gol', 'required');
    $validation->set_rules('divisi', 'Unit Kerja', 'required');

    if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
    {
      $this->load->view('tambah');
    } else {
      $this->Pegawai_model->tambahPegawai();
      redirect('pegawai');
    }
  }

  public function hapus($id_user)
  {
    $this->Pegawai_model->hapus($id_user);
    redirect('pegawai');
  }

  private function detail_data()
  {
    $id_user = $this->session->id_user;
    $data['pegawaix'] = $this->pegawai->find($id_user);
    return $data;
  }

  public function ubah($id)
  {
    $validation = $this->form_validation; //untuk menghemat penulisan kode
    $data['pegawai'] = $this->Pegawai_model->getById($id);

    $test = $validation->set_rules('divisi', 'Divisi', 'required');
    console_log($test);
    $validation->set_rules('nip', 'NIP', 'required');
    $validation->set_rules('nama', 'Nama', 'required');
    $validation->set_rules('gol', 'Gol', 'required');

    if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
    {
      $this->load->view('ubah', $data);
    } else {
      $this->Pegawai_model->ubahPegawai($id);
      redirect('pegawai');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    session_destroy();
    redirect('login');
  }

  public function update($id)
  {
    $validation = $this->form_validation; //untuk menghemat penulisan kode
    $data['pegawai'] = $this->Pegawai_model->getById($id);

    $test = $validation->set_rules('divisi', 'Divisi', 'required');
    console_log($test);
    $validation->set_rules('nip', 'NIP', 'required');
    $validation->set_rules('nama', 'Nama', 'required');
    $validation->set_rules('gol', 'Gol', 'required');
    $validation->set_rules('password', 'Password', 'required');

    if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
    {
      $this->load->view('ubah', $data);
    } else {
      $this->Pegawai_model->ubahProfil($id);
      redirect('pegawai');
    }
  }
}
