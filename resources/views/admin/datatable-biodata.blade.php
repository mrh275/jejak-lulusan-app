@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Tabel Biodata Lulusan</h1>

        <div class="container">
            <table class="table-biodata stripe hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>TTL</th>
                        <th>Kelas</th>
                        <th>Tahun Lulus</th>
                        <th>Status Lulusan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodata as $bio)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="nama">{{ $bio->nama }}</td>
                            <td>{{ $bio->nisn }}</td>
                            <td>{{ $bio->nis }}</td>
                            <td>{{ $bio->tempat_lahir . ', ' . \Carbon\Carbon::parse($bio->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
                            <td>{{ $bio->kelas }}</td>
                            <td>{{ $bio->tahun_lulus }}</td>
                            <td>{{ $bio->status_lulusan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
