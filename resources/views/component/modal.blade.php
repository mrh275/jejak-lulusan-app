<div class="modal modal-hide" id="modal" style="z-index: 99">
    <div class="modal-container" style="overflow-y: scroll">
      <div class="modal-card card-xl">
        <button type="button" id="modal-close" class="modal-close">
          <i class="fa fa-times" aria-hidden="true"></i>
        </button>
        <div class="card-header" style="justify-content: start">
          <h2 style="font-weight: 600; font-size: 1.4rem; color: #334155" >Edit data Siswa</h2>
        </div>
        <div class="card-body" style="margin-top: 1rem">
            <form action="{{ url('/biodata/') }}" class="form-group" method="post">
                @method('put')
                @csrf
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nama">Nama Lengkap</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="nama" class="form-control" id="input-nama" value="{{ old('nama')}}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nisn">NISN</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="number" name="nisn" class="form-control" id="input-nisn" value="{{ old('nisn') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-nis">NIS</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="number" name="nis" class="form-control" id="input-nis" value="{{ old('nis') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-jenisKelamin">Jenis Kelamin</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="jenis_kelamin" id="input-jenisKelamin" class="form-control">
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
                        <input type="text" name="tempat_lahir" class="form-control" id="input-tempatLahir" value="{{ old('tempat_lahir') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="tanggal_lahir" class="form-control" id="input-tanggalLahir" >
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-kelas">Kelas</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="kelas" id="input-kelas" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="12-ipa-1" >12 IPA 1</option>
                            <option value="12-ipa-2" >12 IPA 2</option>
                            <option value="12-ipa-3" >12 IPA 3</option>
                            <option value="12-ipa-4" >12 IPA 4</option>
                            <option value="12-ips-1" >12 IPS 1</option>
                            <option value="12-ips-2" >12 IPS 2</option>
                            <option value="12-ips-3" >12 IPS 3</option>
                            <option value="12-ips-4" >12 IPS 4</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-tahunLulus">Tahun Lulus</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="tahun_lulus" class="form-control" id="input-tahunLulus" value="{{ old('tahun_lulus') }}">
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-statusLulusan">Status Lulus</label>
                    </div>
                    <div class="input-wrapper">
                        <select name="status_lulusan" id="input_statusLulusan" class="form-control">
                            <option value="">Pilih :</option>
                            <option value="1" >Kuliah</option>
                            <option value="2" >Bekerja</option>
                            <option value="3" >Kuliah dan Kerja</option>
                        </select>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="label-wrapper">
                        <label class="label-form" for="input-alamat">Alamat</label>
                    </div>
                    <div class="input-wrapper">
                        <textarea name="alamat" class="form-control" id="input-alamat" rows="3">{{ old('alamat') }}</textarea>
                    </div>
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>