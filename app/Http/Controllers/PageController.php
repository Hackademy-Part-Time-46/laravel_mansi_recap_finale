<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $articles = Article::all();
        return view('welcome', compact('articles'));
    }
}
