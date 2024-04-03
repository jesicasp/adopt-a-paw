@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Form Adopsi</h1>
</div>
@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{session('pesan')}}
    </div>
@endif
    <table class="table table-bordered table-sm my-4">
        <tr>
            <th>No</th>
            <th>Parent</th>
            <th>Pet</th>
            <th>Nama Adopter</th>
            <th>No. Telepon Adopter</th>
            <th>Email Adopter</th>
            <th>Alamat Adopter</th>
            <th>Tanggal</th>
            <th>Message</th>
            <th>Aksi</th>
        </tr>
        @foreach ($adoption_apps as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->user->name}}</td>
            <td>{{$item->pet->nama_pet}}</td>
            <td>{{$item->nama_adopter}}</td>
            <td>{{$item->nohp_adopter}}</td>
            <td>{{$item->email_adopter}}</td>
            <td>{{$item->alamat_adopter}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->message}}</td>
            <td>
                <form action="/adoption_app-backend/{{$item->id}}" method="post" class="d-inline">
                @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ?')"><span data-feather="trash-2"></span>Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$adoption_apps->links()}}
@endsection