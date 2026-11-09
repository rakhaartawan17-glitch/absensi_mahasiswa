<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_all()
    {
        return $this->db->get('user')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('user', ['id_user' => $id])->row();
    }

    public function get_by_username($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row();
    }

}
