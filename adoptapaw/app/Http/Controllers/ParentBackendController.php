<?php

namespace App\Http\Controllers;
use App\Models\petParent;
use App\Models\User;

use Illuminate\Http\Request;

class ParentBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* return view('backend.parents.index',['parents'=>petParent::latest()->paginate(10)]); */
        if (Auth()->user()->isAdmin) {
            return view('backend.parents.index', ['parents' => petParent::paginate(10)]);
        } else if (Auth()->user()) {
            return view('backend.parents.index', ['parents' => petParent::where('id_user', Auth()->user()->id)->paginate(10)]);
        } else {
            return view('backend.parents.index', ['parents' => []]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.parents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nama_parent'=>'required',
            'no_hp'=>'required',
            'email'=>'required',
            'alamat'=>'required',
        ]);

        petParent::create($validatedData);
        return redirect('/parent-backend')->with('pesan','Data Berhasil di Simpan');
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
        return view('backend.parents.edit',[
            'parents'=>petParent::find($id)
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'nama_parent' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'alamat' => 'required'
        ]);

        petParent::where('id',$id)->update($validatedData);
        return redirect('/parent-backend')->with('pesan','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       /*  petParent::destroy($id);
      
        return redirect('/parent-backend')->with('pesan','Data Berhasil di Hapus'); */

        $parent = petParent::findOrFail($id);

        // Delete the associated user
        if ($parent->user) {
            $parent->user->delete();
        }

        // Delete the parent record
        $parent->delete();

        return redirect('/parent-backend')->with('pesan', 'Data Berhasil di Hapus');
    }
}
