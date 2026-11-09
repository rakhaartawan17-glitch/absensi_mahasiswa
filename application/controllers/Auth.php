<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login_view');
    }

    public function login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $data_user = $this->User_model->get_by_username($user);

        if ($data_user && $pass == $data_user->password) {

            $this->session->set_userdata([
                'id_user'   => $data_user->id_user,
                'username'  => $data_user->username,
                'logged_in' => TRUE   
            ]);

        redirect('dashboard');

        } else {
            $this->session->set_flashdata('pesan_error', 'Username / Password Salah!');
            redirect('auth');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
