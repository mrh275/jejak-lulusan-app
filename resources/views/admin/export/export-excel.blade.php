<table>
    <tr>
        <td style="font-size: 16px; font-weight: 600" colspan="11">Export Data Lulusan</td>
    </tr>
    <tr>
        <td colspan="11">Data Angkatan : {{ $title }}</td>
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
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Nama Kampus</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Fakultas</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Program Studi</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Alamat Kampus</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Nama Perusahaan</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Industri</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Divisi</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Jabatan</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Alamat Perusahaan</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Nama Ayah</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Tempat Lahir Ayah</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Tanggal Lahir Ayah</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Pendidikan Ayah</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Pekerjaan Ayah</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Penghasilan Ayah</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Alamat Ayah</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Nama Ibu</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Tempat Lahir Ibu</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Tanggal Lahir Ibu</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Pendidikan Ibu</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Pekerjaan Ibu</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Penghasilan Ibu</td>
            <td style="border: 1px solid black; font-weight: 600;text-align: center;">Alamat Ibu</td>
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
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->kuliah->kampus) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->kuliah->fakultas) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->kuliah->jurusan) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->kuliah->alamat) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->pekerjaan->nama_perusahaan) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->pekerjaan->industri) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->pekerjaan->divisi) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->pekerjaan->jabatan) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->pekerjaan->alamat_perusahaan) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->dataOrangTua->nama_ayah) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->dataOrangTua->tempat_lahir_ayah) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">
                @if (isset($value->dataOrangTua->tanggal_lahir_ayah))
                    {{ \Carbon\Carbon::parse($value->dataOrangTua->tanggal_lahir_ayah)->isoFormat('D MMMM Y') }}
                @endif
            </td>
            <td style="border: 1px solid black; word-wrap: break-word;">
                @if (isset($value->dataOrangTua->pendidikan_ayah))
                    @if ($value->dataOrangTua->pendidikan_ayah == 1)
                        {{ 'Tidak Bersekolah' }}
                    @elseif ($value->dataOrangTua->pendidikan_ayah == 2)
                        {{ 'SD' }}
                    @elseif ($value->dataOrangTua->pendidikan_ayah == 3)
                        {{ 'SMP' }}
                    @elseif ($value->dataOrangTua->pendidikan_ayah == 4)
                        {{ 'SMA' }}
                    @elseif ($value->dataOrangTua->pendidikan_ayah == 5)
                            {{ 'D1' }}
                    @elseif ($value->dataOrangTua->pendidikan_ayah == 6)
                            {{ 'D2' }}
                    @elseif($value->dataOrangTua->pendidikan_ayah == 7)
                            {{ 'D3' }}
                    @elseif ($value->dataOrangTua->pendidikan_ayah == 8)
                            {{ 'D4/S1' }}
                    @elseif ($value->dataOrangTua->pendidikan_ayah == 9)
                            {{ 'S2' }}
                    @elseif ($value->dataOrangTua->pendidikan_ayah == 10)
                            {{ 'S3' }}
                    @endif
                @endif
            </td>
            <td style="border: 1px solid black; word-wrap: break-word;">
                @if (isset($value->dataOrangTua->pekerjaan_ayah))
                    @if ($value->dataOrangTua->pekerjaan_ayah == 1)
                        {{ 'Tidak Bekerja' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 2)
                        {{ 'PNS' }}
                    @elseif($value->dataOrangTua->pekerjaan_ayah == 3)
                        {{ 'TNI' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 4)
                        {{ 'Polri' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 5)
                        {{ 'Pegawai Swasta' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 6)
                        {{ 'Wiraswasta' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 7)
                        {{ 'Petani' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 8)
                        {{ 'Buruh' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 9)
                        {{ 'Nelayan' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 10)
                        {{ 'Pedagang' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 11)
                        {{ 'Pensiunan' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 12)
                        {{ 'Peternak' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 13)
                        {{ 'Pengusaha' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ayah == 99)
                        {{ 'Lainnya' }}
                    @endif
                @endif
            </td>
            <td style="border: 1px solid black; word-wrap: break-word;">
                @if (isset($value->dataOrangTua->penghasilan_ayah))
                    @if ($value->dataOrangTua->penghasilan_ayah == 1)
                        {{ 'Tidak Berpenghasilan' }}
                    @elseif ($value->dataOrangTua->penghasilan_ayah == 2)
                        {{ 'Kurang dari Rp. 1.000.000' }}
                    @elseif ($value->dataOrangTua->penghasilan_ayah == 3)
                        {{ 'Rp. 1.000.000 - Rp. 3.000.000' }}
                    @elseif ($value->dataOrangTua->penghasilan_ayah == 4)
                        {{ 'Rp. 3.000.000 - Rp. 5.000.000' }}
                    @elseif ($value->dataOrangTua->penghasilan_ayah == 5)
                        {{ 'Rp. 5.000.000 - Rp. 10.000.000' }}
                    @elseif ($value->dataOrangTua->penghasilan_ayah == 6)
                        {{ 'Rp. 10.000.000 - Rp. 20.000.000' }}
                    @elseif ($value->dataOrangTua->penghasilan_ayah == 7)
                        {{ 'Lebih dari Rp. 20.000.000' }}
                    @endif
                @endif
            </td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->dataOrangTua->alamat_ayah) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->dataOrangTua->nama_ibu) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->dataOrangTua->tempat_lahir_ibu) ?? '-' }}</td>
            <td style="border: 1px solid black; word-wrap: break-word;">
                @if (isset($value->dataOrangTua->tanggal_lahir_ibu))
                    {{ \Carbon\Carbon::parse($value->dataOrangTua->tanggal_lahir_ibu)->isoFormat('D MMMM Y') }}
                @endif
            </td>
            <td style="border: 1px solid black; word-wrap: break-word;">
                @if (isset($value->dataOrangTua->pendidikan_ibu))
                    @if ($value->dataOrangTua->pendidikan_ibu == 1)
                        {{ 'Tidak Bersekolah' }}
                    @elseif ($value->dataOrangTua->pendidikan_ibu == 2)
                        {{ 'SD' }}
                    @elseif ($value->dataOrangTua->pendidikan_ibu == 3)
                        {{ 'SMP' }}
                    @elseif ($value->dataOrangTua->pendidikan_ibu == 4)
                        {{ 'SMA' }}
                    @elseif ($value->dataOrangTua->pendidikan_ibu == 5)
                            {{ 'D1' }}
                    @elseif ($value->dataOrangTua->pendidikan_ibu == 6)
                            {{ 'D2' }}
                    @elseif($value->dataOrangTua->pendidikan_ibu == 7)
                            {{ 'D3' }}
                    @elseif ($value->dataOrangTua->pendidikan_ibu == 8)
                            {{ 'D4/S1' }}
                    @elseif ($value->dataOrangTua->pendidikan_ibu == 9)
                            {{ 'S2' }}
                    @elseif ($value->dataOrangTua->pendidikan_ibu == 10)
                            {{ 'S3' }}
                    @endif
                @endif
            </td>
            <td style="border: 1px solid black; word-wrap: break-word;">
                @if (isset($value->dataOrangTua->pekerjaan_ibu))
                    @if ($value->dataOrangTua->pekerjaan_ibu == 1)
                        {{ 'Tidak Bekerja' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 2)
                        {{ 'PNS' }}
                    @elseif($value->dataOrangTua->pekerjaan_ibu == 3)
                        {{ 'TNI' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 4)
                        {{ 'Polri' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 5)
                        {{ 'Pegawai Swasta' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 6)
                        {{ 'Wiraswasta' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 7)
                        {{ 'Petani' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 8)
                        {{ 'Buruh' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 9)
                        {{ 'Nelayan' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 10)
                        {{ 'Pedagang' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 11)
                        {{ 'Pensiunan' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 12)
                        {{ 'Peternak' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 13)
                        {{ 'Pengusaha' }}
                    @elseif ($value->dataOrangTua->pekerjaan_ibu == 99)
                        {{ 'Lainnya' }}
                    @endif
                @endif
            </td>
            <td style="border: 1px solid black; word-wrap: break-word;">
                @if (isset($value->dataOrangTua->penghasilan_ibu))
                    @if ($value->dataOrangTua->penghasilan_ibu == 1)
                        {{ 'Tidak Berpenghasilan' }}
                    @elseif ($value->dataOrangTua->penghasilan_ibu == 2)
                        {{ 'Kurang dari Rp. 1.000.000' }}
                    @elseif ($value->dataOrangTua->penghasilan_ibu == 3)
                        {{ 'Rp. 1.000.000 - Rp. 3.000.000' }}
                    @elseif ($value->dataOrangTua->penghasilan_ibu == 4)
                        {{ 'Rp. 3.000.000 - Rp. 5.000.000' }}
                    @elseif ($value->dataOrangTua->penghasilan_ibu == 5)
                        {{ 'Rp. 5.000.000 - Rp. 10.000.000' }}
                    @elseif ($value->dataOrangTua->penghasilan_ibu == 6)
                        {{ 'Rp. 10.000.000 - Rp. 20.000.000' }}
                    @elseif ($value->dataOrangTua->penghasilan_ibu == 7)
                        {{ 'Lebih dari Rp. 20.000.000' }}
                    @endif
                @endif
            </td>
            <td style="border: 1px solid black; word-wrap: break-word;">{{ ($value->dataOrangTua->alamat_ibu) ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>