<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [PostController::class, 'index']);
Route::get('/post/show/{post}', [PostController::class, 'show'])->name('post.show');
Route::post('/comment/store', [PostCommentsController::class, 'store'])->name('comment.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('authors.dashboard');
    })->name('dashboard');

    Route::get('/posts/create', function () {
        return view('posts.create');
    })->name('posts.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
