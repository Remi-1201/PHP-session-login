<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;

Route::resource('users', UserController::class)
    ->only(['create', 'store', 'show']);
Route::resource('sessions', SessionsController::class)
    ->only(['create', 'store']);