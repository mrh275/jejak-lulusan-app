<?php

namespace App\Http\Controllers;

use App\Models\Kuliah;
use App\Models\Biodata;
use Illuminate\Http\Request;

class KuliahController extends Controller
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
            'kampus' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ];

        $errorMessage = [
            'kampus.required' => 'Nama Kampus tidak boleh kosong',
            'fakultas.required' => 'Nama Fakultas tidak boleh kosong',
            'jurusan.required' => 'Nama Jurusan tidak boleh kosong',
            'alamat.required' => 'Alamat Kampus tidak boleh kosong',
        ];

        $validateKuliah = $request->validate($rules, $errorMessage);
        $validateKuliah['nisn_kuliah'] = $request->nisn_kuliah;
        $validateKuliah['created_at'] = date('Y-m-d H:i:s');

        Kuliah::insert($validateKuliah);
        
        return redirect('alumni/data-kuliah')->with('success', 'Data kuliah berhasil ditambahkan');
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
        $dataKuliah = Kuliah::where('nisn_kuliah', $id)->first();
        $biodata = Biodata::where('nisn', $id)->first();
        return response()->json([
                'biodata'  => $biodata,
                'kuliah' => $dataKuliah,
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
            'kampus' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ];

        $errorMessage = [
            'kampus.required' => 'Nama Kampus tidak boleh kosong',
            'fakultas.required' => 'Nama Fakultas tidak boleh kosong',
            'jurusan.required' => 'Nama Jurusan tidak boleh kosong',
            'alamat.required' => 'Alamat Kampus tidak boleh kosong',
        ];

        $validateKuliah = $request->validate($rules, $errorMessage);

        Kuliah::where('nisn_kuliah', $id)->update($validateKuliah);
        
        return redirect('alumni/data-kuliah')->with('success', 'Data kuliah berhasil diubah');
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
            'kampus' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ];

        $errorMessage = [
            'kampus.required' => 'Nama Kampus tidak boleh kosong',
            'fakultas.required' => 'Nama Fakultas tidak boleh kosong',
            'jurusan.required' => 'Nama Jurusan tidak boleh kosong',
            'alamat.required' => 'Alamat Kampus tidak boleh kosong',
        ];

        $validateKuliah = $request->validate($rules, $errorMessage);

        Kuliah::where('nisn_kuliah', $nisn)->update($validateKuliah);

        return response()->json([
                'success' => 'Data berhasil diubah!',
        ]);
    }
}
