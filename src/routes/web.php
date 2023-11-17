<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MiddlewareController;

Route::prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
    Route::get('/', [TestController::class, 'index']);
    Route::post('/', [TestController::class, 'post']);
    Route::get('/middleware', [MiddlewareController::class, 'index']);
    Route::post('/middleware', [Middleware::class, 'post']);
});
Route::get('/relation', [AuthorController::class, 'relate']);
