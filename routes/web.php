<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])
    ->middleware('auth')
    ->name('welcome');

//CRUD per ARTICOLI
Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articoli/crea', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articoli/salva', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articoli/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articoli/{article}/modifica', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articoli/{article}/aggiorna', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('articoli/{article}/elimina', [ArticleController::class, 'destroy'])->name('articles.destroy');


Route::resource('categories', CategoryController::class);
