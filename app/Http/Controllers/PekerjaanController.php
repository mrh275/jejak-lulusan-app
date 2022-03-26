<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
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
        $rules = [
            'nama_perusahaan' => 'required',
            'industri'  => 'required',
            'divisi' => 'required',
            'jabatan' => 'required',
            'alamat_perusahaan' => 'required',
        ];

        $errorMessage = [
            'nama_perusahaan.required' => 'Nama Perusahaan tidak boleh kosong',
            'industri.required' => 'Industri tidak boleh kosong',
            'divisi.required' => 'Divisi tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'alamat_perusahaan.required' => 'Alamat Perusahaan tidak boleh kosong',
        ];

        $validatePekerjaan = $request->validate($rules, $errorMessage);
        $validatePekerjaan['nisn_pekerjaan'] = $request->nisn_pekerjaan;
        $validatePekerjaan['created_at'] = date('Y-m-d H:i:s');

        Pekerjaan::insert($validatePekerjaan);

        return redirect('alumni/data-pekerjaan')->with('success', 'Data pekerjaan berhasil ditambahkan');
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
        $dataPekerjaan = Pekerjaan::where('nisn_pekerjaan', $id)->first();
        $biodata = Biodata::where('nisn', $id)->first();
        return response()->json([
                'biodata'  => $biodata,
                'pekerjaan' => $dataPekerjaan,
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
            'nama_perusahaan' => 'required',
            'industri'  => 'required',
            'divisi' => 'required',
            'jabatan' => 'required',
            'alamat_perusahaan' => 'required',
        ];

        $errorMessage = [
            'nama_perusahaan.required' => 'Nama Perusahaan tidak boleh kosong',
            'industri.required' => 'Industri tidak boleh kosong',
            'divisi.required' => 'Divisi tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'alamat_perusahaan.required' => 'Alamat Perusahaan tidak boleh kosong',
        ];

        $validatePekerjaan = $request->validate($rules, $errorMessage);

        Pekerjaan::where('nisn_pekerjaan', $id)->update($validatePekerjaan);

        return redirect('alumni/data-pekerjaan')->with('success', 'Data pekerjaan berhasil diubah');
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

    public function updateAjax(Request $request, $nisn)
    {
        $rules = [
            'nama_perusahaan' => 'required',
            'industri'  => 'required',
            'divisi' => 'required',
            'jabatan' => 'required',
            'alamat_perusahaan' => 'required',
        ];

        $errorMessage = [
            'nama_perusahaan.required' => 'Nama Perusahaan tidak boleh kosong',
            'industri.required' => 'Industri tidak boleh kosong',
            'divisi.required' => 'Divisi tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'alamat_perusahaan.required' => 'Alamat Perusahaan tidak boleh kosong',
        ];

        $validatePekerjaan = $request->validate($rules, $errorMessage);

        Pekerjaan::where('nisn_pekerjaan', $nisn)->update($validatePekerjaan);

        return response()->json([
                'success' => 'Data berhasil diubah!',
        ]);
    }
}
