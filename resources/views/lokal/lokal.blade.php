@extends('layouts.main')

@section('title','Daftar Kelas')
@section('nav','active')

@section('content')
<h1>Daftar Kelas</h1>
<table class="table table-bordered">
    <tr class="table-dark">
        <th>No</th>
        <th>Kelas</th>

    </tr>
 @foreach ($lokals as $lokal)
    <tr>
        <td>{{ $lokals->firstItem()+$loop->index }}</td>
        <td>{{ $lokal->lokal}}</td>

    </tr>
 @endforeach
</table>

@endsection
