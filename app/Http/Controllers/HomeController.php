<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Music;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(){
        $musics = Music::get();
        // return $musics;
        return view('index', ['all' => $musics]);
    }
    
}
