<?php

namespace App\Controllers;

class Modul extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Modul | Labs'
        ];
        return view('modul/index', $data);
    }
}
