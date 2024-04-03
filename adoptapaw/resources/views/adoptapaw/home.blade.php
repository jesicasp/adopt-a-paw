@extends('layouts.main')
@section('title','home')

@section('content')

 <!-- Modal -->
 <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-success text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>



<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./img/rabbit1.jpg" style="height:500px; object-fit: cover" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>Adopt</b> A Paw</h1>
                            <h3 class="h2">Adopt a Pet for you now!</h3>
                            <p>
                                AdoptaPaw merupakan website yang didedikasikan untuk membantu hewan-hewan peliharaan yang membutuhkan
                                rumah baru dengan menghubungkan mereka dengan calon pemilik yang berpotensi untuk mengadopsi. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./img/cat1.jpg" style="height:500px; object-fit: cover" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Lovely Pet</h1>
                            <h3 class="h2">They're waiting for you</h3>
                            <p>
                                There are likely hundreds of adoptable pets in your local animal shelters or rescues right now who would love to join your family
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
{{--                         <img class="card-img rounded-0 img-fluid" src="/img/{{$pet->foto}}}" style="height:500px; object-fit: cover">
 --}}                        <img class="img-fluid" src="./img/hamster1.jpg" style="height:500px; object-fit: cover" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1"></h1>
                            <h3 class="h2">Pick up your pet</h3>
                            <p>
                                Isi form untuk mengadopsi pet sekarang!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">How to Adopt a Paw?</h1>
            <p>
                Cukup dengan 3 langkah
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/search.png" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Cari Pet yang diinginkan</h5>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/adoption-form.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Isi Adoption Form </h2>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/reply.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Tunggu balasan dari pemilik pet</h2>
        </div>
    </div>
</section>
<!-- End Categories of The Month -->


<!-- Start Featured -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Adopt A Paw Now!</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Product -->

@endsection
