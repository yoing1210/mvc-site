<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = berita::all();
        return view('admin.berita.index',[
            "title" => "berita",
            "active" => 'berita',
            'categories' => kategori::all()
        ],compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create',[
            'categories' => kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        $ValidatedData = $request->validate([
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'image' => 'image',
            'body' => 'required'
        ]);

        $ValidatedData['image'] = $request->file('image')->store('post-images');
       
        berita::create($ValidatedData);

        return redirect('/admin/berita')->with('success','New Post has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $berita = berita::find($id);
       
        return view('admin.berita.edit',[
            'berita' => $berita,
            'categories' => kategori::all()
        ],compact('berita'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $berita = berita::find($id);
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:4000',
            'body' => 'required'
        ];
        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $berita->update($validatedData);
        return redirect('/admin/berita')->with('success','New Post has been EDITED');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(berita $berita, $id)
    {
        $berita = berita::find($id);
        if($berita->image){
            Storage::delete($berita->image);
        } 
        berita::destroy($berita->id);
       

        return redirect('/admin/berita')->with('success','Post has been deleted');
    }

    
}
