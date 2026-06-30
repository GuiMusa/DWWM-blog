<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class articleController extends Controller
{
    //methode show
    public function show(): View {
       return view('articles-list');
    }
}
