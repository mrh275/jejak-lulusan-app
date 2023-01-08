<div class="modal modal-hide" id="modal" style="z-index: 99">
    <div class="modal-container" style="overflow-y: scroll">
        <div class="modal-card card-xl">
            <div class="card-header" style="justify-content: start">
                <h2 style="font-weight: 600; font-size: 1.4rem; color: #334155">Edit data <span class="nama-siswa"></span></h2>
            </div>
            <div class="card-body" style="margin-top: 1rem">
                <form action="" class="form-group" id="modal-orangtua">
                    @csrf
                    <input type="hidden" name="nisn" id="input-nisn" value="">
                    <!-- Form Data Ayah -->
                    <h3 class="ayah-title">Data Ayah</h3>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-nama">Nama Ayah</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="nama_ayah" class="form-control" id="input-nama-ayah" value="{{ old('nama_ayah') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tempatLahir">Tempat Lahir</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tempat_lahir_ayah" class="form-control" id="input-tempatLahir-ayah" value="{{ old('tempat_lahir_ayah') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tanggal_lahir_ayah" class="form-control input-tanggal-lahir-ayah" id="input-tanggalLahir" value="{{ old('tanggal_lahir_ayah') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-pendidikan-ayah">Pendidikan Terakhir</label>

                        </div>
                        <div class="input-wrapper">
                            <select name="pendidikan_ayah" id="input-pendidikan-ayah" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="1">Tidak Bersekolah</option>
                                <option value="2">SD</option>
                                <option value="3">SMP</option>
                                <option value="4">SMA</option>
                                <option value="5">D1</option>
                                <option value="6">D2</option>
                                <option value="7">D3</option>
                                <option value="8">D4/S1</option>
                                <option value="9">S2</option>
                                <option value="10">S3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-pekerjaan-ayah">Pekerjaan</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="pekerjaan_ayah" id="input-pekerjaan-ayah" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="1">Tidak Bekerja</option>
                                <option value="2">PNS</option>
                                <option value="3">TNI</option>
                                <option value="4">Polri</option>
                                <option value="5">Pegawai Swasta</option>
                                <option value="6">Wiraswasta</option>
                                <option value="7">Petani</option>
                                <option value="8">Buruh</option>
                                <option value="9">Nelayan</option>
                                <option value="10">Pedagang</option>
                                <option value="11">Pensiunan</option>
                                <option value="12">Peternak</option>
                                <option value="13">Pengusaha</option>
                                <option value="99">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-penghasilan-ayah">Penghasilan</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="penghasilan_ayah" id="input-penghasilan-ayah" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="1">Tidak Berpenghasilan</option>
                                <option value="2">Kurang dari Rp. 1.000.000</option>
                                <option value="3">Rp. 1.000.000 - Rp. 3.000.000</option>
                                <option value="4">Rp. 3.000.000 - Rp. 5.000.000</option>
                                <option value="5">Rp. 5.000.000 - Rp. 10.000.000</option>
                                <option value="6">Rp. 10.000.000 - Rp. 20.000.000</option>
                                <option value="7">Lebih dari Rp. 20.000.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-alamat-ayah">Alamat</label>
                        </div>
                        <div class="input-wrapper">
                            <textarea name="alamat_ayah" class="form-control" id="input-alamat-ayah" rows="3">{{ old('alamat_ayah') }}</textarea>
                        </div>
                    </div>

                    <!-- Form Data Ibu -->
                    <h3 class="ibu-title">Data Ibu</h3>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-nama">Nama Ibu</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="nama_ibu" class="form-control" id="input-nama-ibu" value="{{ old('nama_ibu') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tempatLahir">Tempat Lahir</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tempat_lahir_ibu" class="form-control" id="input-tempatLahir-ibu" value="{{ old('tempat_lahir_ibu') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-tanggalLahir">Tanggal Lahir</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="tanggal_lahir_ibu" class="form-control input-tanggal-lahir-ibu" id="input-tanggalLahir" value="{{ old('tanggal_lahir_ibu') }}">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-pendidikan-ibu">Pendidikan Terakhir</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="pendidikan_ibu" id="input-pendidikan-ibu" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="1">Tidak Bersekolah</option>
                                <option value="2">SD</option>
                                <option value="3">SMP</option>
                                <option value="4">SMA</option>
                                <option value="5">D1</option>
                                <option value="6">D2</option>
                                <option value="7">D3</option>
                                <option value="8">D4/S1</option>
                                <option value="9">S2</option>
                                <option value="10">S3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-pekerjaan-ibu">Pekerjaan</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="pekerjaan_ibu" id="input-pekerjaan-ibu" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="1">Tidak Bekerja</option>
                                <option value="2">PNS</option>
                                <option value="3">TNI</option>
                                <option value="4">Polri</option>
                                <option value="5">Pegawai Swasta</option>
                                <option value="6">Wiraswasta</option>
                                <option value="7">Petani</option>
                                <option value="8">Buruh</option>
                                <option value="9">Nelayan</option>
                                <option value="10">Pedagang</option>
                                <option value="11">Pensiunan</option>
                                <option value="12">Peternak</option>
                                <option value="13">Pengusaha</option>
                                <option value="99">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-penghasilan-ibu">Penghasilan</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="penghasilan_ibu" id="input-penghasilan-ibu" class="form-control">
                                <option value="">Pilih :</option>
                                <option value="1">Tidak Berpenghasilan</option>
                                <option value="2">Kurang dari Rp. 1.000.000</option>
                                <option value="3">Rp. 1.000.000 - Rp. 3.000.000</option>
                                <option value="4">Rp. 3.000.000 - Rp. 5.000.000</option>
                                <option value="5">Rp. 5.000.000 - Rp. 10.000.000</option>
                                <option value="6">Rp. 10.000.000 - Rp. 20.000.000</option>
                                <option value="7">Lebih dari Rp. 20.000.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-alamat-ibu">Alamat</label>
                        </div>
                        <div class="input-wrapper">
                            <textarea name="alamat_ibu" class="form-control" id="input-alamat-ibu" rows="3">{{ old('alamat_ibu') }}</textarea>
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
                    url: "{{ url('admin/dataorangtua') }}/" + nis + "/edit",
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#input-nisn').val(response.data.nisn_orang_tua);
                        $('#input-nama-ayah').val(response.data.nama_ayah);
                        $('#input-tempatLahir-ayah').val(response.data.tempat_lahir_ayah);
                        $('.input-tanggal-lahir-ayah').val(response.data.tanggal_lahir_ayah.split("-").reverse().join("/"));
                        $('#input-pendidikan-ayah').val(response.data.pendidikan_ayah);
                        $('#input-pekerjaan-ayah').val(response.data.pekerjaan_ayah);
                        $('#input-penghasilan-ayah').val(response.data.penghasilan_ayah);
                        $('#input-alamat-ayah').val(response.data.alamat_ayah);
                        $('#input-nama-ibu').val(response.data.nama_ibu);
                        $('#input-tempatLahir-ibu').val(response.data.tempat_lahir_ibu);
                        $('.input-tanggal-lahir-ibu').val(response.data.tanggal_lahir_ibu.split("-").reverse().join("/"));
                        $('#input-pendidikan-ibu').val(response.data.pendidikan_ibu);
                        $('#input-pekerjaan-ibu').val(response.data.pekerjaan_ibu);
                        $('#input-penghasilan-ibu').val(response.data.penghasilan_ibu);
                        $('#input-alamat-ibu').val(response.data.alamat_ibu);
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
        $('form#modal-orangtua').on('submit', function(e) {
            e.preventDefault();

            let nis = $('input#input-nisn').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('admin/dataorangtua/update') }}/" + nis,
                type: 'POST',
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
