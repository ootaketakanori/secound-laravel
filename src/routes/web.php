<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MiddlewareController;

use App\Http\Controllers\SessionController;

Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);
Route::get('/middleware', [MiddlewareController::class, 'index']);
Route::post('/middleware', [MiddlewareController::class, 'post'])->middleware('first');
Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::post('/middleware', [MiddlewareController::class, 'post']);
