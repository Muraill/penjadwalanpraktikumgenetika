<?php

namespace App\Controllers;

use App\Models\Jadwal_Model;

class Pages extends BaseController
{
    protected $Jadwal_Model;
    public function __construct()
    {
        $this->Jadwal_Model = new Jadwal_Model();
    }

    public function index()
    {
        $hariini = $this->Jadwal_Model->hariini();
        $terkini = $this->Jadwal_Model->terkini();

        $data = [
            'title' => 'Home | Labs',
            'hariini' => $hariini,
            'terkini' => $terkini,

        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Labs'
        ];
        return view('pages/about', $data);
    }
    public function modul()
    {
        $data = [
            'title' => 'Modul | Labs'
        ];
        return view('pages/modul', $data);
    }
    public function jadwal()
    {
        $pager = \Config\Services::pager();
        $jadwal = $this->Jadwal_Model->findAll();
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
            'hariini' => $hariini,
            'terkini' => $terkini,
            'pager' => $pager,
            'currentPage' => $currentPage

        ];
        return view('pages/jadwal', $data);
    }
    public function kontak()
    {
        $data = [
            'title' => 'Kontak | Labs'
        ];
        return view('pages/kontak', $data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'Gallery | Labs'
        ];
        return view('pages/gallery', $data);
    }
}
