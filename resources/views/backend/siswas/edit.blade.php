@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <h3>Edit data Siswa</h3>
<form method="post" action="/siswa-backend/{{ $siswas->id }}">
    @method('PUT')
    @csrf
    <div class="mb-2">

      <label for="nis" class="form-label">Nis</label>
      <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis',$siswas->nis)}}" readonly>
      @error('nis')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="namsis" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control @error('namsis') is-invalid @enderror" name="namsis" value="{{ old('namsis',$siswas->namsis)}}">
      @error('namsis')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="tem_lahir" class="form-label">Tempat Lahir</label>
      <input type="text" class="form-control @error('tem_lahir') is-invalid @enderror" name="tem_lahir" value="{{ old('tem_lahir',$siswas->tem_lahir)}}">
      @error('tem_lahir')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="tgl" class="form-label">tgl Lahir</label>
      <input type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl" value="{{ old('tgl',$siswas->tgl)}}">
      @error('tgl')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="kelas" class="form-label">kelas</label>
      <select class="form-control @error('kelas') is-invalid @enderror" name="kelas">
        <option value="X_IPA">X_IPA</option>
        <option value="X_IPA">X_IPs</option>
        <option value="XI_IPA">XI_IPA</option>
        <option value="XI_IPA">XI_IPS</option>
        <option value="XII_IPA">XII_IPA</option>
        <option value="XII_IPA">XII_IPS</option>

      </select>
      @error('kelas')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
      <div class="mb-2">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat">{{ old('alamat',$siswas->alamat)}}</textarea>
        @error('alamat')
          <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
