@extends('layout.admin.main')

@section('content')
<div class="content">
    <h1 class="content-title">Export Data Lulusan Angkatan</h1>

    <div class="container" style="margin-top: 15px">
        <h5 style="font-size: 1.3rem; font-weight: 600">
            Selamat datang di halaman export data lulusan.
        </h5>
        <p>
            Di halaman ini anda dapat melakukan ekspor data lulusan berdasarkan angkatan. Sebelum melakukan ekspor, pastikan anda mengikuti petunjuk yang ada di bawah ini.
        </p>

        <form action="{{ url('admin/export-angkatan') }}" method="post" id="export-angkatan" style="margin-top: 20px">
            @csrf
            <div class="form-group" style="margin-bottom: 15px">
                <label for="angkatan">Pilih Angkatan</label>
                <select name="angkatan" id="angkatan" class="form-control">
                    <option value="">Pilih Angkatan</option>
                    @foreach ($angkatan as $item)
                        <option value="{{ $item->tahun_lulus }}">{{ $item->tahun_lulus }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ekspor</button>
        </form>
    </div>

</div>
@endsection

{{-- @push('scripts')
    <script>
        $(document).ready(function() {
            $('#angkatan').on('change', function() {
                let angkatan = $(this).val();
                $.ajax({
                    url: "{{ url('admin/get-kelas') }}/" + angkatan,
                    type: 'GET',
                    data: {"_token":"{{ csrf_token() }}"},
                    dataType: "json",
                    success: function(data) {
                        let html = '<option value="">Pilih Kelas</option>';
                        $.each(data, function(key, value) {
                            if (value.tahun_lulus == angkatan) {
                                html += '<option value="'+value.kelas+'">'+value.kelas.split("-").join(" ").toUpperCase()+'</option>';
                            }
                        });
                        $('#kelas').html(html);
                    }
                });
            });
        });
    </script>    
@endpush --}}
