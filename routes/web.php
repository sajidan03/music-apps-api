<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', [SongController::class,'viewHome'])->name('view-home');
Route::get('/songs', [SongController::class, 'viewCreate'])->name('view-create');
Route::post('/songs', [SongController::class,'create'])->name('songs-create');
