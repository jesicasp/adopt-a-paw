@extends('layouts.main',['pet_types'=> $pet_types])
@section('title', 'Berita')
@section('navBerita', 'active')

@section('content')
<div class="row">
    @foreach ( $beritas as $berita)
    <div class="col-lg-3 my-3">
        <div class="card h-100 padding-bottom: 10px;">
            <img src="/img/{{$berita->file_upload}}" alt="Logo TI" class="card-img-top" height="200px">            <div class="card-body d-flex flex-column justify-content-between" >
                <h5>{{$berita->title}}</h5>
                
                <p class="cart-text">{{$berita->excerpt}}</p>
                <a href="/berita/{{ $berita->id }}" class="btn btn-success" style="width:120px">Read more</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection