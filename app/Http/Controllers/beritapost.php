<?php

namespace App\Http\Controllers;
use App\Models\berita;
use App\Models\kategori;
use Illuminate\Http\Request;

class beritapost extends Controller
{

    public function index()
    {   
        $berita = berita::all();
        return view('berita.index',[
            "title" => "berita",
            "active" => 'berita',
        ],compact('berita'));
    
    }
    public function show(berita $berita, $id) 
    {
        
        $berita = berita::find($id);
        $cat = kategori::all();
        $ber = berita::all();
        return view('berita.detail',[
            'title' => 'detail',
            "active" => 'detail',
        ], compact( 'berita','cat','ber'));
    }
}
