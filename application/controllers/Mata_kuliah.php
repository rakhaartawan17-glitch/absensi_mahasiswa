<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mata_kuliah extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mata_kuliah_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['mata_kuliah'] = $this->Mata_kuliah_model->get_all();
        $this->load->view('template/header');
        $this->load->view('mata_kuliah_view', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_mata_kuliah');
        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $data = [
            'kode_mk' => $this->input->post('kode_mk'),
            'nama_mk' => $this->input->post('nama_mk'),
            'jumlah_pertemuan' => $this->input->post('jumlah_pertemuan')
        ];

        $this->Mata_kuliah_model->insert($data);
        redirect('mata_kuliah');
    }

    public function edit($id)
    {
        $data['mk'] = $this->Mata_kuliah_model->get_by_id($id);
        $this->load->view('template/header');
        $this->load->view('edit_mata_kuliah', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_mk');

        $data = [
            'kode_mk' => $this->input->post('kode_mk'),
            'nama_mk' => $this->input->post('nama_mk'),
            'jumlah_pertemuan' => $this->input->post('jumlah_pertemuan')
        ];

        $this->Mata_kuliah_model->update($id, $data);
        redirect('mata_kuliah');
    }

    public function hapus($id)
    {
        $this->Mata_kuliah_model->delete($id);
        redirect('mata_kuliah');
    }
}
