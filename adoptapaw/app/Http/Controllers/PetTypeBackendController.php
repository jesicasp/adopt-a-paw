<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetType;

class PetTypeBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
        return view('backend.pet_types.index',['pet_types'=>PetType::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pet_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData=$request->validate([
                'jenis'=>'required',
            ]);
    
            PetType::create($validatedData);
            return redirect('/pet_type-backend')->with('pesan','Data Berhasil di Simpan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.pet_types.edit',[
            'pet_types'=>PetType::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'jenis' => 'required'
        ]);

        PetType::where('id',$id)->update($validatedData);
        return redirect('/pet_type-backend')->with('pesan','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PetType::destroy($id);
        return redirect('/pet_type-backend')->with('pesan','Data Berhasil di Hapus');
    }
}
