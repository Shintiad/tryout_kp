<?php defined('BASEPATH') || exit('No direct script access allowed');

class Nama_paket_soal_model extends CI_Model
{
    public function get_all_data()
    {
        // Ambil data dari tabel nama_paket_soal
        $this->db->select('deskripsi, date, start_ujian, end_ujian');
        $this->db->where('DATE(date) >=', date('Y-m-d', strtotime('-5 days'))); // Tidak menampilkan data yang lebih dari 5 hari lewat
        $this->db->order_by('date', 'ASC'); // Mengurutkan berdasarkan tanggal
        return $this->db->get('nama_paket_soal')->result();
    }
}