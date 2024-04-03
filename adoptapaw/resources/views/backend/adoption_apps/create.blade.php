@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Entri Adoption App</h1>
</div>
<form method="post" action="/adoption_app-backend">
    @csrf 

    <div class="mb-2">
        <label for="id_parent" class="form-label">Parent</label>
        <select class="form-select @error('id_parent') is-invalid @enderror" name="id_parent">
          <option value="">Pilih Parent</option>
          @foreach($parents as $parent)
          @if(old('id_parent')== $parent->id)
          <option value="{{$parent->id}}" selected>{{$parent->nama_parent}}</option>
          @else
          <option value="{{$parent->id}}">{{$parent->nama_parent}}</option>
          @endif
          @endforeach
        </select>
        @error('id_parent')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>


      <div class="mb-2">
        <label for="id_pet" class="form-label">Pet</label>
        <select class="form-select @error('id_pet') is-invalid @enderror" name="id_pet">
          <option value="">Pilih Pet</option>
          @foreach($pets as $pet)
          @if(old('id_pet')== $pet->id)
          <option value="{{$pet->id}}" selected>{{$pet->nama_pet}}</option>
          @else
          <option value="{{$pet->id}}">{{$pet->nama_pet}}</option>
          @endif
          @endforeach
        </select>
        @error('id_pet')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
    
    <div class="mb-2">
      <label for="nama_adopter" class="form-label">Nama Adopter</label>
      <input type="text" class="form-control @error('nama_adopter') is-invalid @enderror" name="nama_adopter" value="{{ old('nama_adopter')}}">
      @error('nama_adopter')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="nohp_adopter" class="form-label">No Telepon Adopter</label>
      <input type="text" class="form-control @error('nohp_adopter') is-invalid @enderror" name="nohp_adopter" value="{{ old('nohp_adopter')}}">
      @error('nohp_adopter')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="email_adopter" class="form-label">Email Adopter</label>
      <input type="email" class="form-control @error('email_adopter') is-invalid @enderror" name="email_adopter" value="{{ old('email_adopter')}}">
      @error('email_adopter')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
        <label for="alamat_adopter" class="form-label">Alamat Adopter</label>
        <input type="text" class="form-control @error('alamat_adopter') is-invalid @enderror" name="alamat_adopter"
            value="{{ old('alamat_adopter') }}">
        @error('alamat_adopter')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-2">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control @error('message') is-invalid @enderror" name="message">{{ old('message')}}</textarea>
        @error('message')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror 
    </div>

      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection