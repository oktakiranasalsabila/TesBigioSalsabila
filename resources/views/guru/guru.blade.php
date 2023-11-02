@extends('layouts.main')

@section('title','Daftar Guru')
@section('navGuru','active')

@section('content')
<h1>Daftar Guru</h1>
<table class="table table-bordered">
    <tr>
        <th class="table-dark">No</th>
        <th class="table-dark">Nip</th>
        <th class="table-dark">Nama</th>
        <th class="table-dark">Email</th>
        <th class="table-dark">Tempat Lahir</th>
        <th class="table-dark">Tanggal Lahir</th>
        <th class="table-dark">Jabatan</th>
        <th class="table-dark">Jenis Kelamin</th>
        <th class="table-dark">Alamat</th>
    </tr>
 @foreach ($gurus as $guru)
    <tr>
        <td>{{ $gurus->firstItem()+$loop->index }}</td>
        <td>{{ $guru->nip }}</td>
        <td>{{ $guru->nama_lengkap }}</td>
        <td>{{ $guru->email }}</td>
        <td>{{ $guru->tem_lahir }}</td>
        <td>{{ $guru->tgl }}</td>
        <td>{{ $guru->jabatan }}</td>
        <td>{{ $guru->jenkel }}</td>
        <td>{{ $guru->alamat }}</td>
    </tr>
 @endforeach
</table>
{{ $gurus->links() }}
@endsection

