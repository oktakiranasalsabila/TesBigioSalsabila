@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
align-items-center pt-3 pb-2 mb-3 border-bottom" >
<h1 class="h2">Guru</h1>
</div>
@if (session()->has('pesan'))
<div class="alert alert-succes mt-3" role="alert">
    {{session('pesan')}}
</div>
@endif
<a href="/guru-backend/create" class="btn btn-primary"><span data-feather="plus-circle"></span>
Create Guru</a>
<table class="table table-bordered table-sm my-4">
    <tr>
        <th>No</th>
        <th>Nip</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jabatan</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
 @foreach ($gurus as $guru)
    <tr>
        <td>{{ $gurus->firstItem()+$loop->index }}</td>
        <td>{{ $guru->nip }}</td>
        <td>{{ $guru->nama_lengkap }}</td>
        <td>{{ $guru->email }}</td>
        <td>{{ $guru->jabatan }}</td>
        <td>{{ $guru->tlpn }}</td>
        <td>{{ $guru->alamat }}</td>
     <td>
        <a href="/guru-backend/{{$guru->id}}/edit" class="btn btn-warning btn-sm">
            <span data-feather="edit"></span>Edit</a>
            <form action="/guru-backend/{{$guru->id}}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm"
                onclick="return confirm('yakin akan menghapus data?')"><span data-feather="trash-2"></span>Delete</button>
            </form>
     </td>
    </tr>
 @endforeach
</table>
{{ $gurus->links() }}
@endsection

