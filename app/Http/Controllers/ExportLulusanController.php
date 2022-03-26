<?php

namespace App\Http\Controllers;

use App\Exports\ExportAll;
use Illuminate\Http\Request;
use App\Exports\ExportAngkatan;
use Maatwebsite\Excel\Facades\Excel;

class ExportLulusanController extends Controller
{
    public function exportExcel() {
        return Excel::download(new ExportAll, 'data-lulusan-all.xlsx');
    }

    public function exportAngkatan(Request $request) {
        $angkatan = $request->angkatan;
        return Excel::download(new ExportAngkatan($angkatan), 'data-lulusan-angkatan-'.$angkatan.'.xlsx');
    }
}
