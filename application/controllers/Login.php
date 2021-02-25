<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        //is_login(true);
    }
    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $this->load->model('Pegawai_model');
        $this->load->view('login');
        $this->load->model('Pegawai_model', 'pegawai');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $check = $this->pegawai->find_by('username', $username, false);
        if ($check->num_rows() == 1) {
            $user_data = $check->row();
            $verify_password = password_verify($password, $user_data->password);

            if ($verify_password) {
                $this->set_session($user_data);
                redirect('dashboard');
            } else {
                $this->error('Login gagal! <br>Password tidak sesuai');
            }
        } else {
            $this->error('Login gagal! <br>User tidak ditemukan');
        }
        redirect('login/');
    }

    private function error($msg)
    {
        $this->session->set_flashdata('error', $msg);
    }

    private function set_session($user_data)
    {
        $this->session->set_userdata([
            'id_user' => $user_data->id_user,
            'nama' => $user_data->nama,
            'nip' => $user_data->nip,
            'jabatan' => $user_data->jabatan,
            'gol' => $user_data->gol,
            'username' => $user_data->username,
            'divisi' => $user_data->divisi,
            'level' => $user_data->level,
            'role' => $user_data->role,
            'is_login' => true
        ]);

        $this->session->set_flashdata('response', [
            'status' => 'success',
            'message' => 'Selamat Datang ' . $user_data->nama
        ]);
    }

    private function detail_data()
    {
        $id_user = $this->session->id_user;
        $data['pegawaix'] = $this->pegawai->find($id_user);
        return $data;
    }
}
