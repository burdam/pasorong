<?php

class Pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
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

        $validation->set_rules('nip', 'NIP', 'required');
        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('gol', 'Gol', 'required');
        $validation->set_rules('divisi', 'Unit Kerja', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('tambah');
        } else {
          $this->Pegawai_model->tambahPegawai();
          redirect('pegawai');
        }
      }

      public function hapus($id)
      {
        $this->Pegawai_model->hapus($id);
        redirect('pegawai');
      }

      public function ubah($id)
      {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['pegawai'] = $this->Pegawai_model->getById($id);

        $validation->set_rules('nip', 'NIP', 'required');
        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('gol', 'Gol', 'required');
        $validation->set_rules('divisi', 'Divisi', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('ubah', $data);
        } else {
            $this->Pegawai_model->ubahPegawai();
            redirect('pegawai');
        }
      }
    }
