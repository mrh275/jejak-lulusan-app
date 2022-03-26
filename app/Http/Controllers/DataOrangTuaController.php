<?php

namespace App\Http\Controllers;

use App\Models\DataOrangTua;
use Illuminate\Http\Request;

class DataOrangTuaController extends Controller
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
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'alamat_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'alamat_ibu' => 'required',
        ];

        $errorMessage = [
            'nama_ayah.required' => 'Nama Ayah tidak boleh kosong',
            'tempat_lahir_ayah.required' => 'Tempat Lahir Ayah tidak boleh kosong',
            'pendidikan_ayah.required' => 'Pendidikan Ayah tidak boleh kosong',
            'pekerjaan_ayah.required' => 'Pekerjaan Ayah tidak boleh kosong',
            'penghasilan_ayah.required' => 'Penghasilan Ayah tidak boleh kosong',
            'alamat_ayah.required' => 'Alamat Ayah tidak boleh kosong',
            'nama_ibu.required' => 'Nama Ibu tidak boleh kosong',
            'tempat_lahir_ibu.required' => 'Tempat Lahir Ibu tidak boleh kosong',
            'pendidikan_ibu.required' => 'Pendidikan Ibu tidak boleh kosong',
            'pekerjaan_ibu.required' => 'Pekerjaan Ibu tidak boleh kosong',
            'penghasilan_ibu.required' => 'Penghasilan Ibu tidak boleh kosong',
            'alamat_ibu.required' => 'Alamat Ibu tidak boleh kosong',
        ];

        $validateData = $request->validate($rules, $errorMessage);
        $tgl_lahir_ayah = str_replace('/', '-', $request->tanggal_lahir_ayah);
        $tgl_lahir_ibu = str_replace('/', '-', $request->tanggal_lahir_ibu);
        $validateData['tanggal_lahir_ayah'] = date('Y-m-d', strtotime($tgl_lahir_ayah));
        $validateData['tanggal_lahir_ibu'] = date('Y-m-d', strtotime($tgl_lahir_ibu));
        $validateData['nisn_orang_tua'] = $request->nisn_orang_tua;
        $validateData['created_at'] = date('Y-m-d H:i:s');

        DataOrangTua::insert($validateData);

        return redirect('alumni/data-orangtua')->with('success', 'Data berhasil ditambahkan!');
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
        $dataOrangTua = DataOrangTua::where('nisn_orang_tua', $id)->first();
        return response()->json([
                'data' => $dataOrangTua,
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
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'alamat_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'alamat_ibu' => 'required',
        ];

        $errorMessage = [
            'nama_ayah.required' => 'Nama Ayah tidak boleh kosong',
            'tempat_lahir_ayah.required' => 'Tempat Lahir Ayah tidak boleh kosong',
            'pendidikan_ayah.required' => 'Pendidikan Ayah tidak boleh kosong',
            'pekerjaan_ayah.required' => 'Pekerjaan Ayah tidak boleh kosong',
            'penghasilan_ayah.required' => 'Penghasilan Ayah tidak boleh kosong',
            'alamat_ayah.required' => 'Alamat Ayah tidak boleh kosong',
            'nama_ibu.required' => 'Nama Ibu tidak boleh kosong',
            'tempat_lahir_ibu.required' => 'Tempat Lahir Ibu tidak boleh kosong',
            'pendidikan_ibu.required' => 'Pendidikan Ibu tidak boleh kosong',
            'pekerjaan_ibu.required' => 'Pekerjaan Ibu tidak boleh kosong',
            'penghasilan_ibu.required' => 'Penghasilan Ibu tidak boleh kosong',
            'alamat_ibu.required' => 'Alamat Ibu tidak boleh kosong',
        ];

        $validateData = $request->validate($rules, $errorMessage);
        $tgl_lahir_ayah = str_replace('/', '-', $request->tanggal_lahir_ayah);
        $tgl_lahir_ibu = str_replace('/', '-', $request->tanggal_lahir_ibu);
        $validateBiodata['tanggal_lahir_ayah'] = date('Y-m-d', strtotime($tgl_lahir_ayah));
        $validateBiodata['tanggal_lahir_ibu'] = date('Y-m-d', strtotime($tgl_lahir_ibu));

        DataOrangTua::where('nisn_orang_tua', $id)->update($validateData);

        return redirect('alumni/data-orangtua')->with('success', 'Data berhasil diubah!');
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
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'alamat_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'alamat_ibu' => 'required',
        ];

        $errorMessage = [
            'nama_ayah.required' => 'Nama Ayah tidak boleh kosong',
            'tempat_lahir_ayah.required' => 'Tempat Lahir Ayah tidak boleh kosong',
            'pendidikan_ayah.required' => 'Pendidikan Ayah tidak boleh kosong',
            'pekerjaan_ayah.required' => 'Pekerjaan Ayah tidak boleh kosong',
            'penghasilan_ayah.required' => 'Penghasilan Ayah tidak boleh kosong',
            'alamat_ayah.required' => 'Alamat Ayah tidak boleh kosong',
            'nama_ibu.required' => 'Nama Ibu tidak boleh kosong',
            'tempat_lahir_ibu.required' => 'Tempat Lahir Ibu tidak boleh kosong',
            'pendidikan_ibu.required' => 'Pendidikan Ibu tidak boleh kosong',
            'pekerjaan_ibu.required' => 'Pekerjaan Ibu tidak boleh kosong',
            'penghasilan_ibu.required' => 'Penghasilan Ibu tidak boleh kosong',
            'alamat_ibu.required' => 'Alamat Ibu tidak boleh kosong',
        ];

        $validateData = $request->validate($rules, $errorMessage);
        $tgl_lahir_ayah = str_replace('/', '-', $request->tanggal_lahir_ayah);
        $tgl_lahir_ibu = str_replace('/', '-', $request->tanggal_lahir_ibu);
        $validateBiodata['tanggal_lahir_ayah'] = date('Y-m-d', strtotime($tgl_lahir_ayah));
        $validateBiodata['tanggal_lahir_ibu'] = date('Y-m-d', strtotime($tgl_lahir_ibu));

        DataOrangTua::where('nisn_orang_tua', $nisn)->update($validateData);

        return response()->json([
                'success' => 'Data berhasil diubah!',
        ]);
    }
}
