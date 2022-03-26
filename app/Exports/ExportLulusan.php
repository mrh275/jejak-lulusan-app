<?php

namespace App\Exports;

use App\Models\Biodata;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportLulusan implements FromView
{
   
    public function view(): View
    {
        return view('admin.export.export-excel', [
            'biodata' => Biodata::all()
        ]);
    }
}
