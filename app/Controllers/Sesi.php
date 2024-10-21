<?php

namespace App\Controllers;

use App\Models\Sesi_Model;
use CodeIgniter\Validation\StrictRules\Rules;

class Sesi extends BaseController
{
    protected $Sesi_Model;

    public function __construct()
    {
        $this->Sesi_Model = new Sesi_Model();
    }


    public function index()
    {
        $pager = \Config\Services::pager();
        $currentPage = $this->request->getVar('page_sesi') ? $this->request->getVar('page_sesi') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $sesi = $this->Sesi_Model->search($keyword);
        } else {
            $sesi = $this->Sesi_Model;
        }

        $data = [
            'title' => 'Sesi | Labs',
            'sesi' => $sesi->paginate(5, 'sesi'),
            'pager' => $pager,
            'currentPage' => $currentPage
        ];

        return view('sesi/index', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Sesi | Labs',
            'valid' => \Config\Services::validation()
        ];
        return view('sesi/tambah-sesi', $data);
    }
    public function save()
    {
        // aturan validasi input
        $rules = $this->validate([
            'sesi' => 'required',
            'waktu' => 'required'
        ]);


        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Gagal menambahkan sesi, pastikan isian sesuai.');
            return redirect()->back()->withInput();
        }


        $this->Sesi_Model->save([
            'sesi' => $this->request->getVar('sesi'),
            'waktu' => $this->request->getVar('waktu')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/sesi');
    }

    public function delete($id)
    {
        $this->Sesi_Model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/sesi');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Update Sesi | Labs',
            'valid' => \Config\Services::validation(),
            'sesi' => $this->Sesi_Model->getsesi($id)
        ];
        return view('/sesi/edit-sesi', $data);
    }

    public function update($id)
    {
        $this->Sesi_Model->save([
            'id' => $id,
            'sesi' => $this->request->getVar('sesi'),
            'waktu' => $this->request->getVar('waktu')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/sesi');
    }
}
