<?php

namespace App\Exports;

use App\Models\Biodata;
use App\Models\DataOrangTua;
use App\Models\Kuliah;
use App\Models\Pekerjaan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ExportAll implements FromView, ShouldAutoSize
{
   
    public function view(): View
    {
        return view('admin.export.export-excel', [
            'title' => 'Semua Angkatan',
            'biodata' => Biodata::with('pekerjaan')->get(),
        ]);
    }
}
