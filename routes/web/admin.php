<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\WorkController;

Route::get('/', [PageController::class, 'dashboard']);
Route::get('posts',[PostController::class, 'index']);
Route::get('works',[WorkController::class, 'index'] );
Route::get('leads',[LeadController::class, 'index'] );
