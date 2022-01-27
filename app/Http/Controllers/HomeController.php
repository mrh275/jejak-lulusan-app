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

    public function pengumuman(Request $request)
    {
        $nis = $request->input('nis');

        $data = [
            'title'     => 'Pengumuman Kelulusan',
            'nis'       => $nis
        ];

        return view('front.pengumuman', $data);
    }

    public function login()
    {
        $data = [
            'title'     => 'Login Alumni'
        ];

        return view('front.login', $data);
    }
}
