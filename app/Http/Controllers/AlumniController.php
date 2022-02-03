<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function dashboard()
    {

        $data = [
            'title'     => 'Dashboard',
            'activeMenu' => 'dashboard',
            'activeSubMenu' => ''
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
            'activeSubMenu' => 'biodata'
        ];

        return view('admin.biodata', $data);
    }
    public function dataOrangTua()
    {
        $data = [
            'title'     => 'Form Data Orang Tua',
            'activeMenu' => 'data-diri',
            'activeSubMenu' => 'data-orangtua'
        ];

        return view('admin.data-orangtua', $data);
    }

    public function kuliah()
    {
        $data = [
            'title'     => 'Form Data Kuliah',
            'activeMenu' => 'kelulusan',
            'activeSubMenu' => 'data-kuliah'
        ];

        return view('admin.data-kuliah', $data);
    }

    public function pekerjaan()
    {
        $data = [
            'title'     => 'Form Data Pekerjaan',
            'activeMenu' => 'kelulusan',
            'activeSubMenu' => 'data-pekerjaan'
        ];

        return view('admin.data-pekerjaan', $data);
    }
}
