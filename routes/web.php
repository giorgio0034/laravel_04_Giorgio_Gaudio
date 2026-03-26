<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home'])->name('blog.home');
Route::get('/Pagina-indice', [PageController::class, 'index'])->name('blog.index');

