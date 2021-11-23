<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Password\ForgetController;
use App\Http\Controllers\Auth\Password\ResetController;

Route::get('login', [LoginController::class, 'show'])->name('login.show');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('forget-password', [ForgetController::class, 'show'])->name('forget.show');
Route::post('send-link', [ForgetController::class, 'sendLink'])->name('send.link');

Route::get('reset-password', [ResetController::class, 'show'])->name('reset.show');
Route::post('reset-password', [ResetController::class, 'resetPassword'])->name('reset.password');