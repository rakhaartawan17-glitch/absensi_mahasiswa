<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rekap_model');
    }

    public function index()
    {
        $data['rekap'] = $this->Rekap_model->get_all();

        $this->load->view('template/header');
        $this->load->view('rekap_view', $data);
        $this->load->view('template/footer');
    }
}

