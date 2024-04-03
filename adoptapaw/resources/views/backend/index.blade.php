@extends('backend.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Adopt A Paw</h1>
    </div>

    <div class="row"> <!-- Add the row class here -->
        <div class="col-lg-2 col-md-4 col-sm-6 mb-4"> <!-- Adjust the columns based on your layout -->
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/pawprint.png" alt="chart success" class="rounded">
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Pet</span>
                    <h3 class="card-title mb-2">{{ $totalPets }}</h3> 
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 mb-4"> <!-- Adjust the columns based on your layout -->
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/parents.png" alt="chart success" class="rounded">
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Parent</span>
                    <h3 class="card-title mb-2">{{ $totalParents }}</h3> 
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 mb-4"> <!-- Adjust the columns based on your layout -->
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/recycle.png" alt="chart success" class="rounded">
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Jenis Pet</span>
                    <h3 class="card-title mb-2">{{ $totalPetTypes }}</h3> 
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 mb-4"> <!-- Adjust the columns based on your layout -->
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/list.png" alt="chart success" class="rounded">
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Adoption App</span>
                    <h3 class="card-title mb-2">{{ $totalAdoptionApps }}</h3> 
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <img src="/img/dashboard.jpg" alt="AdoptaPaw">
    </div>
@endsection
