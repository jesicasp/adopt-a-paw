<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\PetType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function index()
      {
        return view('beritas.berita',['beritas'=>Berita::latest()->paginate(10)], ['pet_types'=> PetType::all()]);
      
      }
      public function show($id)
      {
          /* $berita = Berita::find($id);
          return view('beritas.show',compact('berita')); */
          return view('beritas.show',['berita' => Berita::find($id),'pet_types'=> PetType::all()]);

  
      }
}