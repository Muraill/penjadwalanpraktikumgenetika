<?php

namespace App\Controllers;

use App\Models\Ruang_Model;
use CodeIgniter\Validation\StrictRules\Rules;

class ruang extends BaseController
{
    protected $Ruang_Model;

    public function __construct()
    {
        $this->Ruang_Model = new Ruang_Model();
    }


    public function index()
    {
        $pager = \Config\Services::pager();
        $currentPage = $this->request->getVar('page_ruang') ? $this->request->getVar('page_ruang') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $ruang = $this->Ruang_Model->search($keyword);
        } else {
            $ruang = $this->Ruang_Model;
        }

        $data = [
            'title' => 'Ruang | Labs',
            'ruang' => $ruang->paginate(5, 'ruang'),
            'pager' => $pager,
            'currentPage' => $currentPage
        ];

        return view('ruang/index', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Ruang | Labs',
            'valid' => \Config\Services::validation()
        ];
        return view('ruang/tambah-ruang', $data);
    }
    public function save()
    {
        // aturan validasi input
        $rules = $this->validate([
            'nama_ruang' => 'required'
        ]);


        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Gagal menambahkan ruang, pastikan isian sesuai.');
            return redirect()->back()->withInput();
        }


        $this->Ruang_Model->save([
            'nama_ruang' => $this->request->getVar('nama_ruang')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/ruang');
    }

    public function delete($id)
    {
        $this->Ruang_Model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/ruang');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Update Ruang | Labs',
            'valid' => \Config\Services::validation(),
            'ruang' => $this->Ruang_Model->getruang($id)
        ];
        return view('/ruang/edit-ruang', $data);
    }

    public function update($id)
    {
        $this->Ruang_Model->save([
            'id' => $id,
            'nama_ruang' => $this->request->getVar('nama_ruang')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/ruang');
    }
}
