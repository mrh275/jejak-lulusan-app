<div class="modal modal-hide" id="modal" style="z-index: 99">
    <div class="modal-container" style="overflow-y: scroll">
        <div class="modal-card card-xl">
            <div class="card-header" style="justify-content: start">
                <h2 style="font-weight: 600; font-size: 1.4rem; color: #334155">Edit data <span class="nama-siswa"></span></h2>
            </div>
            <div class="card-body" style="margin-top: 1rem">
                <form action="" class="form-group" id="modal-biodata">
                    @csrf
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-nama">Nama Lengkap</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="nama" readonly class="form-control" id="input-nama">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-nisn">NISN</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="number" name="nisn" readonly class="form-control" id="input-nisn" placeholder="Show data from biodata">
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
                            <select name="kelas" disabled id="input-kelas" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="12-ipa-1">12 IPA 1</option>
                                <option value="12-ipa-2">12 IPA 2</option>
                                <option value="12-ipa-3">12 IPA 3</option>
                                <option value="12-ipa-4">12 IPA 4</option>
                                <option value="12-ips-1">12 IPS 1</option>
                                <option value="12-ips-2">12 IPS 2</option>
                                <option value="12-ips-3">12 IPS 3</option>
                                <option value="12-ips-4">12 IPS 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tahunLulus">Tahun Lulus</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tahunLulus" readonly class="form-control" id="input-tahunLulus">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-kampus">Nama Kampus</label>
                        </div>
                        <div class="input-wrapper">
                            <input name="kampus" class="form-control" id="input-kampus" value="{{ old('kampus') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-fakultas">Fakultas</label>
                        </div>
                        <div class="input-wrapper">
                            <input name="fakultas" class="form-control" id="input-fakultas" value="{{ old('fakultas') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-jurusan">Jurusan/Prodi</label>
                        </div>
                        <div class="input-wrapper">
                            <input name="jurusan" class="form-control" id="input-jurusan" value="{{ old('jurusan') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-alamat-kampus">Alamat Kampus</label>
                        </div>
                        <div class="input-wrapper">
                            <textarea name="alamat" class="form-control" id="input-alamat-kampus" rows="3">{{ old('alamat') }}</textarea>
                        </div>
                    </div>

                    <div class="button-wrapper">
                        <button type="submit" class="btn btn-primary modal-submit">Submit</button>
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
        modalButton.addEventListener("click", function() {
            let selectedRow = document.querySelector("tr.selected");
            if (!selectedRow) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Pilih data terlebih dahulu',
                })
            } else {
                let modal = document.getElementById("modal");
                modal.classList.toggle("modal-hide");
                modal.classList.toggle("modal-show");
                let nis = document.querySelector('tr.selected td.nisn').getAttributeNode('id').value;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ url('admin/datakuliah') }}/" + nis + "/edit",
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        let nama = document.getElementById('input-nama');
                        let nisn = document.getElementById('input-nisn');
                        let kelas = document.getElementById('input-kelas');
                        let tahunLulus = document.getElementById('input-tahunLulus');
                        let kampus = document.getElementById('input-kampus');
                        let fakultas = document.getElementById('input-fakultas');
                        let jurusan = document.getElementById('input-jurusan');
                        let alamat = document.getElementById('input-alamat-kampus');
                        nama.value = response.biodata.nama;
                        nisn.value = response.biodata.nisn;
                        $('#input-jenisKelamin').val(response.biodata.jenis_kelamin);
                        kelas.value = response.biodata.kelas;
                        tahunLulus.value = response.biodata.tahun_lulus;
                        kampus.value = response.kuliah.kampus;
                        fakultas.value = response.kuliah.fakultas;
                        jurusan.value = response.kuliah.jurusan;
                        alamat.value = response.kuliah.alamat;
                    }
                });
            }
        });

        // Modal close toggle
        let modalClose = document.getElementById("modal-close");
        modalClose.addEventListener("click", function() {
            let modal = document.getElementById("modal");
            modal.classList.toggle("modal-hide");
            modal.classList.toggle("modal-show");
            let nama = document.getElementById('input-nama');
            let nisn = document.getElementById('input-nisn');
            let jenisKelamin = document.getElementById('input-jenisKelamin');
            let kelas = document.getElementById('input-kelas');
            let tahunLulus = document.getElementById('input-tahunLulus');
            let kampus = document.getElementById('input-kampus');
            let fakultas = document.getElementById('input-fakultas');
            let jurusan = document.getElementById('input-jurusan');
            let alamat = document.getElementById('input-alamat-kampus');
            nama.value = '';
            nisn.value = '';
            jenisKelamin.value = '';
            kelas.value = '';
            tahunLulus.value = '';
            kampus.value = '';
            fakultas.value = '';
            jurusan.value = '';
            alamat.value = '';
        });

        // Modal submit
        $('form#modal-biodata').on('submit', function(e) {
            e.preventDefault();

            let nis = $('input#input-nisn').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('admin/datakuliah/update') }}/" + nis,
                type: 'GET',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    Swal.fire({
                            title: 'Sedang menyimpan data...',
                            didOpen: () => {
                                Swal.showLoading()
                            },
                            timer: 2000,
                            width: '30rem',
                        })
                        .then((dismiss) => {
                            Swal.fire({
                                    icon: 'success',
                                    title: 'Data berhasil disimpan',
                                    padding: '1rem',
                                })
                                .then((result) => {
                                    if (result.value) {
                                        location.reload();
                                    }
                                });;
                        });
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    </script>
@endpush
