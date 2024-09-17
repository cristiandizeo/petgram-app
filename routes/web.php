<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});
Route::get('/registro', [RegisterController::class, 'index'])-> name('registro');
Route::post('/registro', [RegisterController::class, 'store']);
