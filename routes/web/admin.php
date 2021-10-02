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
    Route::put('/{slug}', [PostController::class, 'edit'])->name('edit');
    Route::get('/create', [PostController::class, 'create'])->name('create');
});

Route::get('/works', [WorkController::class, 'index']);
Route::get('/leads', [LeadController::class, 'index']);
