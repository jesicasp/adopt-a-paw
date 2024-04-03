@extends('layouts.main')
@section('title','pet')
@section('content')

    <div class="row">
    @foreach ($pets as $pet)
    <div class="col-md-4">
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0">
                <img class="card-img rounded-0 img-fluid" src="/img/{{ $pet->foto }}" style="height:500px; object-fit: cover">
                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"></div>
            </div>
            <div class="card-body">
                <h5>{{ $pet->nama_pet }}</h5>
                <p class="h3 text-decoration-none">{{ $pet->deskripsi }}</p>
                <a href="/pet/{{ $pet->id }}" class="btn btn-warning" style="width:120px">View</a>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection

<style>
.custom-img-size {
  width: 400px;
  height: 400px;
}
</style>