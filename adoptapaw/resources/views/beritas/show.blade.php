@extends('layouts.main',['pet_types'=> $pet_types])
@section('title', 'Pet')
@section('navPet', 'active')

@section('content')
<!-- Open Content -->
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="/img/{{$berita->file_upload}}" >
                </div>
                
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2" style="padding-bottom: 10px;"><b>{{$berita->title}}</b></h1>
                        <p>{{$berita->body}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Close Content -->
@endsection
