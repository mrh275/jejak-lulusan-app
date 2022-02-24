@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Form Biodata Lulusan</h1>
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
        @if (session()->has('nisn'))
            <div class="container">
                <form action="{{ url('/biodata/' . $biodata->nisn) }}" class="form-group" method="post">
                    @method('put')
                    @csrf
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-nama">Nama Lengkap</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="nama" class="form-control" id="input-nama" value="{{ $biodata->nama ?? '' }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-nisn">NISN</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="number" name="nisn" class="form-control" id="input-nisn" value="{{ $biodata->nisn ?? '' }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-nis">NIS</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="number" name="nis" class="form-control" id="input-nis" value="{{ $biodata->nis ?? '' }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-jenisKelamin">Jenis Kelamin</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="jenis_kelamin" id="input-jenisKelamin" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="L" {{ $biodata->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ $biodata->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tempatLahir">Tempat Lahir</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tempat_lahir" class="form-control" id="input-tempatLahir" value="{{ $biodata->tempat_lahir ?? '' }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tanggal_lahir" class="form-control" id="input-tanggalLahir" value="{{ isset($biodata->tanggal_lahir) ? date('d/m/Y', strtotime($biodata->tanggal_lahir)) : '01/01/1900' }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-kelas">Kelas</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="kelas" id="input-kelas" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="12-ipa-1" {{ $biodata->kelas == '12-ipa-1' ? 'selected' : '' }}>12 IPA 1</option>
                                <option value="12-ipa-2" {{ $biodata->kelas == '12-ipa-2' ? 'selected' : '' }}>12 IPA 2</option>
                                <option value="12-ipa-3" {{ $biodata->kelas == '12-ipa-3' ? 'selected' : '' }}>12 IPA 3</option>
                                <option value="12-ipa-4" {{ $biodata->kelas == '12-ipa-4' ? 'selected' : '' }}>12 IPA 4</option>
                                <option value="12-ips-1" {{ $biodata->kelas == '12-ips-1' ? 'selected' : '' }}>12 IPS 1</option>
                                <option value="12-ips-2" {{ $biodata->kelas == '12-ips-2' ? 'selected' : '' }}>12 IPS 2</option>
                                <option value="12-ips-3" {{ $biodata->kelas == '12-ips-3' ? 'selected' : '' }}>12 IPS 3</option>
                                <option value="12-ips-4" {{ $biodata->kelas == '12-ips-4' ? 'selected' : '' }}>12 IPS 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tahunLulus">Tahun Lulus</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tahun_lulus" class="form-control" id="input-tahunLulus" value="{{ $biodata->tahun_lulus ?? '' }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-statusLulusan">Status Lulus</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="status_lulusan" id="input_statusLulusan" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="1" {{ $biodata->status_lulusan == 1 ? 'selected' : '' }}>Kuliah</option>
                                <option value="2" {{ $biodata->status_lulusan == 2 ? 'selected' : '' }}>Bekerja</option>
                                <option value="3" {{ $biodata->status_lulusan == 3 ? 'selected' : '' }}>Kuliah dan Kerja</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-alamat">Alamat</label>
                        </div>
                        <div class="input-wrapper">
                            <textarea name="alamat" class="form-control" id="input-alamat" rows="3">{{ $biodata->alamat ?? '' }}</textarea>
                        </div>
                    </div>

                    <div class="button-wrapper">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        @endif


    </div>
@endsection
