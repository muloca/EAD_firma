<?php

use App\Http\Controllers\{
    PostController
};

use App\Models\Post;

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
});

Route::any('/posts/search', [PostController::class, 'search'])->name('posts.search');
//Route::get('/posts/inicio', [PostController::class, 'inicio'])->name('posts.inicio');
Route::get('/posts/classe/{classe}', [PostController::class, 'classe'])->name('posts.classe');


Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [PostController::class, 'inicio'])->name('posts.inicio');

require __DIR__.'/auth.php';