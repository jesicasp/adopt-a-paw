<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\User;
use App\Models\PetType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BeritaBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.berita.index',['beritas'=>Berita::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.berita.create',['users'=>User::all()],['pet_types'=>PetType::all()]);
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
            'title' => 'required',
            'id_type' => 'required',
            'file_upload' => 'required',
            'body' => 'required'

        ]);
    
        // Pemindahan file ke direktori public/img
        if ($request->hasFile('file_upload')) {
            $namaFile='img_'.time().'_'.$request->file_upload->getClientOriginalName();
            $request->file_upload->move('img', $namaFile);
        }else{
            $namaFile='img_default.png';
        }

        $validatedData['file_upload']=$namaFile;
       /*  $validatedData['id_user']=1;  */
        $validatedData['id_user']=auth()->user()->id; 
        $validatedData['excerpt']=Str::limit(strip_tags($request->body),50);

        Berita::create($validatedData);
        return redirect('/berita-backend')->with('pesan','Data Berhasil di Simpan');

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
        return view('backend.berita.edit',[
            'beritas'=>Berita::find($id),
            'users'=>User::all(),
            'pet_types'=>PetType::all()
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
        $validatedData=$request->validate([
            'title'=>'required',
            'id_type'=>'required',
            'file_upload'=>'nullable|image|mimes:png,jpg',
            'body'=>'required'
        ]);
        if ($request->hasFile('file_upload')) {
            if ($request->image_old) {
                $image_url=public_path().'/img/'.$request->image_old;
                unlink(($image_url));   
            }
            $namaFile='img_'.time().'_'.$request->file_upload->getClientOriginalName();
            $request->file_upload->move('img',$namaFile);
        }
        else{
            $namaFile=$request->image_old;
        }
        $validatedData['file_upload']=$namaFile;
        $validatedData['id_user']=auth()->user()->id; 
/*            $validatedData['id_user']=1; */
        $validatedData['excerpt']=Str::limit(strip_tags($request->body),50);

        Berita::where('id',$id)->update($validatedData);
        return redirect('/berita-backend')->with('pesan','Data Berhasil di Simpan');	

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cari=Berita::find($id);
        if($cari->file_upload!=''){
            $image_url=public_path().'/img/'.$cari->file_upload;
            unlink($image_url);
        }
        Berita::destroy($id);
        return redirect('/berita-backend')->with('pesan','Data Berhasil di Hapus');
    }
}
