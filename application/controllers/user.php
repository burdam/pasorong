<?php

class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_login();
    $this->load->model('User_model', 'user');
  }

  public function index()
  {
    $id_user = $this->session->id_user;
    $data['pegawai'] = $this->user->find_by('id_user', $id_user, true);
    $this->load->view('profil', $data);
  }


  public function edit_profil()
  {
      $post = $this->input->post();
      $data = [
          'nip' => $post['nip'],
          'nama' => $post['nama'],
          'gol' => $post['gol'],
          'divisi' => $post['divisi'],
          'username' => $post['username'],
      ];

      if ($post['password'] !== '') {
          $data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
      }

      $result = $this->user->update_data($this->session->id_user, $data);
      if ($result) {
          $response = [
              'status' => 'success',
              'message' => 'Profil berhasil diubah!'
          ];
      } else {
          $response = [
              'status' => 'error',
              'message' => 'Profil gagal diubah!'
          ];
      }

      $this->session->set_flashdata('response', $response);
      redirect('user');
      
  }


}
