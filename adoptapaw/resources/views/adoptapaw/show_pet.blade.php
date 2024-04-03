@extends('layouts.main')
@section('title', 'Pet')
@section('navPet', 'active')

@section('content')
<!-- Open Content -->
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="/img/{{$pet->foto}}" alt="GAMBAR PET">
                </div>
                
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">{{$pet->nama_pet}}</h1>
                        

                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Umur :</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{$pet->umur}}</strong></p>
                            </li>
                            <li class="list-inline-item">
                                <h6>Jenis Kelamin :</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{$pet->jenis_kelamin}}</strong></p>
                            </li>
                            <li class="list-inline-item">
                                <h6>Jenis :</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{$pet->type->jenis}}</strong></p>
                            </li>
                        </ul>

                        <h6>Parent:</h6>
                        <p>{{$pet->user->name}}</p>

                        <h6>Deskripsi:</h6>
                        <p>{{$pet->deskripsi}}</p>

                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <a href="{{url('/adoption',['id' => $pet->id])}}" class="btn btn-success btn-lg">Adoption Form</a>
                                    {{-- <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button> --}}
                                </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Close Content -->
@endsection
