<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
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

        return view('front.daftar-lulusan', [
            'title'     => 'Daftar Lulusan',
            'biodata'   => Biodata::with('kuliah', 'pekerjaan')->get(),
        ]);
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

    public function loginAlumni()
    {
        $data = [
            'title'     => 'Login Alumni'
        ];

        return view('front.login-alumni', $data);
    }

    public function loginAdmin()
    {
        $data = [
            'title'     => 'Login Admin'
        ];

        return view('front.login-admin', $data);
    }
}
