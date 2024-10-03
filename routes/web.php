<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('principal');
});
Route::get('/registro', [RegisterController::class, 'index'])-> name('registro');
Route::post('/registro', [RegisterController::class, 'store']);

Route::get('/muro', [PostController::class, 'index']) -> name('posts.index') -> middleware('auth.basic');