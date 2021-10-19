<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Password\AuthController;

Route::get('login', [AuthController::class, 'getLogin'])->name('get.login');
Route::get('forget-password', [AuthController::class, 'forgetPassword'])->name('forget.password');
Route::get('reset-password', [AuthController::class, 'resetPassword'])->name('reset.password');
 