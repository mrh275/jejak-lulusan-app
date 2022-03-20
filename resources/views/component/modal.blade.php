<div class="modal modal-hide" id="modal" style="z-index: 99">
    <div class="modal-container" style="overflow-y: scroll">
      <div class="modal-card card-xl">
        <div class="card-header" style="justify-content: start">
          <h2 style="font-weight: 600; font-size: 1.4rem; color: #334155" >Edit data <span class="nama-siswa"></span></h2>
        </div>
        <div class="card-body" style="margin-top: 1rem">
            <form action="" class="form-group" method="post">
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
                    <button type="submit" class="modal-submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" style="margin-left: 10px" id="modal-close">Tutup</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

@push('scripts')
<script>
    // Modal show toggle
    let modalButton = document.getElementById("modal-toggle");
        modalButton.addEventListener("click", function () {
            let selectedRow = document.querySelector("tr.selected");
            if(!selectedRow) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Pilih data terlebih dahulu',
                })
            } else {
                let modal = document.getElementById("modal");
                modal.classList.toggle("modal-hide");
                modal.classList.toggle("modal-show");
                let nis = document.querySelector('tr.selected td.nis').getAttributeNode('id').value;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : "{{ url('admin/biodata') }}/" + nis + "/edit",
                    type : 'GET',
                    dataType : 'json',
                    success : function(response){
                        $('#input-nis').val(response.data.nis);
                        $('#input-nisn').val(response.data.nisn);
                        $('#input-nama').val(response.data.nama);
                        $('.nama-siswa').text(response.data.nama);
                        $('#input-tempatLahir').val(response.data.tempat_lahir);
                        $('#input-tanggalLahir').val(response.data.tanggal_lahir.split("-").reverse().join("/"));
                        $('#input-jenisKelamin').val(response.data.jenis_kelamin);
                        $('#input-kelas').val(response.data.kelas);
                        $('#input-tahunLulus').val(response.data.tahun_lulus);
                        $('#input_statusLulusan').val(response.data.status_lulusan);
                        $('#input-alamat').val(response.data.alamat);
                    }
                });
            }
        });

        // Modal close toggle
        let modalClose = document.getElementById("modal-close");
        modalClose.addEventListener("click", function () {
            let modal = document.getElementById("modal");
            modal.classList.toggle("modal-hide");
            modal.classList.toggle("modal-show");
            $('#input-nis').val('');
            $('#input-nisn').val('');
            $('#input-nama').val('');
            $('.nama-siswa').text('');
            $('#input-tempatLahir').val('');
            $('#input-tanggalLahir').val('');
            $('#input-jenisKelamin').val('');
            $('#input-kelas').val('');
            $('#input-tahunLulus').val('');
            $('#input_statusLulusan').val('');
            $('#input-alamat').val('');
        });

        // Modal submit
        let modalSubmit = document.getElementById("modal-submit");
</script>
@endpush