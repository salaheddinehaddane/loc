<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
    Route::prefix('posts')->group(function () {
        Route::get('get', [App\Http\Controllers\PostController::class, 'getPosts']);
    });
});

require __DIR__.'/auth.php';
