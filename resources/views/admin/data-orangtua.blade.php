@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Form Data Orang Tua</h1>

        <div class="container">
            <form action="" class="form-group" method="post">
                @csrf

                <!-- Form Data Ayah -->
                <h3 class="ayah-title">Data Ayah</h3>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Ayah</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="nama-ayah" class="form-control" id="input-nama" value="{{ $orangTua->nama_ayah ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tempatLahir">Tempat Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="tempat-lahir-ayah" class="form-control" id="input-tempatLahir" value="{{ $orangTua->tempat_lahir_ayah ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" readonly name="tanggal-lahir-ayah" class="form-control" id="input-tanggalLahir" value="{{ isset($orangTua->tanggal_lahir_ayah)? date('d/m/Y', strtotime($orangTua->tanggal_lahir_ayah)): '01/01/1900' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pendidikan-ayah">Pendidikan Terakhir</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pendidikan-ayah" id="input-pendidikan-ayah" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="Tidak Sekolah" {{ isset($orangTua->pendidikan_ayah) == 'Tidak Sekolah' ? 'selected' : '' }}>Tidak Bersekolah</option>
                            <option value="SD" {{ isset($orangTua->pendidikan_ayah) == 'SD' ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ isset($orangTua->pendidikan_ayah) == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMA" {{ isset($orangTua->pendidikan_ayah) == 'SMA' ? 'selected' : '' }}>SMA</option>
                            <option value="D1" {{ isset($orangTua->pendidikan_ayah) == 'D1' ? 'selected' : '' }}>D1</option>
                            <option value="D2" {{ isset($orangTua->pendidikan_ayah) == 'D2' ? 'selected' : '' }}>D2</option>
                            <option value="D3" {{ isset($orangTua->pendidikan_ayah) == 'D3' ? 'selected' : '' }}>D3</option>
                            <option value="D4" {{ isset($orangTua->pendidikan_ayah) == 'D4' ? 'selected' : '' }}>D4</option>
                            <option value="S1" {{ isset($orangTua->pendidikan_ayah) == 'S1' ? 'selected' : '' }}>S1</option>
                            <option value="S2" {{ isset($orangTua->pendidikan_ayah) == 'S2' ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ isset($orangTua->pendidikan_ayah) == 'S3' ? 'selected' : '' }}>S3</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pekerjaan-ayah">Pekerjaan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pekerjaan-ayah" id="input-pekerjaan-ayah" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="Tidak Bekerja" {{ isset($orangTua->pekerjaan_ayah) == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
                            <option value="PNS" {{ isset($orangTua->pekerjaan_ayah) == 'PNS' ? 'selected' : '' }}>PNS</option>
                            <option value="TNI" {{ isset($orangTua->pekerjaan_ayah) == 'TNI' ? 'selected' : '' }}>TNI</option>
                            <option value="Polri" {{ isset($orangTua->pekerjaan_ayah) == 'Polri' ? 'selected' : '' }}>Polri</option>
                            <option value="Swasta" {{ isset($orangTua->pekerjaan_ayah) == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                            <option value="Wiraswasta" {{ isset($orangTua->pekerjaan_ayah) == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                            <option value="Petani" {{ isset($orangTua->pekerjaan_ayah) == 'Petani' ? 'selected' : '' }}>Petani</option>
                            <option value="Buruh" {{ isset($orangTua->pekerjaan_ayah) == 'Buruh' ? 'selected' : '' }}>Buruh</option>
                            <option value="Nelayan" {{ isset($orangTua->pekerjaan_ayah) == 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
                            <option value="Pedagang" {{ isset($orangTua->pekerjaan_ayah) == 'Pedagang' ? 'selected' : '' }}>Pedagang</option>
                            <option value="Pensiunan" {{ isset($orangTua->pekerjaan_ayah) == 'Pensiunan' ? 'selected' : '' }}>Pensiunan</option>
                            <option value="Peternak" {{ isset($orangTua->pekerjaan_ayah) == 'Peternak' ? 'selected' : '' }}>Peternak</option>
                            <option value="Pengusaha" {{ isset($orangTua->pekerjaan_ayah) == 'Pengusaha' ? 'selected' : '' }}>Pengusaha</option>
                            <option value="Lainnya" {{ isset($orangTua->pekerjaan_ayah) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-penghasilan-ayah">Penghasilan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="penghasilan-ayah" id="input-penghasilan-ayah" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="Tidak Berpenghasilan" {{ isset($orangTua->penghasilan_ayah) == 'Tidak Berpenghasilan' ? 'selected' : '' }}>Tidak Berpenghasilan</option>
                            <option value="< Rp. 1.000.000" {{ isset($orangTua->penghasilan_ayah) == '< Rp. 1.000.000' ? 'selected' : '' }}>Kurang dari Rp. 1.000.000</option>
                            <option value="Rp. 1.000.000 - Rp. 3.000.000" {{ isset($orangTua->penghasilan_ayah) == 'Rp. 1.000.000 - Rp. 3.000.000' ? 'selected' : '' }}>Rp. 1.000.000 - Rp. 3.000.000</option>
                            <option value="Rp. 3.000.000 - Rp. 5.000.000" {{ isset($orangTua->penghasilan_ayah) == 'Rp. 3.000.000 - Rp. 5.000.000' ? 'selected' : '' }}>Rp. 3.000.000 - Rp. 5.000.000</option>
                            <option value="Rp. 5.000.000 - Rp. 10.000.000" {{ isset($orangTua->penghasilan_ayah) == 'Rp. 5.000.000 - Rp. 10.000.000' ? 'selected' : '' }}>Rp. 5.000.000 - Rp. 10.000.000</option>
                            <option value="Rp. 10.000.000 - Rp. 20.000.000" {{ isset($orangTua->penghasilan_ayah) == 'Rp. 10.000.000 - Rp. 20.000.000' ? 'selected' : '' }}>Rp. 10.000.000 - Rp. 20.000.000</option>
                            <option value="> Rp. 20.000.000" {{ isset($orangTua->penghasilan_ayah) == '> Rp. 20.000.000' ? 'selected' : '' }}>Lebih dari Rp. 20.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat-ayah">Alamat</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat-ayah" class="form-control" id="input-alamat-ayah" rows="3">{{ $orangTua->alamat_ayah ?? '' }}</textarea>
                    </div>
                </div>

                <!-- Form Data Ibu -->
                <h3 class="ibu-title">Data Ibu</h3>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Ibu</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="nama-ibu" class="form-control" id="input-nama" value="{{ $orangTua->nama_ibu ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tempatLahir">Tempat Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="tempat-lahir-ibu" class="form-control" id="input-tempatLahir" value="{{ $orangTua->tempat_lahir_ibu ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" readonly name="tanggal-lahir-ibu" class="form-control" id="input-tanggalLahir" value="{{ isset($orangTua->tanggal_lahir_ibu) ? date('d/m/Y', strtotime($orangTua->tanggal_lahir_ibu)) : '01/01/1900' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pendidikan-ibu">Pendidikan Terakhir</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pendidikan-ibu" id="input-pendidikan-ibu" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="Tidak Sekolah" {{ isset($orangTua->pendidikan_ibu) == 'Tidak Sekolah' ? 'selected' : '' }}>Tidak Bersekolah</option>
                            <option value="SD" {{ isset($orangTua->pendidikan_ibu) == 'SD' ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ isset($orangTua->pendidikan_ibu) == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMA" {{ isset($orangTua->pendidikan_ibu) == 'SMA' ? 'selected' : '' }}>SMA</option>
                            <option value="D1" {{ isset($orangTua->pendidikan_ibu) == 'D1' ? 'selected' : '' }}>D1</option>
                            <option value="D2" {{ isset($orangTua->pendidikan_ibu) == 'D2' ? 'selected' : '' }}>D2</option>
                            <option value="D3" {{ isset($orangTua->pendidikan_ibu) == 'D3' ? 'selected' : '' }}>D3</option>
                            <option value="D4" {{ isset($orangTua->pendidikan_ibu) == 'D4' ? 'selected' : '' }}>D4</option>
                            <option value="S1" {{ isset($orangTua->pendidikan_ibu) == 'S1' ? 'selected' : '' }}>S1</option>
                            <option value="S2" {{ isset($orangTua->pendidikan_ibu) == 'S2' ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ isset($orangTua->pendidikan_ibu) == 'S3' ? 'selected' : '' }}>S3</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pekerjaan-ibu">Pekerjaan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pekerjaan-ibu" id="input-pekerjaan-ibu" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="Tidak Bekerja" {{ isset($orangTua->pekerjaan_ibu) == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
                            <option value="PNS" {{ isset($orangTua->pekerjaan_ibu) == 'PNS' ? 'selected' : '' }}>PNS</option>
                            <option value="TNI" {{ isset($orangTua->pekerjaan_ibu) == 'TNI' ? 'selected' : '' }}>TNI</option>
                            <option value="Polri" {{ isset($orangTua->pekerjaan_ibu) == 'Polri' ? 'selected' : '' }}>Polri</option>
                            <option value="Swasta" {{ isset($orangTua->pekerjaan_ibu) == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                            <option value="Wiraswasta" {{ isset($orangTua->pekerjaan_ibu) == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                            <option value="Petani" {{ isset($orangTua->pekerjaan_ibu) == 'Petani' ? 'selected' : '' }}>Petani</option>
                            <option value="Buruh" {{ isset($orangTua->pekerjaan_ibu) == 'Buruh' ? 'selected' : '' }}>Buruh</option>
                            <option value="Nelayan" {{ isset($orangTua->pekerjaan_ibu) == 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
                            <option value="Pedagang" {{ isset($orangTua->pekerjaan_ibu) == 'Pedagang' ? 'selected' : '' }}>Pedagang</option>
                            <option value="Pensiunan" {{ isset($orangTua->pekerjaan_ibu) == 'Pensiunan' ? 'selected' : '' }}>Pensiunan</option>
                            <option value="Peternak" {{ isset($orangTua->pekerjaan_ibu) == 'Peternak' ? 'selected' : '' }}>Peternak</option>
                            <option value="Pengusaha" {{ isset($orangTua->pekerjaan_ibu) == 'Pengusaha' ? 'selected' : '' }}>Pengusaha</option>
                            <option value="Lainnya" {{ isset($orangTua->pekerjaan_ibu) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-penghasilan-ibu">Penghasilan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="penghasilan-ibu" id="input-penghasilan-ibu" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="Tidak Berpenghasilan" {{ isset($orangTua->penghasilan_ayah) == 'Tidak Berpenghasilan' ? 'selected' : '' }}>Tidak Berpenghasilan</option>
                            <option value="< Rp. 1.000.000" {{ isset($orangTua->penghasilan_ibu) == '< Rp. 1.000.000' ? 'selected' : '' }}>Kurang dari Rp. 1.000.000</option>
                            <option value="Rp. 1.000.000 - Rp. 3.000.000" {{ isset($orangTua->penghasilan_ibu) == 'Rp. 1.000.000 - Rp. 3.000.000' ? 'selected' : '' }}>Rp. 1.000.000 - Rp. 3.000.000</option>
                            <option value="Rp. 3.000.000 - Rp. 5.000.000" {{ isset($orangTua->penghasilan_ibu) == 'Rp. 3.000.000 - Rp. 5.000.000' ? 'selected' : '' }}>Rp. 3.000.000 - Rp. 5.000.000</option>
                            <option value="Rp. 5.000.000 - Rp. 10.000.000" {{ isset($orangTua->penghasilan_ibu) == 'Rp. 5.000.000 - Rp. 10.000.000' ? 'selected' : '' }}>Rp. 5.000.000 - Rp. 10.000.000</option>
                            <option value="Rp. 10.000.000 - Rp. 20.000.000" {{ isset($orangTua->penghasilan_ibu) == 'Rp. 10.000.000 - Rp. 20.000.000' ? 'selected' : '' }}>Rp. 10.000.000 - Rp. 20.000.000</option>
                            <option value="> Rp. 20.000.000" {{ isset($orangTua->penghasilan_ibu) == '> Rp. 20.000.000' ? 'selected' : '' }}>Lebih dari Rp. 20.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat-ibu">Alamat</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat-ibu" class="form-control" id="input-alamat-ibu" rows="3">{{ $orangTua->alamat_ibu ?? '' }}</textarea>
                    </div>
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
