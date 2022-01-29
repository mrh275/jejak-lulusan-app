@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Form Data Kuliah Lulusan</h1>

        <div class="container">
            <form action="" class="form-group" method="post">
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Lengkap</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="nama" disabled class="form-control" id="input-nama">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nisn">NISN</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="number" name="nisn" disabled class="form-control" id="input-nisn" placeholder="Show data from biodata">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jenisKelamin">Jenis Kelamin</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="jenisKelamin" disabled id="input-jenisKelamin" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-kelas">Kelas</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="kelas" disabled id="kelas" class="form-control">
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
                        <select name="tahunLulus" disabled id="input-tahunLulus" class="form-control">
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
                        <label class="label-form" for="input-kampus">Nama Kampus</label>
                    </div>
                    <div class="input-wrapper">
                        <input name="kampus" class="form-control" id="input-kampus">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-fakultas">Fakultas</label>
                    </div>
                    <div class="input-wrapper">
                        <input name="fakultas" class="form-control" id="input-fakultas">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jurusan">Jurusan/Prodi</label>
                    </div>
                    <div class="input-wrapper">
                        <input name="jurusan" class="form-control" id="input-jurusan">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat-kampus">Alamat Kampus</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat-kampus" class="form-control" id="input-alamat-kampus" rows="3"></textarea>
                    </div>
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
