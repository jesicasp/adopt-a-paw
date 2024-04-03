<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adoptionApp;
use App\Models\Pet;
use App\Models\petParent;
use App\Models\User;


class AdoptionAppBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        if (Auth()->user()->isAdmin) {
            return view('backend.adoption_apps.index', ['adoption_apps' => adoptionApp::paginate(10)]);
        } else if (Auth()->user()) {
            return view('backend.adoption_apps.index', ['adoption_apps' => adoptionApp::where('id_parent', Auth()->user()->id)->paginate(10)]);
        } else {
            return view('backend.adoption_apps.index', ['adoption_apps' => []]);
        } 
    }

    /**
     * Show the form for creating a new resource.
     * ['parents'=>petParent::all()]
     */
    public function create()
    {
        return view('backend.adoption_apps.create', ['parents'=>petParent::all()], ['pets'=>Pet::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
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
        return redirect('/adoption_app-backend')->with('pesan','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        /* return view('backend.adoption_apps.edit', [
            'adoption_apps' => adoptionApp::find($id),
            'pets' => Pet::all(),
            'parents' => petParent::all()
        ]); */
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /* $validatedData=$request->validate([
            'id_parent'=>'required',
            'id_pet'=>'required',
            'nama_adopter'=>'required',
            'nohp_adopter'=>'required',
            'email_adopter'=>'required',
            'alamat_adopter'=>'required',
            'tanggal'=>'required',
            'message'=>'required',
        ]);

        adoptionApp::where('id',$id)->update($validatedData);
        return redirect('/adoption_app-backend')->with('pesan','Data Berhasil di Update'); */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        adoptionApp::destroy($id);
        return redirect('/adoption_app-backend')->with('pesan','Data Berhasil di Hapus');
    }

}
