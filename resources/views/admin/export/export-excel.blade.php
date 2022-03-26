<table>
    <thead>
        <tr>
            <td>No</td>
            <td>NISN</td>
            <td>NIS</td>
            <td>Nama</td>
            <td>JK</td>
            <td>Tempat Lahir</td>
            <td>Tanggal lahir</td>
            <td>Kelas</td>
            <td>Tahun Lulus</td>
            <td>Status Kelulusan</td>
            <td>Alamat</td>
        </tr>
    </thead>
    <tbody>
        @foreach($biodata as $data => $value)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->nisn }}</td>
            <td>{{ $value->nis }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->jenis_kelamin }}</td>
            <td>{{ $value->tempat_lahir }}</td>
            <td>{{ \Carbon\Carbon::parse($value->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
            <td>{{ Str::upper(str_replace('-', ' ', $value->kelas)) }}</td>
            <td>{{ $value->tahun_lulus }}</td>
            <td>
                @if ($value->status_lulusan == 1)
                    {{ 'Kuliah' }}
                @elseif ($value->status_lulusan == 2)
                    {{ 'Kerja' }}
                @else
                    {{ 'Kuliah dan Kerja' }}
                @endif
            </td>
            <td>{{ $value->alamat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>