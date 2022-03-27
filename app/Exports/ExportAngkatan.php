<?php

namespace App\Exports;

use App\Models\Kuliah;
use App\Models\Biodata;
use App\Models\Pekerjaan;
use App\Models\DataOrangTua;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ExportAngkatan implements FromView, ShouldAutoSize
{

    public function __construct($angkatan)
    {
        $this->angkatan = $angkatan;
    }

    public function view(): View
    {
        return view('admin.export.export-excel', [
            'title' => $this->angkatan,
            'biodata' => Biodata::where('tahun_lulus', $this->angkatan)->with(['dataOrangTua', 'kuliah', 'pekerjaan'])->get(),
        ]);
    }
}
