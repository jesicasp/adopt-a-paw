<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\petParent;
use App\Models\Prodi;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;

class UserBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.users.index', ['users' => User::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = petParent::all();
        return view('backend.users.create', ['parents' => $parents]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required||unique:users',
            'email_verified_at' => 'required',
            'password' => 'required',
            'remember_token' => 'required',
        ]);

        $validatedData['password'] = Hash::make($request->password);
        User::create($validatedData);

        $parentData = [
            'id_user' => User::latest()->first()->id,
            'nama_parent' => $request['name'],
            'no_hp' => '-',
            'email' => $request['email'],
            'alamat' => '-'
        ];
        petParent::create($parentData);
        return redirect('/user-backend')->with('pesan', 'Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.users.edit', [
            'users' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::where('id', $id)->update($validatedData);
        return redirect('/user-backend')->with('pesan', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* User::destroy($id);
        return redirect('/user-backend')->with('pesan', 'Data Berhasil di Hapus'); */

        $user = User::findOrFail($id);

        // Delete the associated parent
        if ($user->parent) {
            $user->parent->delete();
        }
    
        // Delete the user record
        $user->delete();
    
        return redirect('/user-backend')->with('pesan', 'Data Berhasil di Hapus');
    }
}
