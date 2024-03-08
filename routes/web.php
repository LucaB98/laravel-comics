<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// comics
Route::get('/comics', function () {
    return view('comics');
})->name('comics');

// characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

