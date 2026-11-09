<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mata_kuliah_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('mata_kuliah')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('mata_kuliah', ['id_mk' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert('mata_kuliah', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_mk', $id);
        return $this->db->update('mata_kuliah', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_mk', $id);
        return $this->db->delete('mata_kuliah');
    }

    public function count_all()
    {
        return $this->db->count_all('mata_kuliah');
    }
}
