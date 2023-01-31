<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

// Route::resource('blog', PostsController::class);
Route::prefix('/blog')->group(function() {
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show')->whereNumber('id');

    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');

    Route::get('/{id}/edit', [PostsController::class, 'edit'])->name('blog.edit')->whereNumber('id');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update')->whereNumber('id');

    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy')->whereNumber('id');
});

Route::get('/', HomeController::class);

Route::fallback(FallbackController::class);
