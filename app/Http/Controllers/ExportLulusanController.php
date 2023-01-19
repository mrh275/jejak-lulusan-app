<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Angkatan;
use App\Exports\ExportAll;
use Illuminate\Http\Request;
use App\Imports\ImportLulusan;
use App\Exports\ExportAngkatan;
use Maatwebsite\Excel\Facades\Excel;

class ExportLulusanController extends Controller
{
    public function exportExcel()
    {
        return Excel::download(new ExportAll, 'data-lulusan-all.xlsx');
    }

    public function exportAngkatan(Request $request)
    {
        $angkatan = $request->angkatan;
        return Excel::download(new ExportAngkatan($angkatan), 'data-lulusan-angkatan-' . $angkatan . '.xlsx');
    }

    public function importLulusan(Request $request)
    {
        $file = $request->file('file');
        $angkatan = Angkatan::all()->last();

        try {
            Excel::import(new ImportLulusan, $file);
            Angkatan::create([
                'tahun_lulus' => ($angkatan->tahun_lulus + 1)
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }

        return redirect('admin/import-lulusan')->with('success', 'Data berhasil diimport!');
    }
}
