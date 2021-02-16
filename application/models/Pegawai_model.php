<?php

class Pegawai_model extends CI_Model
{
    private $_table = "pegawai";

    public function viewPegawai()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function tambahPegawai()
    {
        $data = array(
            'nip' => $this->input->post('nip', true),
            'nama' => $this->input->post('nama', true),
            'gol' => $this->input->post('gol', true),
            'divisi' => $this->input->post('divisi', true)
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

    public function hapus($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_user' => $id])->row_array();
    }

    public function ubahPegawai($id)
    {

        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'gol' => $this->input->post('gol'),
            'divisi' => $this->input->post('divisi')
        );
        console_log($data);

        //cari id berdasarkan id yang ada dalam inputan
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
    }
}
