@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Jenis Pet</h1>
</div>
<form method="post" action="/pet_type-backend/{{$pet_types->id}}">
    @method('PUT')
    @csrf 
    <div class="mb-2">
      <label for="jenis" class="form-label">Jenis</label>
      <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis" value="{{ old('jenis', $pet_types->jenis) }}">
      @error('jenis')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection