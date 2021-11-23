<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\WorkController;

Route::get('/', [PageController::class, 'dashboard']);

Route::prefix('/posts')->name('posts.')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::post('/', [PostController::class, 'store'])->name('store');
    Route::get('/{title}/edit', [PostController::class, 'edit'])->name('edit');
    Route::get('/create', [PostController::class, 'create'])->name('create');
});
Route::prefix('/leads')->name('keywords.')->group(function() {
    Route::get('/', [LeadController::class, 'index'])->name('index');
    Route::get('/{slug}', [LeadController::class, 'show'])->name('show');
    Route::put('/{slug}', [LeadController::class, 'update'])->name('update');
});

Route::prefix('/works')->name('works.')->group(function() {
    Route::get('/', [WorkController::class, 'index'])->name('index');
    Route::get('/create', [WorkController::class, 'create'])->name('create');
    Route::post('/', [WorkController::class, 'store'])->name('store');
    Route::get('/{slug}/edit', [WorkController::class, 'edit'])->name('edit');
});


 