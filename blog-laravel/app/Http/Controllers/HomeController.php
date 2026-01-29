<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::with('categorie')->get();
        $categories = Categorie::all();
        return view('acceuil', compact('posts', 'categories'));
    }
}
