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
                            <label class="label-form" for="input-perusahaan">Nama Perusahaan</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="nama_perusahaan" class="form-control" id="input-perusahaan" value="{{ old('nama_perusahaan', $job->nama_perusahaan ?? '') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-jenis-industri">Bidang Industri</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="industri" class="form-control" id="input-jenis-industri" value="{{ old('industri', $job->industri ?? '') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-divisi">Divisi/Bagian</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="divisi" class="form-control" id="input-divisi" value="{{ old('divisi', $job->divisi ?? '') }}"">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-jabatan">Jabatan</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="jabatan" class="form-control" id="input-jabatan" value="{{ old('jabatan', $job->jabatan ?? '') }}"">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-alamat-perusahaan">Alamat Perusahaan</label>
                        </div>
                        <div class="input-wrapper">
                            <textarea name="alamat_perusahaan" class="form-control" id="input-alamat-perusahaan" rows="3">{{ old('alamat_perusahaan', $job->alamat_perusahaan ?? '') }}</textarea>
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
                    url: "{{ url('admin/datapekerjaan') }}/" + nis + "/edit",
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        document.getElementById("input-nama").value = response.biodata.nama;
                        document.getElementById("input-nisn").value = response.biodata.nisn;
                        $('#input-jenisKelamin').val(response.biodata.jenis_kelamin);
                        document.getElementById("input-kelas").value = response.biodata.kelas;
                        document.getElementById("input-tahunLulus").value = response.biodata.tahun_lulus;
                        document.getElementById("input-perusahaan").value = response.pekerjaan.nama_perusahaan;
                        document.getElementById("input-jenis-industri").value = response.pekerjaan.industri;
                        document.getElementById("input-divisi").value = response.pekerjaan.divisi;
                        document.getElementById("input-jabatan").value = response.pekerjaan.jabatan;
                        document.getElementById("input-alamat-perusahaan").value = response.pekerjaan.alamat_perusahaan;
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
                url: "{{ url('admin/datapekerjaan/update') }}/" + nis,
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
