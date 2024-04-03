<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\PetType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PetBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth()->user()->isAdmin) {
            return view('backend.pets.index', ['pets' => Pet::paginate(10)]);
        } else if (Auth()->user()) {
            return view('backend.pets.index', ['pets' => Pet::where('id_user', Auth()->user()->id)->paginate(10)]);
        } else {
            return view('backend.pets.index', ['pets' => []]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pets.create', ['pet_types' => PetType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pet' => 'required',
            'id_type' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',

        ]);

        if ($request->hasFile('foto')) {
            $file = $request->foto;
            $fileName = 'img_' . time() . '_' . Str::random(5) . '.' . $file->getClientOriginalExtension();
            $file->move('img', $fileName);
            $validatedData['foto'] = $fileName;
            $validatedData['id_user'] = auth()->user()->id;
        } else {
            $validatedData['foto'] = 'img_default.png';
        }

        Pet::create($validatedData);
        return redirect('/pet-backend')->with('pesan', 'Data Berhasil di Simpan');
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
        return view('backend.pets.edit', [
            'pets' => Pet::find($id),
            'users' => User::all(),
            'pet_types' => petType::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([

            'nama_pet' => 'required',
            'id_type' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
        ]);

        if ($request->hasFile('foto')) {
            if ($request->image_old) {
                $image_url = public_path() . '/img/' . $request->image_old;
                unlink(($image_url));
            }
            $namaFile = 'img_' . time() . '_' . $request->foto->getClientOriginalName();
            $request->foto->move('img', $namaFile);
        } else {
            $namaFile = $request->image_old;
        }
        $validatedData['foto'] = $namaFile;
        $validatedData['id_user'] = auth()->user()->id;

        Pet::where('id', $id)->update($validatedData);
        return redirect('/pet-backend')->with('pesan', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cari = Pet::find($id);
        if ($cari->foto != '') {
            $image_url = public_path() . '/img/' . $cari->foto;
            unlink($image_url);
        }
        Pet::destroy($id);
        return redirect('/pet-backend')->with('pesan', 'Data Berhasil di Hapus');
    }
}
