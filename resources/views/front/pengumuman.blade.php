@extends('layout.page')
@section('content')
    <div class="card pengumuman" id="#pengumuman">
        <div class="left-content block">
            <h3 class="title">
                Pengumuman Kelulusan
            </h3>
            <form action="/pengumuman-kelulusan?hasil={{ $nis ?? '' }}" method="get" class="form-pengumuman">
                <div class="input-form-wrapper">
                    <label for="input-form" class="label-input">Masukan NIS/NISN anda : </label>
                    <input type="text" class="form-input" id="input-form" name="nis">
                </div>
                <div class="button-wrapper">
                    <button class="btn btn-primary" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <div class="right-content">
            @if ($nis)
                <div class="hasil">
                    <h4 class="selamat">
                        Selamat! Anda Lulus.
                    </h4>
                    <span class="ucapan">
                        <span class="nama">{{ $nis }}</span>, ananda telah menyelesaikan pendidikan di <span class="sekolah">SMA Negeri 1 Rawamerta</span> selama 3 tahun dan dinyatakan <span class="lulus">Lulus</span>.
                    </span>
                </div>
            @else
                <div class="hasil bg-gray-400">
                    <h4 class="selamat" style="color: #1e293b">
                        Hasil pengumuman akan muncul disini!
                    </h4>

                </div>
            @endif
        </div>
    </div>
@endsection
