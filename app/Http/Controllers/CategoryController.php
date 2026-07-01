<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    //function qui affiche les category dans vue
    public function index(): view{

    $categories = Category::all();

    return view('category-list', ['categories' => $categories]);
    }
}
