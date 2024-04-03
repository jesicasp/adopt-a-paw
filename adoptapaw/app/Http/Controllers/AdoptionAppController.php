<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adoptionApp;
use App\Models\Pet;
use App\Models\PetType;
use App\Models\petParent;
use App\Models\User;


class AdoptionAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()        
    {
        return view('adoptapaw.adoption_app', [
            'parents' => petParent::all(),
            'user' => User::all(),
            'pets' => Pet::all(),
            'pet_types' => PetType::all(),
        ]);
        
    }

    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'id_parent'=>'required',
            'id_pet'=>'required',
            'nama_adopter'=>'required',
            'nohp_adopter'=>'required',
            'email_adopter'=>'required',
            'alamat_adopter'=>'required',
            'message'=>'required',
        ]);

        adoptionApp::create($validatedData);
        return redirect('pet')->with('pesan','Data Berhasil di Simpan');
    }

    public function toShow($id) {
        $pet = Pet::find($id);
        return redirect('/adoption_app')->with(['parent2'=>User::find($pet->id_user), 'pet2'=>$pet]);
    }
}
