<body onload="window.print()">

<h1>Data Nilai Siswa</h1>
<table border="1" width="75%">
    <tr>
                <td>No</td>
                <td>Nama Guru</td>
                <td>Nama Siswa</td>
                <td>Nilai Pelajaran</td>
                <td>Nilai UTS</td>
                <td>Nilai UAS</td>
        
                <td>Tanggal</td>
    </tr>

    @foreach($nilai as $rows)
    <tr>
    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->guru->nama_guru }}</td>
                    <td>{{ $rows->siswa->nama_siswa }}</td>
                    <td>{{ $rows->nilai_pelajaran}} </td>
                    <td>{{ $rows->nilai_uts}} </td>
                    <td>{{ $rows->nilai_uas }} </td>
                    <td>{{ $rows->created_at }}</td>
    </tr>
    @endforeach
</table>
    
</body>