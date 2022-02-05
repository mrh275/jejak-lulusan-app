@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Form Data Pekerjaan Lulusan</h1>

        <div class="container">
            <form action="" class="form-group" method="post">
                @csrf
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Lengkap</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="nama" disabled class="form-control" id="input-nama" value="{{ $biodata->nama ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nisn">NISN</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="number" name="nisn" disabled class="form-control" id="input-nisn" placeholder="Show data from biodata" value="{{ $biodata->nisn ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jenisKelamin">Jenis Kelamin</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="jenisKelamin" disabled id="input-jenisKelamin" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="L" {{ $biodata->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $biodata->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-kelas">Kelas</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="kelas" disabled class="form-control" id="input-kelas" value="{{ Str::upper(str_replace('-', ' ', $biodata->kelas)) ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tahunLulus">Tahun Lulus</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="tahunLulus" disabled class="form-control" id="input-tahunLulus" value="{{ $biodata->tahun_lulus ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-perusahaan">Nama Perusahaan</label>
                    </div>
                    <div class="input-wrapper">
                        <input name="perusahaan" class="form-control" id="input-perusahaan" value="{{ $job->nama_perusahaan ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jenis-industri">Bidang Industri</label>
                    </div>
                    <div class="input-wrapper">
                        <input name="jenis-industri" class="form-control" id="input-jenis-industri" value="{{ $job->industri ?? '' }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-divisi">Divisi/Bagian</label>
                    </div>
                    <div class="input-wrapper">
                        <input name="divisi" class="form-control" id="input-divisi" value="{{ $job->divisi ?? '' }}"">
                                        </div>
                                    </div>
                                    <div class="     form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-jabatan">Jabatan</label>
                        </div>
                        <div class="input-wrapper">
                            <input name="jabatan" class="form-control" id="input-jabatan" value="{{ $job->jabatan ?? '' }}"">
                                        </div>
                                    </div>
                                    <div class="     form-wrapper">
                            <div class="label-wrapper">
                                <label class="label-form" for="input-alamat-perusahaan">Alamat Perusahaan</label>
                            </div>
                            <div class="input-wrapper">
                                <textarea name="alamat-perusahaan" class="form-control" id="input-alamat-perusahaan" rows="3">{{ $job->alamat_perusahaan ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="button-wrapper">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
            </form>
        </div>

    </div>
@endsection
