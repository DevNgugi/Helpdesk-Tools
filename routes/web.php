<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('home');

    Route::get('/add', [PostController::class, 'create'])->name('create');
    Route::post('/add', [PostController::class, 'store'])->name('store');
    Route::post('/search', [PostController::class, 'search'])->name('search');

    Route::get('/post/{id}', [PostController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
    Route::post('/update', [PostController::class, 'update'])->name('update');

    Route::post('/comment', [CommentController::class, 'store'])->name('storecomment');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
