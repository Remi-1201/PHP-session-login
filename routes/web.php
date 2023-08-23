<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;

Route::resource('users', UserController::class)
    ->only(['create', 'store'])
    ->middleware('guest');
Route::get('/users/{user}', [UserController::class, 'show'])
    ->name('users.show')
    ->middleware('auth');
Route::resource('sessions', SessionsController::class)
    ->only(['create', 'store'])
    ->middleware('guest');
Route::get('/logout', [SessionsController::class, 'logout'])   
    ->name('logout')
    ->middleware('auth');