@extends('backend.layouts.main')

@section('container')
    <div class="col-lg-6 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Pet</h1>
        </div>
        <form method="post" action="/pet-backend/{{ $pets->id }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-2">
                <label for="nama_pet" class="form-label">Nama Pet</label>
                <input type="text" class="form-control @error('nama_pet') is-invalid @enderror" name="nama_pet"
                    value="{{ old('nama_pet', $pets->nama_pet) }}">
                @error('nama_pet')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="id_type" class="form-label">Jenis</label>
                <select class="form-select @error('id_type') is-invalid @enderror" name="id_type">
                    @foreach ($pet_types as $pet_type)
                        @if (old('id_type', $pets->id_type) == $pet_type->id)
                            <option value="{{ $pet_type->id }}" selected>{{ $pet_type->jenis }}</option>
                        @else
                            <option value="{{ $pet_type->id }}">{{ $pet_type->jenis }}</option>
                        @endif
                    @endforeach
                </select>
                @error('id_type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" class="form-control @error('umur') is-invalid @enderror" name="umur"
                    value="{{ old('umur', $pets->umur) }}">
                @error('umur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" required>
                  <option value="">Pilih jenis kelamin</option>
                  <option value="jantan" {{ $pets->jenis_kelamin === 'jantan' ? 'selected' : '' }}>Jantan</option>
                  <option value="betina" {{ $pets->jenis_kelamin === 'betina' ? 'selected' : '' }}>Betina</option>
                </select>
                @error('jenis_kelamin')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

            <div class="mb-2">
                <input type="hidden" name="image_old" value="{{ $pets->foto }}">
                <label for="foto" class="form-label">Foto</label>
                @if ($pets->foto)
                    <img id="file-preview" src="/img/{{ $pets->foto }}" class="img-fluid col-sm-6 d-block mb-2"
                        height="100">
                @else
                    <img id="file_preview" class="img-fluid col-sm-6 d-block mb-2" height="100">
                @endif
                <img id="file-preview" class="img-fluid col-sm-6 mb-3 d-block" height="100">
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"
                    id="foto">
                @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                    value="{{ old('deskripsi', $pets->deskripsi) }}">
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <script>
            const input = document.getElementById('foto');
            const previewPhoto = () => {
                const file = input.files;
                if (file) {
                    const fileReader = new FileReader();
                    const preview = document.getElementById('file-preview');
                    fileReader.onload = function(event) {
                        preview.setAttribute('src', event.target.result);
                    }
                    fileReader.readAsDataURL(file[0]);
                }
            }
            input.addEventListener("change", previewPhoto);
        </script>
        
    </div>
@endsection