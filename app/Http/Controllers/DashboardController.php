<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;
class DashboardController extends Controller
{
    public function index()
    {
        $profil = profil::all();
        return view('admin.profil.index',[
            "title" => "profil",
            "active" => 'profil'
        ],compact('profil'));
    }
}
