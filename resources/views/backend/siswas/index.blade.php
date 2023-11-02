@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
align-items-center pt-3 pb-2 mb-3 border-bottom" >
<h1 class="h2">Siswa</h1>
</div>
@if (session()->has('pesan'))
<div class="alert alert-succes mt-3" role="alert">
    {{session('pesan')}}
</div>
@endif
<a href="/siswa-backend/create" class="btn btn-primary"><span data-feather="plus-circle"></span>
Create Siswa</a>
<table class="table table-bordered table-sm my-4">
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Kelas Lahir</th>
        <th>Alamat</th>
        <th>Aksi</th>
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
     <td>
        <a href="/siswa-backend/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">
            <span data-feather="edit"></span>Edit</a>
            <form action="/siswa-backend/{{$siswa->id}}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm"
                onclick="return confirm('yakin akan menghapus data?')"><span data-feather="trash-2"></span>Delete</button>
            </form>
     </td>
    </tr>
 @endforeach
</table>
{{ $siswas->links() }}
@endsection

