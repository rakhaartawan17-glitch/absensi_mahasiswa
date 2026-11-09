<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('absensi')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('absensi', $data);
    }

    public function insert_batch($data)
    {
        return $this->db->insert_batch('absensi', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_absensi', $id);
        return $this->db->delete('absensi');
    }

    public function count_all()
    {
        return $this->db->get('absensi')->num_rows();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('absensi', ['id_absensi' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id_absensi', $id);
        return $this->db->update('absensi', $data);
    }
}
