<?php

namespace App\Controllers;

use App\Models\Dosen_Model;
use CodeIgniter\Validation\StrictRules\Rules;

class Dosen extends BaseController
{
    protected $Dosen_Model;

    public function __construct()
    {
        $this->Dosen_Model = new Dosen_Model();
    }


    public function index()
    {
        $pager = \Config\Services::pager();
        $currentPage = $this->request->getVar('page_dosen') ? $this->request->getVar('page_dosen') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $dosen = $this->Dosen_Model->search($keyword);
        } else {
            $dosen = $this->Dosen_Model;
        }

        $data = [
            'title' => 'dosen | Labs',
            'dosen' => $dosen->paginate(5, 'dosen'),
            'pager' => $pager,
            'currentPage' => $currentPage
        ];

        return view('dosen/index', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah dosen | Labs',
            'valid' => \Config\Services::validation()
        ];
        return view('dosen/tambah-dosen', $data);
    }
    public function save()
    {
        // aturan validasi input
        $rules = $this->validate([
            'nama_dosen' => 'required',
            'kode_dosen' => 'required'
        ]);


        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Gagal menambahkan dosen, pastikan isian sesuai.');
            return redirect()->back()->withInput();
        }


        $this->Dosen_Model->save([
            'kode_dosen' => $this->request->getVar('kode_dosen'),
            'nama_dosen' => $this->request->getVar('nama_dosen')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/dosen');
    }

    public function delete($id)
    {
        $this->Dosen_Model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/dosen');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Update dosen | Labs',
            'valid' => \Config\Services::validation(),
            'dosen' => $this->Dosen_Model->getdosen($id)
        ];
        return view('/dosen/edit-dosen', $data);
    }

    public function update($id)
    {
        $this->Dosen_Model->save([
            'id' => $id,
            'kode_dosen' => $this->request->getVar('kode_dosen'),
            'nama_dosen' => $this->request->getVar('nama_dosen')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/dosen');
    }
}
