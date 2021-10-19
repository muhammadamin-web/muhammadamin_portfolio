<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PageController;
use App\Http\Controllers\User\LeadController;
use App\Http\Controllers\User\PostController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/works', [PageController::class, 'works'])->name('works.index');

Route::prefix('/posts')->name('posts.')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/{slug}', [PostController::class, 'show'])->name('show');
});

Route::name('leads.')->group(function() {
    Route::get('/contact', [LeadController::class, 'create'])->name('create');
    Route::post('/contact', [LeadController::class, 'store'])->name('store');
}); 