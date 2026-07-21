<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CategoryController extends Controller
{
    //function qui affiche les category dans vue 
    public function index(): view{

    $categories = Category::withCount('articles')->get();

    return view('categories-list', ['categories' => $categories]);
    }

    // affiche le formulaire de création
public function create(): view
{
    return view('categories-create');
}

// enregistre la nouvelle category
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:50',
    ]);

    Category::create([
        'name' => $validated['name'],
        'slug' => Str::slug($validated['name']),
    ]);

    return redirect()->route('categories.index')->with('success', 'Catégorie créée avec succès');
}



}
