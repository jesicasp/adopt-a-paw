<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\petParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        $parentData = [
            'id_user' => User::latest()->first()->id,
            'nama_parent' => $request['name'],
            'no_hp' => '-',
            'email' => $request['email'],
            'alamat' => '-'
        ];
        petParent::create($parentData);

        return redirect('/login');

    }
}

