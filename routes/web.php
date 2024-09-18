<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/post')->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    // Uncomment these routes if you prefer individual route definitions:
    // Route::get('/post', [PostController::class, 'index'])->name('post.index');
    // Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    // Route::post('/post', [PostController::class, 'store'])->name('post.store');
    // Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
    // Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    // Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
    // Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::resource('post', PostController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
