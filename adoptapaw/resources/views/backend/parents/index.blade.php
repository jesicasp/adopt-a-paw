@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Parent</h1>
</div>
@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{session('pesan')}}
    </div>
@endif
    <table class="table table-bordered table-sm my-4">
        <tr>
            @can('admin')
            <th>No</th>
            @endcan
            <th>Nama</th>
            <th>Email</th>
            <th>No hp</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach ($parents as $item)
        <tr>
            @can('admin')
            <td>{{$loop->iteration}}</td>
            @endcan
            <td>{{$item->nama_parent}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->no_hp}}</td>
            <td>{{$item->alamat}}</td>
            <td>
                <a href="/parent-backend/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <span data-feather="edit">
                </span>Edit</a>
                @can('admin') 
                <form action="/parent-backend/{{$item->id}}" method="post" class="d-inline">
                @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ?')"><span data-feather="trash-2"></span>Delete</button>
                </form>
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
    {{$parents->links()}}
@endsection