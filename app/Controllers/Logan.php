<?php

namespace App\Controllers;

class Logan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | Labs'
        ];
        return view('login/index', $data);
    }
}
