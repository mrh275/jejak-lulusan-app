<table>
    <tr>
        <td style="font-size: 16px; font-weight: 600" colspan="11">Export Data Lulusan</td>
    </tr>
    <tr>
        <td colspan="11">Tanggal Export : {{ date("Y-m-d H:i") }}</td>
    </tr>
    <tr>
        <td colspan="11">User Export : {{ Auth::user()->name }}</td>
    </tr>
    <tr></tr>
    <thead class="heading">
        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">No</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">NISN</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">NIS</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Nama</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">JK</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Tempat Lahir</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Tanggal lahir</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Kelas</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Tahun Lulus</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Status Kelulusan</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Alamat</td>
        </tr>
    </thead>
    <tbody class="body">
        @foreach($biodata as $data => $value)
        <tr style="border: 1px solid black">
            <td style="border: 1px solid black; word-wrap: break-word;">{{ $loop->iteration }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ $value->nisn }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ $value->nis }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ $value->nama }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ $value->jenis_kelamin }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ $value->tempat_lahir }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ \Carbon\Carbon::parse($value->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ Str::upper(str_replace('-', ' ', $value->kelas)) }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ $value->tahun_lulus }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">
                @if ($value->status_lulusan == 1)
                    {{ 'Kuliah' }}
                @elseif ($value->status_lulusan == 2)
                    {{ 'Kerja' }}
                @else
                    {{ 'Kuliah dan Kerja' }}
                @endif
            </td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ $value->alamat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>