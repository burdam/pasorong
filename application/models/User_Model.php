<?php
defined('BASEPATH') or die('No direct script access allowed');

class User_Model extends CI_Model
{
    public function find_by($field, $value, $return = FALSE)
    {
        $this->db->where($field, $value);
        $data = $this->db->get('pegawai');
        if ($return) {
            return $data->row();
        }
        return $data;
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->update('pegawai', $data);
        return $result;
    }

    public function get_pejabat($level, $role)
    {
        $this->db->where('level', $level);
        $this->db->where('role', $role);
        $result = $this->db->get('pegawai');
        return $result->row();
    }
}
