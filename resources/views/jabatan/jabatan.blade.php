@extends('layouts.main')

@section('title','Daftar Jabatan')
@section('nav','active')

@section('content')
<h1>Daftar Jabatan</h1>
<table class="table table-bordered">
    <tr class="table-dark">
        <th>No</th>
        <th>Jabatan</th>

    </tr>
 @foreach ($jabatans as $jabatan)
    <tr>
        <td>{{ $jabatans->firstItem()+$loop->index }}</td>
        <td>{{ $jabatan->jabatan}}</td>

    </tr>
 @endforeach
</table>

@endsection
