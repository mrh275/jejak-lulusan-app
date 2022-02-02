@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Tabel Data Kuliah Lulusan</h1>

        <div class="container">
            <table class="table-biodata stripe hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Kelas</th>
                        <th>Tahun Lulus</th>
                        <th>Nama Universitas</th>
                        <th>Fakultas</th>
                        <th>Jurusan/Prodi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kuliah as $data)
                        @if (!isset($data->kuliah->nisn_kuliah))
                            {{ '' }}
                        @else
                            <tr>
                                <td class="number"></td>
                                <td class="nama">{{ $data->nama }}</td>
                                <td>{{ $data->nisn }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td>{{ $data->tahun_lulus }}</td>
                                <td>{{ $data->kuliah->kampus }}</td>
                                <td>{{ $data->kuliah->fakultas }}</td>
                                <td>{{ $data->kuliah->jurusan }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
