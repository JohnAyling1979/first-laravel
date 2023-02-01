<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('/blog')->group(function() {
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show')->whereNumber('id');

    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');

    Route::get('/{id}/edit', [PostsController::class, 'edit'])->name('blog.edit')->whereNumber('id');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update')->whereNumber('id');

    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy')->whereNumber('id');
});

Route::fallback(FallbackController::class);
