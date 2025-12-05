<?php

use App\Http\Controllers\Api\Auth\SocialLoginController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('{driver}/redirect', [SocialLoginController::class, 'redirect'])
        ->name('auth.redirect');
    Route::get('{driver}/callback', [SocialLoginController::class, 'callback'])
        ->name('auth.callback');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
