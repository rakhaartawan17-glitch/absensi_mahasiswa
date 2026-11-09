<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('mahasiswa')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('mahasiswa', ['id_mahasiswa' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_mahasiswa', $id);
        return $this->db->update('mahasiswa', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_mahasiswa', $id);
        return $this->db->delete('mahasiswa');
    }

    public function count_all()
    {
        return $this->db->count_all('mahasiswa');
    }
}
