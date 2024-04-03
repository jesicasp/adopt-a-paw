<?php

namespace App\Http\Controllers;

use App\Models\Pet; 
use App\Models\petParent; 
use App\Models\PetType; 
use App\Models\adoptionApp; 

class DashboardController extends Controller
{
    public function index()
    {
        // Get the total count of pets
        $totalPets = Pet::count();

        // Get the total count of parents
        $totalParents = petParent::count();

        // Get the total count of jenis pet
        $totalPetTypes = PetType::count();

        $totalAdoptionApps = adoptionApp::count();

        return view('backend.index', compact('totalPets', 'totalParents', 'totalPetTypes','totalAdoptionApps'));
    }
}

