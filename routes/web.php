<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;


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


Route::get('/', [PageController::class, 'index']);
Route::get('/posts', [PageController::class, 'posts']);
Route::get('/leads', [PageController::class, 'leads']);
Route::get('/works', [PageController::class, 'works']);

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('posts',[PostController::class, 'index']);
    Route::get('works',[WorkController::class, 'index'] );
    Route::get('leads',[LeadController::class, 'index'] );

});
Route::prefix('auth')->middleware('Authenticate')->group(function() {
    Route::get('login', [AuthController::class, 'getLogin'])->name('login');
    Route::get('forget_password', [AuthController::class, 'forget_password'])->name('forget_password');
    Route::get('reset_password', [AuthController::class, 'reset_password'])->name('reset_password');
});