<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kontak | Labs'
        ];
        return view('kontak/index', $data);
    }
}
