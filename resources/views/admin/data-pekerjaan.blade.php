@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Form Data Pekerjaan Lulusan</h1>

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
            @if (isset($job->nisn_pekerjaan))
                <form action="{{ url('pekerjaan/' . $job->nisn_pekerjaan) }}" class="form-group" method="post">
                @method('put')
                @csrf
            @else
                <form action="{{ url('pekerjaan') }}" class="form-group" method="post">
                    @csrf
                    <input type="hidden" name="nisn_pekerjaan" value="{{ session()->get('nisn') }}">
            @endif

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
                        <input type="text" name="nama_perusahaan" class="form-control" id="input-perusahaan" value="{{ old('nama_perusahaan', $job->nama_perusahaan ?? '') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jenis-industri">Bidang Industri</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="industri" class="form-control" id="input-jenis-industri" value="{{ old('industri', $job->industri ?? '') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-divisi">Divisi/Bagian</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="divisi" class="form-control" id="input-divisi" value="{{ old('divisi', $job->divisi ?? '') }}"">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jabatan">Jabatan</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="jabatan" class="form-control" id="input-jabatan" value="{{ old('jabatan', $job->jabatan ?? '') }}"">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat-perusahaan">Alamat Perusahaan</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat_perusahaan" class="form-control" id="input-alamat-perusahaan" rows="3">{{ old('alamat_perusahaan', $job->alamat_perusahaan ?? '') }}</textarea>
                    </div>
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
