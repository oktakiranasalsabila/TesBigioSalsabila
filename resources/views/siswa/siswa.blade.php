@extends('layouts.main')

@section('title','Daftar Siswa')
@section('navSis','active')

@section('content')
<h1>Daftar Siswa</h1>
<table class="table table-bordered">
    <tr>
        <th class="table-dark">No</th>
        <th class="table-dark">Nis</th>
        <th class="table-dark">Nama</th>
        <th class="table-dark">Tempat Lahir</th>
        <th class="table-dark">Tanggal Lahir</th>
        <th class="table-dark">Jenis Kelamin</th>
        <th class="table-dark">Kelas</th>
        <th class="table-dark">Alamat</th>
    </tr>
 @foreach ($siswas as $siswa)
    <tr>
        <td>{{ $siswas->firstItem()+$loop->index }}</td>
        <td>{{ $siswa->nis }}</td>
        <td>{{ $siswa->namsis }}</td>
        <td>{{ $siswa->tem_lahir }}</td>
        <td>{{ $siswa->tgl }}</td>
        <td>{{ $siswa->jenkel }}</td>
        <td>{{ $siswa->kelas }}</td>
        <td>{{ $siswa->alamat }}</td>
    </tr>
 @endforeach
</table>
{{ $siswas->links() }}
@endsection

