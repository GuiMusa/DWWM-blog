<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\View\View;

class ArticleController extends Controller
{
    //
    public function index(): view {
        
        $articles = Article::all();

        return view('articles-list', ['articles => $articles']);
    }
}
