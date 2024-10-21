<?php

namespace App\Models;

use BadFunctionCallException;
use CodeIgniter\Model;

class Jadwal_Model extends Model
{
    protected $table = 'jadwal';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_dosen', 'matkul', 'kelas', 'tanggal', 'waktu', 'ruang'];

    public function search($keyword)
    {
        // $builder = $this->table('jadwal');
        // $builder->like('nama', $keyword);
        // return $builder;
        return $this->table('jadwal')->like('nama_dosen', $keyword)->orLike('matkul', $keyword)->orLike('kelas', $keyword)->orLike('tanggal', $keyword)->orLike('waktu', $keyword)->orLike('ruang', $keyword);
    }


    public function getJadwal($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function hariini()
    {
        // mengambil data hari ini
        $tanggal = date("Y-m-d");

        // select data dari database
        $sql = "SELECT * FROM jadwal WHERE tanggal = '$tanggal'";

        // eksekusi query sql
        $query = $this->db->query($sql);

        if ($query->getNumRows() > 0) {
            $data = $query->getResultArray();
            return $data;
        } else {
            return [];
        }
    }

    public function terkini()
    {
        // Menentukan daftar nama hari dalam bahasa Indonesia
        $nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

        // Menentukan daftar nama bulan dalam bahasa Indonesia
        $nama_bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        // Mendapatkan tanggal hari ini
        $tanggal = date("Y-m-d");

        // Mendapatkan indeks hari dalam seminggu
        $indeks_hari = date("w", strtotime($tanggal));

        // Mendapatkan tanggal dalam format bahasa Indonesia
        $tanggal_indonesia = date("j", strtotime($tanggal));

        // Mendapatkan bulan dalam format bahasa Indonesia
        $bulan_indonesia = $nama_bulan[date("n", strtotime($tanggal)) - 1];

        // Mendapatkan tahun
        $tahun = date("Y", strtotime($tanggal));

        $terkini = $nama_hari[$indeks_hari] . ", " . $tanggal_indonesia . " " . $bulan_indonesia . " " . $tahun;


        return $terkini;
    }
}
