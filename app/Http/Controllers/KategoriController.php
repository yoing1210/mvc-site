<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.categories.index',[
            'categories' => kategori::all()
        ]);
    }

    public function store(Request $request)
    {
      
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image'
        ]);
        $validatedData['image'] = $request->file('image')->store('post-images');
        
        kategori::create($validatedData);

        return redirect('/admin/categories')->with('success','New Post has been added');
    }
    public function destroy($id)
    {

        $data = kategori::find($id);
        kategori::destroy($data->id);

        return redirect('/admin/categories')->with('success','Category has been deleted');
    }
}
