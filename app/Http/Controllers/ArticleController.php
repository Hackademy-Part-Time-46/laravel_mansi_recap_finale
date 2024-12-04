<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $path_image = '';
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->store('cover-articles', 'public');
            // $name_file = $request->file('image')->getClientOriginalName();
            // $path_image = $request->file('image')->storeAs('cover-articles', $name_file, 'public');
        }

        $article = Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path_image,
            'slug' => Str::of($request->title)->slug('-'),
            //'user_id' => Auth::user()->id
            'user_id' => auth()->user()->id
        ]);

        $article->categories()->attach($request->categories);
        return to_route('articles.index')->with('success', 'Articolo Creato');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $path_image = $article->image;
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->store('cover-articles', 'public');
        }

        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path_image,
            'slug' => Str::of($request->title)->slug('-'),
            //'user_id' => Auth::user()->id
            //'user_id' => auth()->user()->id
        ]);

        $article->categories()->detach();
        $article->categories()->attach($request->categories);
        return to_route('articles.index')->with('success', 'Articolo Modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->categories()->detach();
        $article->delete();
        return to_route('articles.index')->with('success', 'Articolo Eliminato');
    }
}
