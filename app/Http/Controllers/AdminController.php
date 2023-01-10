<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Biodata;
use App\Models\Angkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {

        $data = [
            'title'     => 'Dashboard',
            'activeMenu' => 'dashboard',
            'activeSubMenu' => '',
            'alumni' => Biodata::all(),
            'angkatan' => Angkatan::count(),
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

        //Tabel biodata
        if ($page == 'datatable-biodata') {
            return $this->tableBiodata();
        }

        // Tabel data orang tua
        if ($page == 'datatable-orangtua') {
            return $this->tableOrangTua();
        }

        // Form kuliah
        if ($page == 'data-kuliah') {
            return $this->kuliah();
        }

        // Form pekerjaan
        if ($page == 'data-pekerjaan') {
            return $this->pekerjaan();
        }

        // Tabel kuliah
        if ($page == 'datatable-kuliah') {
            return $this->tableKuliah();
        }

        // Tabel pekerjaan
        if ($page == 'datatable-pekerjaan') {
            return $this->tablePekerjaan();
        }

        // Export Angkatan
        if ($page == 'export-angkatan') {
            return $this->exportAngkatan();
        }

        // Import Angkatan
        if ($page == 'import-lulusan') {
            return $this->importLulusan();
        }
        // User Account
        if ($page == 'user-account') {
            return $this->userAccount();
        }
        // User Account
        if ($page == 'user-role') {
            return $this->userRole();
        }

        echo "Page not found";
    }

    public function biodata()
    {
        $data = [
            'title'     => 'Form Biodata',
            'activeMenu' => 'data-diri',
            'activeSubMenu' => 'biodata',
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
            'activeSubMenu' => 'tabel-biodata',
            'biodata'   => Biodata::all(),
        ];

        return view('admin.datatable-biodata', $data);
    }

    public function tableOrangTua()
    {
        $data = [
            'title'     => 'Tabel Data Orang Tua',
            'activeMenu' => 'data-diri',
            'activeSubMenu' => 'tabel-orangtua',
            'dataOrangTua'  => Biodata::with('dataOrangTua')->get(),
        ];

        return view('admin.datatable-orangtua', $data);
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

    public function tableKuliah()
    {
        $data = [
            'title'     => 'Tabel Data Kuliah',
            'activeMenu' => 'kelulusan',
            'activeSubMenu' => 'tabel-kuliah',
            'kuliah'   => Biodata::with('kuliah')->get(),
        ];

        return view('admin.datatable-kuliah', $data);
    }

    public function tablePekerjaan()
    {
        $data = [
            'title'     => 'Tabel Data Pekerjaan',
            'activeMenu' => 'kelulusan',
            'activeSubMenu' => 'tabel-pekerjaan',
            'pekerjaan'   => Biodata::with('pekerjaan')->get(),
        ];

        return view('admin.datatable-pekerjaan', $data);
    }

    public function exportAngkatan()
    {
        $data = [
            'title'     => 'Export Angkatan',
            'activeMenu' => 'export',
            'activeSubMenu' => 'export-angkatan',
            'angkatan'  => Angkatan::all()->sortDesc(),
        ];

        return view('admin.export.export-angkatan', $data);
    }

    public function importLulusan()
    {
        $data = [
            'title'     => 'Import Lulusan',
            'activeMenu' => 'export',
            'activeSubMenu' => 'import-lulusan'
        ];

        return view('admin.import.import-lulusan', $data);
    }

    public function userAccount()
    {
        $data = [
            'title'     => 'Ubah Akun',
            'activeMenu' => 'user-manager',
            'activeSubMenu' => 'user-account',
            'user' => User::where('username', 'administrator')->first()
        ];

        return view('admin.user-account', $data);
    }
    public function userRole()
    {
        $data = [
            'title'     => 'User Role',
            'activeMenu' => 'user-manager',
            'activeSubMenu' => 'user-role',
            'user' => User::all()
        ];

        return view('admin.user-role', $data);
    }
}
