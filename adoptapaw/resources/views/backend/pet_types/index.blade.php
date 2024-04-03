@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Jenis Pet</h1>
</div>
@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{session('pesan')}}
    </div>
@endif
    <table class="table table-bordered table-sm my-4">
        <tr>
            <th>No</th>
            <th>Jenis</th>
            @can('admin') 
            <th>Aksi</th>
            @endcan
        </tr>
        @foreach ($pet_types as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->jenis}}</td>
            @can('admin') 
            <td>
                <a href="/pet_type-backend/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <span data-feather="edit">
                </span>Edit</a>
                <form action="/pet_type-backend/{{$item->id}}" method="post" class="d-inline">
                @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ?')"><span data-feather="trash-2"></span>Delete</button>
            </form>
            </td>
            @endcan
        </tr>
        @endforeach
    </table>
    {{$pet_types->links()}}
@endsection