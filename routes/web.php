<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->middleware('guest');
Route::get('login', [WelcomeController::class, 'index'])->middleware('guest')->name('login');
Route::get('dashboard', [WelcomeController::class, 'welcome'])->middleware('auth');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::post('comments', [CommentController::class, 'store']);