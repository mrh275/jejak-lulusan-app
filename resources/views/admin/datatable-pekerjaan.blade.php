@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Tabel Data Pekerjaan Lulusan</h1>

        <div style="margin-top: 10px">
            <button type="button" class="btn btn-warning" id="modal-toggle"><i class='bx bxs-edit'></i> Edit</button>
        </div>

        <div class="container">
            <table class="table-biodata stripe hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Kelas</th>
                        <th>Tahun Lulus</th>
                        <th>Nama Perusahaan</th>
                        <th>Divisi/Bagian</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pekerjaan as $data)
                        @if (!isset($data->pekerjaan->nisn_pekerjaan))
                            {{ '' }}
                        @else
                            <tr>
                                <td class="number"></td>
                                <td class="nama">{{ $data->nama }}</td>
                                <td class="nisn" id="{{ $data->nisn }}">{{ $data->nisn }}</td>
                                <td>{{ Str::upper(str_replace('-', ' ', $data->kelas)) }}</td>
                                <td>{{ $data->tahun_lulus }}</td>
                                <td>{{ $data->pekerjaan->nama_perusahaan }}</td>
                                <td>{{ $data->pekerjaan->divisi }}</td>
                                <td>{{ $data->pekerjaan->jabatan }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@include('component.modal-pekerjaan')