@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Form Biodata Lulusan</h1>

        <div class="container">
            <form action="" class="form-group" method="post">
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Lengkap</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="nama" class="form-control" id="input-nama">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nisn">NISN</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="number" name="nisn" class="form-control" id="input-nisn">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nis">NIS</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="number" name="nis" class="form-control" id="input-nis">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jenisKelamin">Jenis Kelamin</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="jenisKelamin" id="input-jenisKelamin" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tempatLahir">Tempat Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="tempatLahir" class="form-control" id="input-tempatLahir">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" readonly name="tanggalLahir" class="form-control" id="input-tanggalLahir">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-kelas">Kelas</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="kelas" id="kelas" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="12-ipa-1">12 IPA 1</option>
                            <option value="12-ipa-2">12 IPA 2</option>
                            <option value="12-ips-1">12 IPS 1</option>
                            <option value="12-ips-2">12 IPS 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tahunLulus">Tahun Lulus</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="tahunLulus" id="input-tahunLulus" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat">Alamat</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat" class="form-control" id="input-alamat" rows="3"></textarea>
                    </div>
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
