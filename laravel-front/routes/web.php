<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\LoginController;

// 認証系ルート
Route::get('/login', [LoginController::class, 'showCustomLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'customLogin']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

