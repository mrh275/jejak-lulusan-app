@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Form Data Orang Tua</h1>

        <div class="container">
            <form action="" class="form-group" method="post">

                <!-- Form Data Ayah -->
                <h3 class="ayah-title">Data Ayah</h3>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Ayah</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="nama-ayah" class="form-control" id="input-nama">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jenisKelamin">Jenis Kelamin</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="jenis-kelamin-ayah" id="input-jenisKelamin" class="form-control">
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
                        <input type="text" name="tempat-lahir-ayah" class="form-control" id="input-tempatLahir">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" readonly name="tanggal-lahir-ayah" class="form-control" id="input-tanggalLahir">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pendidikan-ayah">Pendidikan Terakhir</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pendidikan-ayah" id="input-pendidikan-ayah" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="tidak-sekolah">Tidak bersekolah</option>
                            <option value="sd">SD/MI Sederajat</option>
                            <option value="smp">SMP/MTs Sederajat</option>
                            <option value="sma">SMA/SMK/MA/MAK Sederajat</option>
                            <option value="d1">Diploma 1 (D1)</option>
                            <option value="d2">Diploma 2 (D2)</option>
                            <option value="d3">Diploma 3 (D3)</option>
                            <option value="s1">Sarjana/Diploma 4 (S1/D4)</option>
                            <option value="s2">Magister (S2)</option>
                            <option value="s3">Doktor/Insinyur (S3)</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pekerjaan-ayah">Pekerjaan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pekerjaan-ayah" id="input-pekerjaan-ayah" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="tidak-bekerja">Tidak Bekerja</option>
                            <option value="1">Buruh</option>
                            <option value="2">Petani</option>
                            <option value="3">Nelayan</option>
                            <option value="4">Pedagang</option>
                            <option value="5">Pegawai Swasta</option>
                            <option value="6">Wirausaha</option>
                            <option value="7">Wiraswasta</option>
                            <option value="8">PNS/TNI/Polri</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-penghasilan-ayah">Penghasilan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="penghasilan-ayah" id="input-penghasilan-ayah" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="0">Tidak berpenghasilan</option>
                            <option value="1">500.000 - 999.999</option>
                            <option value="2">1.000.000 - 1.999.999</option>
                            <option value="3">2.000.000 - 2.999.999</option>
                            <option value="4">3.000.000 - 3.999.999</option>
                            <option value="5">4.000.000 - 4.999.999</option>
                            <option value="6">5.000.000 - 10.000.000</option>
                            <option value="7">> 10.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat-ayah">Alamat</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat-ayah" class="form-control" id="input-alamat-ayah" rows="3"></textarea>
                    </div>
                </div>

                <!-- Form Data Ibu -->
                <h3 class="ibu-title">Data Ibu</h3>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Ibu</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="nama-ibu" class="form-control" id="input-nama">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jenisKelamin">Jenis Kelamin</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="jenis-kelamin-ibu" id="input-jenisKelamin" class="form-control">
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
                        <input type="text" name="tempat-lahir-ibu" class="form-control" id="input-tempatLahir">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" readonly name="tanggal-lahir-ibu" class="form-control" id="input-tanggalLahir">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pendidikan-ibu">Pendidikan Terakhir</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pendidikan-ibu" id="input-pendidikan-ibu" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="tidak-sekolah">Tidak bersekolah</option>
                            <option value="sd">SD/MI Sederajat</option>
                            <option value="smp">SMP/MTs Sederajat</option>
                            <option value="sma">SMA/SMK/MA/MAK Sederajat</option>
                            <option value="d1">Diploma 1 (D1)</option>
                            <option value="d2">Diploma 2 (D2)</option>
                            <option value="d3">Diploma 3 (D3)</option>
                            <option value="s1">Sarjana/Diploma 4 (S1/D4)</option>
                            <option value="s2">Magister (S2)</option>
                            <option value="s3">Doktor/Insinyur (S3)</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-pekerjaan-ibu">Pekerjaan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="pekerjaan-ibu" id="input-pekerjaan-ibu" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="tidak-bekerja">Tidak Bekerja</option>
                            <option value="1">Buruh</option>
                            <option value="2">Petani</option>
                            <option value="3">Nelayan</option>
                            <option value="4">Pedagang</option>
                            <option value="5">Pegawai Swasta</option>
                            <option value="6">Wirausaha</option>
                            <option value="7">Wiraswasta</option>
                            <option value="8">PNS/TNI/Polri</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-penghasilan-ibu">Penghasilan</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="penghasilan-ibu" id="input-penghasilan-ibu" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="0">Tidak berpenghasilan</option>
                            <option value="1">500.000 - 999.999</option>
                            <option value="2">1.000.000 - 1.999.999</option>
                            <option value="3">2.000.000 - 2.999.999</option>
                            <option value="4">3.000.000 - 3.999.999</option>
                            <option value="5">4.000.000 - 4.999.999</option>
                            <option value="6">5.000.000 - 10.000.000</option>
                            <option value="7">> 10.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat-ibu">Alamat</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat-ibu" class="form-control" id="input-alamat-ibu" rows="3"></textarea>
                    </div>
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>


@endsection
