<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\View\View;

class ArticleController extends Controller
{
    //
    public function index(): view {
        
        $articles = Article::orderBy('created_at', 'desc')->paginate(2);

        return view('articles-list', ['articles' => $articles]);
    }

    public function show(int $id): view {
        $article = Article::with(['category'])->findOrFail($id);
        return view('article-details', compact('article'));
    }
}
