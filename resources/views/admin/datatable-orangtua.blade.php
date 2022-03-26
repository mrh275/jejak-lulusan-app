@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Tabel Data Orang Tua Lulusan</h1>

        <div style="margin-top: 10px">
            <button class="btn btn-warning" id="modal-toggle"><i class='bx bxs-edit'></i> Edit</button>
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
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataOrangTua as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="nama text-left">{{ $data->nama }}</td>
                            <td class="nisn" id="{{ $data->nisn }}">{{ $data->nisn }}</td>
                            <td>{{ Str::upper(str_replace('-', ' ', $data->kelas)) }}</td>
                            <td>{{ $data->tahun_lulus }}</td>
                            <td>{{ ($data->dataOrangTua->nama_ayah) ?? '' }}</td>
                            <td>{{ ($data->dataOrangTua->nama_ibu) ?? '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@include('component.modal-orangtua')