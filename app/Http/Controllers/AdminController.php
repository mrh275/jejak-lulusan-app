<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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

        if ($page == 'datatable-biodata') {
            return $this->tableBiodata();
        }
        // if ($page == 'datatable-orangtua') {
        //     return $this->tableOrangTua();
        // }

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
    public function tableBiodata()
    {
        $data = [
            'title'     => 'Tabel Biodata Lulusan',
            'activeMenu' => 'data-diri',
            'activeSubMenu' => 'tabel-biodata'
        ];

        return view('admin.datatable-biodata', $data);
    }

    // public function tableOrangTua()
    // {
    //     $data = [
    //         'title'     => 'Tabel Data Orang Tua',
    //         'activeMenu' => 'data-diri',
    //         'activeSubMenu' => 'tabel-orangtua'
    //     ];

    //     return view('admin.dashboard', $data);
    // }
}
