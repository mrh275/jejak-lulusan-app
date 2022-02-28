@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Form Data Kuliah Lulusan</h1>

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
            @if (isset($kuliah->nisn_kuliah))
                <form action="{{ url('kuliah/' . $kuliah->nisn_kuliah) }}" class="form-group" method="post">
                @method('put')
                @csrf
            @else
                <form action="{{ url('kuliah') }}" class="form-group" method="post">
                    @csrf
                    <input type="hidden" name="nisn_kuliah" value="{{ session()->get('nisn') }}">
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
                        <label class="label-form" for="input-kampus">Nama Kampus</label>
                    </div>
                    <div class="input-wrapper">
                        <input name="kampus" class="form-control" id="input-kampus" value="{{ old('kampus', $kuliah->kampus ?? '') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-fakultas">Fakultas</label>
                    </div>
                    <div class="input-wrapper">
                        <input name="fakultas" class="form-control" id="input-fakultas" value="{{ old('fakultas', $kuliah->fakultas ?? '') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jurusan">Jurusan/Prodi</label>
                    </div>
                    <div class="input-wrapper">
                        <input name="jurusan" class="form-control" id="input-jurusan" value="{{ old('jurusan', $kuliah->jurusan ?? '') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat-kampus">Alamat Kampus</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat" class="form-control" id="input-alamat-kampus" rows="3">{{ old('alamat', $kuliah->alamat ?? '') }}</textarea>
                    </div>
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
