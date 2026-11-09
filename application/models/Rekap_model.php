<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap_model extends CI_Model {

    public function get_all()
    {
        return $this->db->query("
            SELECT 
                m.id_mahasiswa,
                m.nim,
                m.nama AS nama_mahasiswa,
                mk.id_mk,
                mk.kode_mk,
                mk.nama_mk,
                COUNT(DISTINCT a.pertemuan_ke) AS jumlah_pertemuan,
                SUM(CASE WHEN a.status = 'hadir' THEN 1 ELSE 0 END) AS total_hadir,
                SUM(CASE WHEN a.status = 'tidak' THEN 1 ELSE 0 END) AS total_tidak,
                ROUND((SUM(CASE WHEN a.status = 'hadir' THEN 1 ELSE 0 END) / COUNT(DISTINCT a.pertemuan_ke) * 100), 2) AS persentase_kehadiran
            FROM absensi a
            INNER JOIN mahasiswa m ON m.id_mahasiswa = a.id_mahasiswa
            INNER JOIN mata_kuliah mk ON mk.id_mk = a.id_mk
            GROUP BY m.id_mahasiswa, m.nim, m.nama, mk.id_mk, mk.kode_mk, mk.nama_mk
            ORDER BY m.nama ASC, mk.nama_mk ASC
        ")->result();
    }

    public function get_by_id($id)
    {
        return $this->db->query("
            SELECT 
                m.id_mahasiswa,
                m.nim,
                m.nama AS nama_mahasiswa,
                mk.id_mk,
                mk.kode_mk,
                mk.nama_mk,
                COUNT(DISTINCT a.pertemuan_ke) AS jumlah_pertemuan,
                SUM(CASE WHEN a.status = 'hadir' THEN 1 ELSE 0 END) AS total_hadir,
                SUM(CASE WHEN a.status = 'tidak' THEN 1 ELSE 0 END) AS total_tidak,
                ROUND((SUM(CASE WHEN a.status = 'hadir' THEN 1 ELSE 0 END) / COUNT(DISTINCT a.pertemuan_ke) * 100), 2) AS persentase_kehadiran
            FROM absensi a
            INNER JOIN mahasiswa m ON m.id_mahasiswa = a.id_mahasiswa
            INNER JOIN mata_kuliah mk ON mk.id_mk = a.id_mk
            WHERE m.id_mahasiswa = ?
            GROUP BY m.id_mahasiswa, m.nim, m.nama, mk.id_mk, mk.kode_mk, mk.nama_mk
            ORDER BY mk.nama_mk ASC
        ", [$id])->result();
    }

    public function count_all()
    {
        $result = $this->db->query("
            SELECT COUNT(DISTINCT CONCAT(id_mahasiswa, '-', id_mk)) AS total
            FROM absensi
        ")->row();
        
        return $result->total ?? 0;
    }
}
