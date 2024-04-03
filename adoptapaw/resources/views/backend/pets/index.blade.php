@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Pet</h1>
</div>
@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('pesan') }}
    </div>
@endif
<table class="table table-bordered table-sm my-4">
    <tr>
        <th>No</th>
        <th>Nama Pet</th>
        <th>Jenis</th>
        <th>Parent</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Deskripsi</th>
        @can('admin') 
        <th>Aksi</th>
        @endcan
    </tr>
    @forelse ($pets as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama_pet }}</td>
        <td>{{ $item->type->jenis }}</td>
        <td>{{ $item->user->name }}</td>
        <td>{{ $item->umur }}</td>
        <td>{{ $item->jenis_kelamin }}</td>
        <td>{{ $item->deskripsi }}</td>
        
        <td>
            <a href="/pet-backend/{{ $item->id }}/edit" class="btn btn-warning btn-sm">
                <span data-feather="edit"></span>Edit
            </a>
            <form action="/pet-backend/{{ $item->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">
                    <span data-feather="trash-2"></span>Delete
                </button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="9" class="text-center">Tidak ada data pet</td>
    </tr>
    @endforelse
</table>
{{ $pets->links() }}
@endsection
