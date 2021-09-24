<?php

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/arizalar', [LeadsController::class, 'index']);
Route::get('/works', [WorksController::class, 'index']);

// Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
//     Route::get('/', [::class, 'index']);
//     Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
//     Route::resource('order', App\Http\Controllers\Admin\OrderController::class);

// });