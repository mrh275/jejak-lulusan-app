@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Form Data Orang Tua</h1>

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">
            @if (isset($orangTua->nisn_orang_tua))
                <form action="{{ url('dataorangtua/' . $orangTua->nisn_orang_tua) }}" class="form-group" method="post">
                @method('put')
                @csrf
            @else
                <form action="{{ url('dataorangtua') }}" class="form-group" method="post">
                    @csrf
                    <input type="hidden" name="nisn_orang_tua" value="{{ session()->get('nisn') }}">
            @endif

                <!-- Form Data Ayah -->
                <h3 class="ayah-title">Data Ayah</h3>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Ayah</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="nama_ayah" class="form-control" id="input-nama" value="{{  old('nama_ayah', $orangTua->nama_ayah ?? '') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tempatLahir">Tempat Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="tempat_lahir_ayah" class="form-control" id="input-tempatLahir" value="{{ old('tempat_lahir_ayah', $orangTua->tempat_lahir_ayah ?? '')}}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" readonly name="tanggal_lahir_ayah" class="form-control" id="input-tanggalLahir" value="{{ old('tanggal_lahir_ayah', isset($orangTua->tanggal_lahir_ayah) ? date('d/m/Y', strtotime($orangTua->tanggal_lahir_ayah)) : '01/01/1900') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pendidikan-ayah">Pendidikan Terakhir</label>
                        
                    </div>
                    <div class="input-wrapper">
                        <select name="pendidikan_ayah" id="input-pendidikan-ayah" class="form-control">
                            <option value="">Pilih :</option>
                            @if(isset($orangTua->pendidikan_ayah))
                            <option value="1" {{ $orangTua->pendidikan_ayah == '1' ? 'selected' : '' }}>Tidak Bersekolah</option>
                            <option value="2" {{ $orangTua->pendidikan_ayah == '2' ? 'selected' : '' }}>SD</option>
                            <option value="3" {{ $orangTua->pendidikan_ayah == '3' ? 'selected' : '' }}>SMP</option>
                            <option value="4" {{ $orangTua->pendidikan_ayah == '4' ? 'selected' : '' }}>SMA</option>
                            <option value="5" {{ $orangTua->pendidikan_ayah == '5' ? 'selected' : '' }}>D1</option>
                            <option value="6" {{ $orangTua->pendidikan_ayah == '6' ? 'selected' : '' }}>D2</option>
                            <option value="7" {{ $orangTua->pendidikan_ayah == '7' ? 'selected' : '' }}>D3</option>
                            <option value="8" {{ $orangTua->pendidikan_ayah == '8' ? 'selected' : '' }}>D4/S1</option>
                            <option value="9" {{ $orangTua->pendidikan_ayah == '9' ? 'selected' : '' }}>S2</option>
                            <option value="10" {{ $orangTua->pendidikan_ayah == '10' ? 'selected' : '' }}>S3</option>
                            @else
                            <option value="1" >Tidak Bersekolah</option>
                            <option value="2" >SD</option>
                            <option value="3" >SMP</option>
                            <option value="4" >SMA</option>
                            <option value="5" >D1</option>
                            <option value="6" >D2</option>
                            <option value="7" >D3</option>
                            <option value="8" >D4/S1</option>
                            <option value="9" >S2</option>
                            <option value="10" >S3</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pekerjaan-ayah">Pekerjaan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pekerjaan_ayah" id="input-pekerjaan-ayah" class="form-control">
                            <option value="">Pilih :</option>
                            @if (isset($orangTua->pekerjaan_ayah))
                            <option value="1" {{ $orangTua->pekerjaan_ayah == '1' ? 'selected' : '' }}>Tidak Bekerja</option>
                            <option value="2" {{ $orangTua->pekerjaan_ayah == '2' ? 'selected' : '' }}>PNS</option>
                            <option value="3" {{ $orangTua->pekerjaan_ayah == '3' ? 'selected' : '' }}>TNI</option>
                            <option value="4" {{ $orangTua->pekerjaan_ayah == '4' ? 'selected' : '' }}>Polri</option>
                            <option value="5" {{ $orangTua->pekerjaan_ayah == '5' ? 'selected' : '' }}>Pegawai Swasta</option>
                            <option value="6" {{ $orangTua->pekerjaan_ayah == '6' ? 'selected' : '' }}>Wiraswasta</option>
                            <option value="7" {{ $orangTua->pekerjaan_ayah == '7' ? 'selected' : '' }}>Petani</option>
                            <option value="8" {{ $orangTua->pekerjaan_ayah == '8' ? 'selected' : '' }}>Buruh</option>
                            <option value="9" {{ $orangTua->pekerjaan_ayah == '9' ? 'selected' : '' }}>Nelayan</option>
                            <option value="10" {{ $orangTua->pekerjaan_ayah == '10' ? 'selected' : '' }}>Pedagang</option>
                            <option value="11" {{ $orangTua->pekerjaan_ayah == '11' ? 'selected' : '' }}>Pensiunan</option>
                            <option value="12" {{ $orangTua->pekerjaan_ayah == '12' ? 'selected' : '' }}>Peternak</option>
                            <option value="13" {{ $orangTua->pekerjaan_ayah == '13' ? 'selected' : '' }}>Pengusaha</option>
                            <option value="99" {{ $orangTua->pekerjaan_ayah == '99' ? 'selected' : '' }}>Lainnya</option>
                            @else
                            <option value="1" >Tidak Bekerja</option>
                            <option value="2" >PNS</option>
                            <option value="3" >TNI</option>
                            <option value="4" >Polri</option>
                            <option value="5" >Pegawai Swasta</option>
                            <option value="6" >Wiraswasta</option>
                            <option value="7" >Petani</option>
                            <option value="8" >Buruh</option>
                            <option value="9" >Nelayan</option>
                            <option value="10" >Pedagang</option>
                            <option value="11" >Pensiunan</option>
                            <option value="12" >Peternak</option>
                            <option value="13" >Pengusaha</option>
                            <option value="99" >Lainnya</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-penghasilan-ayah">Penghasilan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="penghasilan_ayah" id="input-penghasilan-ayah" class="form-control">
                            <option value="">Pilih :</option>
                            @if (isset($orangTua->penghasilan_ayah))
                            <option value="1" {{ $orangTua->penghasilan_ayah == '1' ? 'selected' : '' }}>Tidak Berpenghasilan</option>
                            <option value="2" {{ $orangTua->penghasilan_ayah == '2' ? 'selected' : '' }}>Kurang dari Rp. 1.000.000</option>
                            <option value="3" {{ $orangTua->penghasilan_ayah == '3' ? 'selected' : '' }}>Rp. 1.000.000 - Rp. 3.000.000</option>
                            <option value="4" {{ $orangTua->penghasilan_ayah == '4' ? 'selected' : '' }}>Rp. 3.000.000 - Rp. 5.000.000</option>
                            <option value="5" {{ $orangTua->penghasilan_ayah == '5' ? 'selected' : '' }}>Rp. 5.000.000 - Rp. 10.000.000</option>
                            <option value="6" {{ $orangTua->penghasilan_ayah == '6' ? 'selected' : '' }}>Rp. 10.000.000 - Rp. 20.000.000</option>
                            <option value="7" {{ $orangTua->penghasilan_ayah == '7' ? 'selected' : '' }}>Lebih dari Rp. 20.000.000</option>
                            @else
                            <option value="1" >Tidak Berpenghasilan</option>
                            <option value="2" >Kurang dari Rp. 1.000.000</option>
                            <option value="3" >Rp. 1.000.000 - Rp. 3.000.000</option>
                            <option value="4" >Rp. 3.000.000 - Rp. 5.000.000</option>
                            <option value="5" >Rp. 5.000.000 - Rp. 10.000.000</option>
                            <option value="6" >Rp. 10.000.000 - Rp. 20.000.000</option>
                            <option value="7" >Lebih dari Rp. 20.000.000</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat-ayah">Alamat</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat_ayah" class="form-control" id="input-alamat-ayah" rows="3">{{ old('alamat_ayah', $orangTua->alamat_ayah ?? '') }}</textarea>
                    </div>
                </div>

                <!-- Form Data Ibu -->
                <h3 class="ibu-title">Data Ibu</h3>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Ibu</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="nama_ibu" class="form-control" id="input-nama" value="{{ old('nama_ibu', $orangTua->nama_ibu ?? '') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tempatLahir">Tempat Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="tempat_lahir_ibu" class="form-control" id="input-tempatLahir" value="{{ old('tempat_lahir_ibu', $orangTua->tempat_lahir_ibu ?? '') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" readonly name="tanggal_lahir_ibu" class="form-control" id="input-tanggalLahir" value="{{ old('tanggal_lahir_ibu', isset($orangTua->tanggal_lahir_ibu) ? date('d/m/Y', strtotime($orangTua->tanggal_lahir_ibu)) : '01/01/1900') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pendidikan-ibu">Pendidikan Terakhir</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pendidikan_ibu" id="input-pendidikan-ibu" class="form-control">
                            <option value="">Pilih :</option>
                            @if (isset($orangTua->pendidikan_ibu))
                            <option value="1" {{ $orangTua->pendidikan_ibu == '1' ? 'selected' : '' }}>Tidak Bersekolah</option>
                            <option value="2" {{ $orangTua->pendidikan_ibu == '2' ? 'selected' : '' }}>SD</option>
                            <option value="3" {{ $orangTua->pendidikan_ibu == '3' ? 'selected' : '' }}>SMP</option>
                            <option value="4" {{ $orangTua->pendidikan_ibu == '4' ? 'selected' : '' }}>SMA</option>
                            <option value="5" {{ $orangTua->pendidikan_ibu == '5' ? 'selected' : '' }}>D1</option>
                            <option value="6" {{ $orangTua->pendidikan_ibu == '6' ? 'selected' : '' }}>D2</option>
                            <option value="7" {{ $orangTua->pendidikan_ibu == '7' ? 'selected' : '' }}>D3</option>
                            <option value="8" {{ $orangTua->pendidikan_ibu == '8' ? 'selected' : '' }}>D4/S1</option>
                            <option value="9" {{ $orangTua->pendidikan_ibu == '9' ? 'selected' : '' }}>S2</option>
                            <option value="10" {{ $orangTua->pendidikan_ibu == '10' ? 'selected' : '' }}>S3</option>
                            @else
                            <option value="1" >Tidak Bersekolah</option>
                            <option value="2" >SD</option>
                            <option value="3" >SMP</option>
                            <option value="4" >SMA</option>
                            <option value="5" >D1</option>
                            <option value="6" >D2</option>
                            <option value="7" >D3</option>
                            <option value="8" >D4/S1</option>
                            <option value="9" >S2</option>
                            <option value="10" >S3</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pekerjaan-ibu">Pekerjaan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pekerjaan_ibu" id="input-pekerjaan-ibu" class="form-control">
                            <option value="">Pilih :</option>
                            @if (isset($orangTua->pekerjaan_ibu))
                            <option value="1" {{ $orangTua->pekerjaan_ibu == '1' ? 'selected' : '' }}>Tidak Bekerja</option>
                            <option value="2" {{ $orangTua->pekerjaan_ibu == '2' ? 'selected' : '' }}>PNS</option>
                            <option value="3" {{ $orangTua->pekerjaan_ibu == '3' ? 'selected' : '' }}>TNI</option>
                            <option value="4" {{ $orangTua->pekerjaan_ibu == '4' ? 'selected' : '' }}>Polri</option>
                            <option value="5" {{ $orangTua->pekerjaan_ibu == '5' ? 'selected' : '' }}>Pegawai Swasta</option>
                            <option value="6" {{ $orangTua->pekerjaan_ibu == '6' ? 'selected' : '' }}>Wiraswasta</option>
                            <option value="7" {{ $orangTua->pekerjaan_ibu == '7' ? 'selected' : '' }}>Petani</option>
                            <option value="8" {{ $orangTua->pekerjaan_ibu == '8' ? 'selected' : '' }}>Buruh</option>
                            <option value="9" {{ $orangTua->pekerjaan_ibu == '9' ? 'selected' : '' }}>Nelayan</option>
                            <option value="10" {{ $orangTua->pekerjaan_ibu == '10' ? 'selected' : '' }}>Pedagang</option>
                            <option value="11" {{ $orangTua->pekerjaan_ibu == '11' ? 'selected' : '' }}>Pensiunan</option>
                            <option value="12" {{ $orangTua->pekerjaan_ibu == '12' ? 'selected' : '' }}>Peternak</option>
                            <option value="13" {{ $orangTua->pekerjaan_ibu == '13' ? 'selected' : '' }}>Pengusaha</option>
                            <option value="99" {{ $orangTua->pekerjaan_ibu == '99' ? 'selected' : '' }}>Lainnya</option>
                            @else
                            <option value="1" >Tidak Bekerja</option>
                            <option value="2" >PNS</option>
                            <option value="3" >TNI</option>
                            <option value="4" >Polri</option>
                            <option value="5" >Pegawai Swasta</option>
                            <option value="6" >Wiraswasta</option>
                            <option value="7" >Petani</option>
                            <option value="8" >Buruh</option>
                            <option value="9" >Nelayan</option>
                            <option value="10" >Pedagang</option>
                            <option value="11" >Pensiunan</option>
                            <option value="12" >Peternak</option>
                            <option value="13" >Pengusaha</option>
                            <option value="99" >Lainnya</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-penghasilan-ibu">Penghasilan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="penghasilan_ibu" id="input-penghasilan-ibu" class="form-control">
                            <option value="">Pilih :</option>
                            @if (isset($orangTua->penghasilan_ibu))
                            <option value="1" {{ $orangTua->penghasilan_ibu == '1' ? 'selected' : '' }}>Tidak Berpenghasilan</option>
                            <option value="2" {{ $orangTua->penghasilan_ibu == '2' ? 'selected' : '' }}>Kurang dari Rp. 1.000.000</option>
                            <option value="3" {{ $orangTua->penghasilan_ibu == '3' ? 'selected' : '' }}>Rp. 1.000.000 - Rp. 3.000.000</option>
                            <option value="4" {{ $orangTua->penghasilan_ibu == '4' ? 'selected' : '' }}>Rp. 3.000.000 - Rp. 5.000.000</option>
                            <option value="5" {{ $orangTua->penghasilan_ibu == '5' ? 'selected' : '' }}>Rp. 5.000.000 - Rp. 10.000.000</option>
                            <option value="6" {{ $orangTua->penghasilan_ibu == '6' ? 'selected' : '' }}>Rp. 10.000.000 - Rp. 20.000.000</option>
                            <option value="7" {{ $orangTua->penghasilan_ibu == '7' ? 'selected' : '' }}>Lebih dari Rp. 20.000.000</option>
                            @else
                            <option value="1" Tidak Berpenghasilan</option>
                            <option value="2" >Kurang dari Rp. 1.000.000</option>
                            <option value="3" >Rp. 1.000.000 - Rp. 3.000.000</option>
                            <option value="4" >Rp. 3.000.000 - Rp. 5.000.000</option>
                            <option value="5" >Rp. 5.000.000 - Rp. 10.000.000</option>
                            <option value="6" >Rp. 10.000.000 - Rp. 20.000.000</option>
                            <option value="7" >Lebih dari Rp. 20.000.000</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat-ibu">Alamat</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat_ibu" class="form-control" id="input-alamat-ibu" rows="3">{{ old('alamat_ibu', $orangTua->alamat_ibu ?? '') }}</textarea>
                    </div>
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
