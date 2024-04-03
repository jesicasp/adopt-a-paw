@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Entri Parent</h1>
</div>
<form method="post" action="/parent-backend">
    @csrf 
    <div class="mb-2">
      <label for="nama_parent" class="form-label">Nama Parent</label>
      <input type="text" class="form-control @error('nama_parent') is-invalid @enderror" name="nama_parent" value="{{ old('nama_parent')}}">
      @error('nama_parent')
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
        <label for="no_hp" class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
            value="{{ old('no_hp') }}">
        @error('no_hp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-2">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="alamat" value="{{ old('alamat')}}">
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