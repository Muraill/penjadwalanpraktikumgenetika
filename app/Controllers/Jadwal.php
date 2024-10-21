<?php

namespace App\Controllers;

use App\Models\Jadwal_Model;
use App\Models\Sesi_Model;
use App\Models\Dosen_Model;
use App\Models\Ruang_Model;
use App\Models\Matkul_Model;
use App\Models\Kelas_Model;

use CodeIgniter\Validation\StrictRules\Rules;

class Jadwal extends BaseController
{
    protected $Jadwal_Model;
    protected $Sesi_Model;
    protected $Dosen_Model;
    protected $Ruang_Model;
    protected $Matkul_Model;
    protected $Kelas_Model;

    public function __construct()
    {
        $this->Jadwal_Model = new Jadwal_Model();
        $this->Sesi_Model = new Sesi_Model();
        $this->Dosen_Model = new Dosen_Model();
        $this->Ruang_Model = new Ruang_Model();
        $this->Matkul_Model = new Matkul_Model();
        $this->Kelas_Model = new Kelas_Model();
    }


    public function index()
    {
        $pager = \Config\Services::pager();
        $hariini = $this->Jadwal_Model->hariini();
        $terkini = $this->Jadwal_Model->terkini();
        $currentPage = $this->request->getVar('page_jadwal') ? $this->request->getVar('page_jadwal') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $jadwal = $this->Jadwal_Model->search($keyword);
        } else {
            $jadwal = $this->Jadwal_Model;
        }

        $data = [
            'title' => 'Jadwal | Labs',
            'jadwal' => $jadwal->paginate(5, 'jadwal'),
            'pager' => $pager,
            'hariini' => $hariini,
            'terkini' => $terkini,
            'currentPage' => $currentPage
        ];

        return view('jadwal/index', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Jadwal | Labs',
            'valid' => \Config\Services::validation(),
            'sesi' => $this->Sesi_Model->getSesi(),
            'dosen' => $this->Dosen_Model->getDosen(),
            'ruang' => $this->Ruang_Model->getRuang(),
            'matkul' => $this->Matkul_Model->getMatkul(),
            'kelas' => $this->Kelas_Model->getKelas()
        ];
        return view('jadwal/tambah-jadwal', $data);
    }
    public function save()
    {
        // aturan validasi input
        $rules = $this->validate([
            'nama_dosen' => 'required',
            'nama_matkul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'ruang' => 'required'
        ]);


        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Gagal menambahkan jadwal, pastikan isian sesuai.');
            return redirect()->back()->withInput();
        }
        //Validasi Input
        // if (!$this->validate([
        // 'dosen' => 'required'
        // 'matkul' => 'required',
        // 'kelas' => 'required',
        // 'sesi' => 'required',
        // 'tanggal' => 'required|is_unique[jadwal.tanggal]',
        // 'waktu' => 'required',
        // 'ruang' => 'required'
        // ])) {
        // $validation = \Config\Services::validation();
        // dd($validation);
        // return redirect()->to('/jadwal/tambah')->withInput()->with('validation', $validation);
        // }

        // $query = $this->Jadwal_Model->select('tanggal, waktu, ruang');
        // $hasil = $query->get()->getResultArray();


        $this->Jadwal_Model->save([
            'nama_dosen' => $this->request->getVar('nama_dosen'),
            'matkul' => $this->request->getVar('matkul'),
            'kelas' => $this->request->getVar('kelas'),
            'tanggal' => $this->request->getVar('tanggal'),
            'waktu' => $this->request->getVar('waktu'),
            'ruang' => $this->request->getVar('ruang')

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/jadwal');
    }

    public function delete($id)
    {
        $this->Jadwal_Model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/jadwal');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Update Jadwal | Labs',
            'valid' => \Config\Services::validation(),
            'jadwal' => $this->Jadwal_Model->getJadwal($id)
        ];
        return view('/jadwal/edit-jadwal', $data);
    }

    public function update($id)
    {
        $this->Jadwal_Model->save([
            'id' => $id,
            'nama_dosen' => $this->request->getVar('nama_dosen'),
            'matkul' => $this->request->getVar('matkul'),
            'kelas' => $this->request->getVar('kelas'),
            'tanggal' => $this->request->getVar('tanggal'),
            'waktu' => $this->request->getVar('waktu'),
            'ruang' => $this->request->getVar('ruang')

        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/jadwal');
    }
}
