<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KeywordController;

Route::prefix('/keywords')->name('keywords.')->group(function() {
    Route::post('/', [KeywordController::class, 'store'])->name('store');
});