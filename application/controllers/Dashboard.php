<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Mata_kuliah_model');
    }

    public function index()
    {
        $data['jumlah_siswa']   = $this->Mahasiswa_model->count_all();
        $data['jumlah_matkul']  = $this->Mata_kuliah_model->count_all();

        $this->load->view('template/header');
        $this->load->view('dashboard_view', $data);
        $this->load->view('template/footer');
    }
}
