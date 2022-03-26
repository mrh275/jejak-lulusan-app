<?php

namespace App\Http\Controllers;

use App\Exports\ExportAll;
use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Exports\ExportLulusan;
use Maatwebsite\Excel\Facades\Excel;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::where('nis', $id)->first();
        return response()->json([
                'data' => $biodata,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nisn'  => 'required|numeric',
            'nis'   => 'required|numeric',
            'nama'  => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'kelas' => 'required',
            'tahun_lulus' => 'required|numeric',
            'status_lulusan' => 'required|numeric',
            'alamat' => 'required',
        ];

        $errorMessage = [
            'nisn.required' => 'NISN tidak boleh kosong',
            'nisn.numeric' => 'NISN harus berupa angka',
            'nis.required' => 'NIS tidak boleh kosong',
            'nis.numeric' => 'NIS harus berupa angka',
            'nama.required' => 'Nama tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'tempat_lahir.required' => 'Tempat lahir tidak boleh kosong',
            'kelas.required' => 'Kelas tidak boleh kosong',
            'tahun_lulus.required' => 'Tahun lulus tidak boleh kosong',
            'tahun_lulus.numeric' => 'Tahun lulus harus berupa angka',
            'status_lulusan.required' => 'Status lulusan tidak boleh kosong',
            'status_lulusan.numeric' => 'Status lulusan harus berupa angka',
            'alamat.required' => 'Alamat tidak boleh kosong',
        ];

        $validateBiodata = $request->validate($rules, $errorMessage);
        $tgl_lahir = str_replace('/', '-', $request->tanggal_lahir);
        $validateBiodata['tanggal_lahir'] = date('Y-m-d', strtotime($tgl_lahir));

        Biodata::where('nisn', $id)->update($validateBiodata);
        
        return redirect('alumni/biodata')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateAjax(Request $request, $nis)
    {
     
        $rules = [
            'nisn'  => 'required|numeric',
            'nis'   => 'required|numeric',
            'nama'  => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'kelas' => 'required',
            'tahun_lulus' => 'required|numeric',
            'status_lulusan' => 'required|numeric',
            'alamat' => 'required',
        ];

        $errorMessage = [
            'nisn.required' => 'NISN tidak boleh kosong',
            'nisn.numeric' => 'NISN harus berupa angka',
            'nis.required' => 'NIS tidak boleh kosong',
            'nis.numeric' => 'NIS harus berupa angka',
            'nama.required' => 'Nama tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'tempat_lahir.required' => 'Tempat lahir tidak boleh kosong',
            'kelas.required' => 'Kelas tidak boleh kosong',
            'tahun_lulus.required' => 'Tahun lulus tidak boleh kosong',
            'tahun_lulus.numeric' => 'Tahun lulus harus berupa angka',
            'status_lulusan.required' => 'Status lulusan tidak boleh kosong',
            'status_lulusan.numeric' => 'Status lulusan harus berupa angka',
            'alamat.required' => 'Alamat tidak boleh kosong',
        ];

        $validateBiodata = $request->validate($rules, $errorMessage);
        $tgl_lahir = str_replace('/', '-', $request->tanggal_lahir);
        $validateBiodata['tanggal_lahir'] = date('Y-m-d', strtotime($tgl_lahir));

        Biodata::where('nisn', $validateBiodata['nisn'])->update($validateBiodata);
        
        return response()->json([
                'success' => 'Data berhasil diubah!',
        ]);
    }

    public function exportExcel() {
        return Excel::download(new ExportAll, 'data-lulusan-all.xlsx');
    }
}
