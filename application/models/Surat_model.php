<?php

class Surat_model extends CI_Model
{
    private $_table = "surat";

    public function viewSurat()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function tambahSurat2()
    {
        $now = date('y-m-d H:i:s');
        $data = array(
            'id_user' => $this->session->userdata('id_user'),
            'nip' => $this->session->userdata('nip'),
            'nama' => $this->session->userdata('nama'),
            'jam_berangkat' => $now,
            'jam_kembali' => $this->input->post('jam_kembali'),
            'kegiatan' => $this->input->post('kegiatan'),
            'pejabat' => $this->input->post('pejabat')
        );
        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

    public function tambahSurat()
    {
        $now = date('y-m-d H:i:s');
        $data = array(
            'id_user' => $this->session->userdata('id_user'),
            'nip' => $this->session->userdata('nip'),
            'nama' => $this->session->userdata('nama'),
            'jam_berangkat' => $now,
            'jam_kembali' => $this->input->post('jam_kembali'),
            'kegiatan' => $this->input->post('kegiatan'),
            'pejabat' => $this->input->post('pejabat'),
            'ttd' => $this->input->post('ttd'),
        );
        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_user' => $id])->row_array();
    }

    public function ubahSurat($id, $data)
    {
        $now = date('y-m-d H:i:s');
        $data = array(
            'jam_kembali' =>  $now,
        );
        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('id_surat', $id);
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

    public function getSurat($id)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->get('surat');
        return $result->result_array();
    }

    public function getPejabat($pejabat)
    {
        $this->db->where('pejabat', $pejabat);
        $result = $this->db->get('surat');
        return $result->result_array();
    }

    public function previewSurat($field, $id, $return = FALSE)
    {
        $this->db->where($field, $id);
        $data = $this->db->get('surat');
        if ($return) {
            return $data->row();
        }
        return $data;
    }
}
