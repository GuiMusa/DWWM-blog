<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\View\View;
use App\Models\Category;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    //liste darticle
    public function index(): view {
        
        $articles = Article::with('category')
        ->where('status','published')
        ->orderBy('created_at', 'desc')
        ->paginate(2);

        return view('articles-list', ['articles' => $articles]);
    }

    //detail article
    public function show(int $id): view {
        $article = Article::with(['category'])->findOrFail($id);
        return view('article-details', compact('article'));
    }

    // Liste admin — tous les statuts, publiés ET brouillons
    public function adminIndex(): view {

        $articles = Article::with('category')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.articles-list-admin', ['articles' => $articles]);
    }

    //info d'article
    public function adminShow(int $id): view {
        $article = Article::with(['category'])->findOrFail($id);
        return view('article-details', compact('article'));
    }

    //page creation d'article
public function create(): view {
    $categories = Category::all();
    return view('admin.articles-create-admin', compact('categories'));
}

//creer larticle
public function store(Request $request) {

    $validated = $request->validate([
        'title'       => 'required|string|max:255',
        'content'     => 'required|string',
        'status'      => 'required|in:draft,published',
        'category_id' => 'required|exists:categories,id',
    ]);

    $validated['slug'] = Str::slug($validated['title']);
    $validated['user_id'] = 1;

    if ($validated['status'] === 'published') {
        $validated['published_at'] = now();
    }

    //validation de creation
    Article::create($validated);

    return redirect()->route('admin.articles.index')->with('success', 'Article créé avec succès.');
}

//supprimer l'article
public function destroy(int $id) {

    $article = Article::findOrFail($id);
    $article->delete();

    return redirect()->route('admin.articles.index')->with('success', 'Article supprimé avec succès.');
}
}


