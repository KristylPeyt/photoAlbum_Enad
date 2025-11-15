<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/', [PhotoController::class, 'index'])->name('home');
Route::get('/category/{slug}', [PhotoController::class, 'category'])->name('category');
