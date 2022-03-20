@extends('layout.page')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="title">
                Daftar Lulusan
            </h3>
        </div>
        <div class="card-body">
            <table id="daftar-lulusan" class="daftar-lulusan stripe wrap">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>NISN</td>
                        <td>Jenis Kelamin</td>
                        <td>Kelas</td>
                        <td>Lulusan</td>
                        <td>Status Lulusan</td>
                        <td>Nama Kampus</td>
                        <td>Nama Perusahaan</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodata as $bio)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $bio->nama }}</td>
                            <td>{{ $bio->nisn }}</td>
                            <td>
                                @if ($bio->jenis_kelamin == 'L')
                                    Laki-laki
                                @else
                                    Perempuan
                                @endif
                            </td>
                            <td>{{ Str::upper(str_replace('-', ' ', $bio->kelas)) }}</td>
                            <td>{{ $bio->tahun_lulus }}</td>
                            <td>
                                {{ ($bio->status_lulusan == 1) ? 'Kuliah' : (($bio->status_lulusan == 2) ? 'Kerja' : 'Kuliah dan Kerja') }}
                            </td>
                            <td>{{ $bio->kuliah->kampus ?? '-' }}</td>
                            <td>{{ $bio->pekerjaan->nama_perusahaan ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
