<?php

namespace App\Http\Controllers;
use App\Models\profil;
use Illuminate\Http\Request;

class ProfilDesa extends Controller
{
    public function index()
    {
        $profil = profil::all();
        return view('admin.profil.index',[
            "title" => "profil"
        ],compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profil.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'kd' => 'required|max:255',
            'nip' => 'required|max:255',
            'kontak' => 'required|max:255',
            'email' => 'required|max:255',
            'pos' => 'required|max:255',
            'luas' => 'required|max:255',
            'penduduk' => 'required|max:255',
            'visi' => 'required|max:1000',
            'misi' => 'required|max:1000'
           
        ]);
        
    
        
        profil::create($validatedData);

        return redirect('/admin/profil')->with('success','New Post has been added');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(profil $profil)
    {
        return view('admin.profil.edit',[
            'profil' => $profil
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // dd($request->all());


        $profil = profil::find($id);
        $profil->nama = $request->nama;
        $profil->alamat = $request->alamat;
        $profil->kd = $request->kd;
        $profil->nip = $request->nip;
        $profil->kontak = $request->kontak;
        $profil->email = $request->email;
        $profil->pos = $request->pos;
        $profil->luas = $request->luas;
        $profil->penduduk = $request->penduduk;
        $profil->visi = $request->visi;
        $profil->misi = $request->misi;
        

        $profil->update();
        return redirect('/admin/profil')->with('success','New Post has been edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profil $profil)
    {
        //
    }
}
