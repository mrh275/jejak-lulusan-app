@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Tabel Biodata Lulusan</h1>

        <div>
            <button class="btn btn-primary" id="modal-toggle">Modal</button>
        </div>

        <div class="container">
            <table class="table-biodata stripe hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>TTL</th>
                        <th>Kelas</th>
                        <th>Tahun Lulus</th>
                        <th>Status Lulusan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodata as $bio)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="nama">{{ $bio->nama }}</td>
                            <td>{{ $bio->nisn }}</td>
                            <td class="nis" id="{{ $bio->nis }}">{{ $bio->nis }}</td>
                            <td>{{ $bio->tempat_lahir . ', ' . \Carbon\Carbon::parse($bio->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
                            <td>{{ Str::upper(str_replace('-', ' ', $bio->kelas)) }}</td>
                            <td>{{ $bio->tahun_lulus }}</td>
                            <td>
                            @if ($bio->status_lulusan == 1)
                                {{ 'Kuliah' }}
                            @elseif ($bio->status_lulusan == 2)
                                {{ 'Kerja' }}
                            @else
                                {{ 'Kuliah dan Kerja' }}
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@push('scripts')
<script>
    // Modal show toggle
    let modalButton = document.getElementById("modal-toggle");
        modalButton.addEventListener("click", function () {
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

                    console.log("===== " + response.data.nama + " =====");

                }
            });
        });

        // Modal close toggle
        let modalClose = document.getElementById("modal-close");
        modalClose.addEventListener("click", function () {
            let modal = document.getElementById("modal");
            modal.classList.toggle("modal-hide");
            modal.classList.toggle("modal-show");
        });
</script>
@endpush