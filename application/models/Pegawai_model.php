<?php

class Pegawai_model extends CI_Model
{
    private $_table = "pegawai";

    public function viewPegawai()
    {
        return $this->db->get($this->_table)->result_array();
    } //untuk menampilkan seluruh data pegawai

    public function tambahPegawai()
    {
        $post = $this->input->post();
        $data = array(
            'nip' => $this->input->post('nip', true),
            'nama' => $this->input->post('nama', true),
            'gol' => $this->input->post('gol', true),
            'divisi' => $this->input->post('divisi', true),
            'level' => $this->input->post('level', true),
            'role' => $this->input->post('role', true),
            'username' => $this->input->post('username', true),
            'password' => $this->input->post('password', true),
            'ttd' => $this->input->post('ttd', true)
        );

        if ($post['password'] !== '') {
            $data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
        }
        $this->db->insert($this->_table, $data);
    } //menambahkan pegawai ke database

    public function hapus($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete($this->_table);
    } //menghapus pegawai dari database

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_user' => $id])->row_array();
    } //mengambil data pegawai berdasarkan id

    public function ubahPegawai($id)
    {
        $post = $this->input->post();
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'gol' => $this->input->post('gol'),
            'divisi' => $this->input->post('divisi'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
            'role' => $this->input->post('role'),
            'ttd' => $this->input->post('ttd')
        );
        console_log($data);
        if ($post['password'] !== '') {
            $data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
        }
        //mengubah data pegawai
        $this->db->where('id_user', $id);
        $this->db->update($this->_table, $data);
    }

    public function ubahProfil($id)
    {
        $post = $this->input->post();
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'gol' => $this->input->post('gol'),
            'divisi' => $this->input->post('divisi'),
            'password' => $this->input->post('password'),
            'username' => $this->input->post('username'),
            'level' => $this->input->post('level'),
            'role' => $this->input->post('role'),
            'ttd' => $this->input->post('ttd')
        );
        console_log($data);
        if ($post['password'] !== '') {
            $data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
        }
        //mengubah data pegawai secara personal
        $this->db->where('id_user', $id);
        $this->db->update($this->_table, $data);
    }

    public function find_by($field, $value, $return = FALSE)
    {
        $this->db->where($field, $value);
        $data = $this->db->get('pegawai');
        if ($return) {
            return $data->row();
        }
        return $data;
    } //mencari data berdasarkan inputan tertentu
}
