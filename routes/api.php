<?php

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/articoli', function (Request $request) {
    return Article::all();
});
