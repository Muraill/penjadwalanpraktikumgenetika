<?php

namespace App\Controllers;

use App\Models\Matkul_Model;
use CodeIgniter\Validation\StrictRules\Rules;

class matkul extends BaseController
{
    protected $Matkul_Model;

    public function __construct()
    {
        $this->Matkul_Model = new Matkul_Model();
    }


    public function index()
    {
        $pager = \Config\Services::pager();
        $currentPage = $this->request->getVar('page_matkul') ? $this->request->getVar('page_matkul') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $matkul = $this->Matkul_Model->search($keyword);
        } else {
            $matkul = $this->Matkul_Model;
        }

        $data = [
            'title' => 'matkul | Labs',
            'matkul' => $matkul->paginate(5, 'matkul'),
            'pager' => $pager,
            'currentPage' => $currentPage
        ];

        return view('matkul/index', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah matkul | Labs',
            'valid' => \Config\Services::validation()
        ];
        return view('matkul/tambah-matkul', $data);
    }
    public function save()
    {
        // aturan validasi input
        $rules = $this->validate([
            'nama_matkul' => 'required'
        ]);


        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Gagal menambahkan matkul, pastikan isian sesuai.');
            return redirect()->back()->withInput();
        }


        $this->Matkul_Model->save([
            'nama_matkul' => $this->request->getVar('nama_matkul')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/matkul');
    }

    public function delete($id)
    {
        $this->Matkul_Model->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/matkul');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Update matkul | Labs',
            'valid' => \Config\Services::validation(),
            'matkul' => $this->Matkul_Model->getmatkul($id)
        ];
        return view('/matkul/edit-matkul', $data);
    }

    public function update($id)
    {
        $this->Matkul_Model->save([
            'id' => $id,
            'nama_matkul' => $this->request->getVar('nama_matkul')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/matkul');
    }
}
