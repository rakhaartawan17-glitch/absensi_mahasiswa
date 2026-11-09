<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('User_model');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_all();
        $this->load->view('template/header');
        $this->load->view('mahasiswa_view', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->User_model->get_all();
        $this->load->view('template/header');
        $this->load->view('tambah_mahasiswa', $data);
        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'kelas' => $this->input->post('kelas'),
            'id_user' => $this->session->userdata('id_user')
        ];
        $this->Mahasiswa_model->insert($data);
        redirect('mahasiswa');
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_by_id($id);
        $data['user'] = $this->User_model->get_all();
        $this->load->view('template/header');
        $this->load->view('edit_mahasiswa', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_mahasiswa');
        $mhs = $this->Mahasiswa_model->get_by_id($id);
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'kelas' => $this->input->post('kelas'),
            'id_user' => $mhs->id_user 
        ];
        $this->Mahasiswa_model->update($id, $data);
        redirect('mahasiswa');
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->delete($id);
        redirect('mahasiswa');
    }
}
