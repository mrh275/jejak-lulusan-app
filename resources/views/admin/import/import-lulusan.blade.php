@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Form Import Data Lulusan</h1>

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
            <h4 style="font-size: 1.2rem; font-weight: 600">Selamat datang di halaman import data lulusan.</h4>
            <p>
                Silahkan pilih file yang sudah di siapkan untuk di import.
            </p>

            <form action="{{ url('import/data-lulusan') }}" method="post" enctype="multipart/form-data" style="margin-top: 15px">
                @csrf
                <div class="form-group">
                    <label for="">Pilih File</label>
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="form-group" style="margin-top: 15px">
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>

            <p style="margin-top: 20px">
                Sebelum melakukan import data lulusan, pastikan format import yang disiapkan sesuai dengan yang sudah disediakan oleh aplikasi ini. Jika anda belum miliki format import, silahkan download format filenya <a href="{{ url('download/format-import') }}" style="color: #0077ff; font-weight: 600; text-decoration: underline">disini</a>
            </p>
            <h4 style="margin-top: 20px; font-weight: 600; font-size: 1.2rem">Keterangan :</h4>
            <ol type="1" style="list-style: decimal; margin-left: 25px;">
                <li>
                    Pastikan format file importnya adalah <b>Excel</b> dengan format <b>*.xlsx</b>.
                </li>
                <li>
                    Jangan pernah merubah format yang sudah diberikan!
                </li>
                <li>
                    Didalam file format import, sudah terdapat petunjuk pengisian dalam bentuk komentar untuk beberepa cell tertentu.
                </li>
                <li>
                    Untuk menampilkan petunjuk komentar, cukup klik pada cell yang memiliki tanda merah kecil di bagian kanan atas cell tersebut
                </li>
                <li>
                    Pada baris pertama adalah header yang berisi nama kolom yang harus diisi.
                </li>
                <li>
                    Pada barus kedua, sudah berisi data contoh untuk memudahkan dalam mengisi format import.
                </li>
            </ol>
        </div>
    </div>
@endsection