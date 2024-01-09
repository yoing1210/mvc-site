<?php

namespace App\Http\Controllers;
use App\Models\berita;
use App\Models\kategori;
use App\Models\profil;
use Illuminate\Http\Request;

class beranda extends Controller
{
    public function index()
    {   
        $berita = berita::all();
        $kategori = kategori::all();
        $profil = profil::all();
        return view('beranda.index',[
            "title" => "beranda",
            "active" => 'beranda',
        ],compact('berita','kategori','profil'));
    
    }
    // public function post()
    // {
    //     if(isset($_POST['submit'])) {
    //         $name       =$_POST['name'];
    //         $email      =$_POST['email'];
    //         $message    =$_POST['message'];
        
    //         return view("https://wa.me/6285241611228?text=Name:%20$name%20%0Demail:%20$email%20%0DPesan:%20$message");
    //     }
    //     else{
    //         echo"
    //         <script>
    //         window.location=history.go(-1);
    //         </script>
    //         ";
    //     }
    // }
}
