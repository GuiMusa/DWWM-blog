<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class articleController extends Controller
{

    public function index(): view {
        //
        $articles = Article::all();

        return view('articles-list', ['articles => $articles']);
    }
}
