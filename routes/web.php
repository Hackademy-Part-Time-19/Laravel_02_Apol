<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AnimeController::class, 'Home'])->name('genre');
Route::get('/genere/{genre}', [AnimeController::class, 'byGenere'])->name('genre.anime');
Route::get('/anime/{id}', [AnimeController::class, 'anime'])->name('anime.singolo');

Route::get('/test', [AnimeController::class, 'anime']);
