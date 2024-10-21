<?php

namespace App\Controllers;

use App\Models\Kelas_Model;
use CodeIgniter\Validation\StrictRules\Rules;

class Kelas extends BaseController
{
    protected $Kelas_Model;

    public function __construct()
    {
        $this->Kelas_Model = new Kelas_Model();
    }


    public function index()
    {
        $pager = \Config\Services::pager();
        $currentPage = $this->request->getVar('page_kelas') ? $this->request->getVar('page_kelas') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $kelas = $this->Kelas_Model->search($keyword);
        } else {
            $kelas = $this->Kelas_Model;
        }

        $data = [
            'title' => 'kelas | Labs',
            'kelas' => $kelas->paginate(5, 'kelas'),
            'pager' => $pager,
            'currentPage' => $currentPage
        ];

        return view('kelas/index', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah kelas | Labs',
            'valid' => \Config\Services::validation()
        ];
        return view('kelas/tambah-kelas', $data);
    }
    public function save()
    {
        // aturan validasi input
        $rules = $this->validate([
            'nama_kelas' => 'required'
        ]);


        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Gagal menambahkan kelas, pastikan isian sesuai.');
            return redirect()->back()->withInput();
        }


        $this->Kelas_Model->save([
            'nama_kelas' => $this->request->getVar('nama_kelas')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/kelas');
    }

    public function delete($id)
    {
        $this->Kelas_Model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/kelas');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Update kelas | Labs',
            'valid' => \Config\Services::validation(),
            'kelas' => $this->Kelas_Model->getkelas($id)
        ];
        return view('/kelas/edit-kelas', $data);
    }

    public function update($id)
    {
        $this->Kelas_Model->save([
            'id' => $id,
            'nama_kelas' => $this->request->getVar('nama_kelas')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/kelas');
    }
}
