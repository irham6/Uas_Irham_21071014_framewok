@extends('layout.main')
@section('content')

<h1>Nilai Pelajaran</h1>
<div class="card">
            <a class="btn btn-primary btn-sm" href="{{ route('cetak_nilai') }}" target="_BLANK">Cetak Data Nilai</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Guru</td>
                <td>Nama Siswa</td>
                <td>Pelajaran</td>
                <td>Nilai UTS</td>
                <td>Nilai UAS</td>
        
                <td>Tanggal</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($nilai as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->guru->nama_guru }}</td>
                    <td>{{ $rows->siswa->nama_siswa }}</td>
                    <td>{{ $rows->nilai_pelajaran}} </td>
                    <td>{{ $rows->nilai_uts}} </td>
                    <td>{{ $rows->nilai_uas }} </td>
                    <td>{{ $rows->created_at }}</td>
                    <td>
                        <a href="{{ route('kurikulum.edit', $rows->id) }}">Edit</a>                                      
                    </td>
                    <td> 
                    <form action="{{ route('kurikulum.destroy', $rows->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Del</button>
                        </form>  
                    </td>
                 </tr>   
            @endforeach
            </tbody>
            </table>
        </div>
</div>

@endsection