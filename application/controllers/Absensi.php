<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Absensi_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Mata_kuliah_model');
    }

    public function index()
{
    $data['absensi'] = $this->db->query("
        SELECT absensi.*, mahasiswa.nama AS nama_mahasiswa, mata_kuliah.nama_mk AS nama_mk
        FROM absensi
        LEFT JOIN mahasiswa ON mahasiswa.id_mahasiswa = absensi.id_mahasiswa
        LEFT JOIN mata_kuliah ON mata_kuliah.id_mk = absensi.id_mk
        ORDER BY mahasiswa.nama ASC, mata_kuliah.nama_mk ASC, absensi.pertemuan_ke ASC
    ")->result();

    $this->load->view('template/header');
    $this->load->view('absensi_view', $data);
    $this->load->view('template/footer');
}


    public function tambah()
    {
        $data['mahasiswa']    = $this->Mahasiswa_model->get_all();
        $data['mata_kuliah']  = $this->Mata_kuliah_model->get_all();

        $this->load->view('template/header');
        $this->load->view('tambah_absensi', $data);
        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $id_mahasiswa = $this->input->post('id_mahasiswa');
        $id_mk = $this->input->post('id_mk');
        $status_pertemuan = $this->input->post('status_pertemuan');

        if (!$status_pertemuan || empty($status_pertemuan) || !$id_mahasiswa || !$id_mk) {
            redirect('absensi/tambah');
            return;
        }

        foreach ($status_pertemuan as $pertemuan_ke => $status) {
            $existing = $this->db->where([
                'id_mahasiswa' => $id_mahasiswa,
                'id_mk' => $id_mk,
                'pertemuan_ke' => $pertemuan_ke
            ])->get('absensi')->row();

            if (!$existing) {
                $isi = array(
                    'id_mahasiswa' => $id_mahasiswa,
                    'id_mk' => $id_mk,
                    'pertemuan_ke' => $pertemuan_ke,
                    'status' => $status
                );
                $this->Absensi_model->insert($isi);
            }
        }

        redirect('absensi');
    }

    public function hapus($id)
    {
        $this->Absensi_model->delete($id);
        redirect('absensi');
    }

    public function edit($id)
    {
        $data['absensi'] = $this->Absensi_model->get_by_id($id);
        
        $mahasiswa = $this->db->get_where('mahasiswa', ['id_mahasiswa' => $data['absensi']->id_mahasiswa])->row();
        $mata_kuliah = $this->db->get_where('mata_kuliah', ['id_mk' => $data['absensi']->id_mk])->row();
        
        $data['absensi']->nama_mahasiswa = $mahasiswa ? $mahasiswa->nama : '';
        $data['absensi']->nama_mk = $mata_kuliah ? $mata_kuliah->nama_mk : '';

        $this->load->view('template/header');
        $this->load->view('edit_absensi', $data);
        $this->load->view('template/footer');
    }

    public function update($id)
    {
        $data = [
            'id_mahasiswa' => $this->input->post('id_mahasiswa'),
            'id_mk'        => $this->input->post('id_mk'),
            'pertemuan_ke' => $this->input->post('pertemuan_ke'),
            'status'       => $this->input->post('status'),
        ];
        $this->Absensi_model->update($id, $data);
        redirect('absensi');
    }

}
