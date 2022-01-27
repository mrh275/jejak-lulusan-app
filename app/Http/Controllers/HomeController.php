<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Portal',
        ];

        return view('front.index', $data);
    }

    public function daftarLulusan()
    {

        $data = [
            'title'     => 'Daftar Lulusan',
        ];

        return view('front.daftar-lulusan', $data);
    }
}
