@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Entri Guru</h1>
</div>
<form method="post" action="/guru-backend">
    @csrf
    <div class="mb-2">

      <label for="nip" class="form-label">Nip</label>
      <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip')}}">
      @error('nip')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="nama_lengkap" class="form-label">Nama </label>
      <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap')}}">
      @error('nama_lengkap')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}">
      @error('email')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="jabatan" class="form-label">kelas</label>
      <select class="form-select @error('jabatan') is-invalid @enderror" name="jabatan">
      <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakil Kepsek">X_Wakil KepsekIPS</option>
        <option value="Guru B Indonesia">Guru B Indonesia</option>
        <option value="Guru B Inggris">Guru B Inggris</option>
        <option value="Guru Matematika">Guru Matematika</option>
        <option value="Guru Fisika">Guru Fisika</option>
        <option value="Guru Biologi">Guru Biologi</option>
        <option value="Guru Kimia">Guru Kimia</option>
      </select>
      @error('jabatan')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="jenkel" class="form-label">Jenis Kelamin</label>
      <br>
      <label>
    <input type="radio"   name="jenkel" value="{{ old('male')}}">
    Laki-Laki
  </label>
  <br>
  <label>
    <input type="radio"  name="jenkel" value="{{ old('famale')}}">
    Perempuan
  </label>
      @error('jenkel')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="tem_lahir" class="form-label">Tempat Lahir</label>
      <input type="text" class="form-control @error('tem_lahir') is-invalid @enderror" name="tem_lahir" value="{{ old('tem_lahir')}}">
      @error('tem_lahir')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="tgl" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl" value="{{ old('tgl')}}">
      @error('tgl')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="tlpn" class="form-label">telepon</label>
      <input type="text" class="form-control @error('tlpn') is-invalid @enderror" name="tlpn" value="{{ old('tlpn')}}">
      @error('tlpn')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

      <div class="mb-2">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat">{{ old('alamat')}}</textarea>
        @error('alamat')
          <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
