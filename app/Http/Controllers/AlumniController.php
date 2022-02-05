<?php

namespace App\Http\Controllers;

use App\Models\Kuliah;
use App\Models\Biodata;
use App\Models\Pekerjaan;
use App\Models\DataOrangTua;
use Illuminate\Http\Request;

class AlumniController extends Controller
{

    public function __construct()
    {
        $data = [
            'notifBio' => Biodata::where('nisn', session()->get('nisn'))->first(),
            'notifOrangTua' => DataOrangTua::where('nisn_orang_tua', session()->get('nisn'))->first(),
            'notifKuliah' => Kuliah::where('nisn_kuliah', session()->get('nisn'))->first(),
            'notifPekerjaan' => Pekerjaan::where('nisn_pekerjaan', session()->get('nisn'))->first(),
        ];

        return $data;
    }

    public function dashboard()
    {

        $data = [
            'title'     => 'Dashboard',
            'activeMenu' => 'dashboard',
            'activeSubMenu' => '',
            'notif' => $this->__construct(),
            'biodata'   => Biodata::where('nisn', session()->get('nisn'))->first(),
        ];


        return view('admin.dashboard', $data);
    }

    public function page($page = null)
    {
        // Form Biodata handler
        if ($page == 'biodata') {
            return $this->biodata();
        }

        // Form data orang tua handler
        if ($page == 'data-orangtua') {
            return $this->dataOrangTua();
        }

        // Form kuliah
        if ($page == 'data-kuliah') {
            return $this->kuliah();
        }

        // Form pekerjaan
        if ($page == 'data-pekerjaan') {
            return $this->pekerjaan();
        }

        echo "Page not found";
    }

    public function biodata()
    {
        $data = [
            'title'     => 'Form Biodata',
            'activeMenu' => 'data-diri',
            'activeSubMenu' => 'biodata',
            'notif' => $this->__construct(),
            'biodata'   => Biodata::where('nisn', session()->get('nisn'))->first(),

        ];

        return view('admin.biodata', $data);
    }
    public function dataOrangTua()
    {
        $data = [
            'title'     => 'Form Data Orang Tua',
            'activeMenu' => 'data-diri',
            'activeSubMenu' => 'data-orangtua',
            'notif' => $this->__construct(),
            'biodata'   => Biodata::where('nisn', session()->get('nisn'))->first(),
            'orangTua' => DataOrangTua::where('nisn_orang_tua', session()->get('nisn'))->first()
        ];

        return view('admin.data-orangtua', $data);
    }

    public function kuliah()
    {
        $data = [
            'title'     => 'Form Data Kuliah',
            'activeMenu' => 'kelulusan',
            'activeSubMenu' => 'data-kuliah',
            'notif' => $this->__construct(),
            'biodata'  => Biodata::where('nisn', session()->get('nisn'))->first(),
            'kuliah'   => Kuliah::where('nisn_kuliah', session()->get('nisn'))->first()
        ];

        return view('admin.data-kuliah', $data);
    }

    public function pekerjaan()
    {
        $data = [
            'title'     => 'Form Data Pekerjaan',
            'activeMenu' => 'kelulusan',
            'activeSubMenu' => 'data-pekerjaan',
            'notif' => $this->__construct(),
            'biodata'  => Biodata::where('nisn', session()->get('nisn'))->first(),
            'job' => Pekerjaan::where('nisn_pekerjaan', session()->get('nisn'))->first()
        ];

        return view('admin.data-pekerjaan', $data);
    }
}
