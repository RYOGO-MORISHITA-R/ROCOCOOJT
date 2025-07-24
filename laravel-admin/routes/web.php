<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CssController;
use App\Http\Controllers\JsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\HomeController;

// 認証系ルート
Route::get('/login', [LoginController::class, 'showCustomLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'customLogin']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// ログイン必須ルート
Route::middleware(['auth'])->group(function () {

    // ホーム画面
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // テンプレート一覧・詳細・登録・編集
    Route::get('/templateList', [TemplateController::class, 'index'])->name('templateList');
    Route::get('/template/create', [TemplateController::class, 'create'])->name('templateCreate');
    Route::post('/template/store', [TemplateController::class, 'store'])->name('templateStore');
    Route::get('/template/{id}', [TemplateController::class, 'show'])->name('templateShow');
    Route::get('/template/{id}/edit', [TemplateController::class, 'edit'])->name('templateEdit');
    Route::put('/template/{id}', [TemplateController::class, 'update'])->name('templateUpdate');

    // CSS管理
    Route::get('/cssList', [CssController::class, 'index'])->name('cssList');
    Route::get('/css/create', [CssController::class, 'create'])->name('cssCreate');
    Route::post('/css/store', [CssController::class, 'store'])->name('cssStore');

    // JS管理
    Route::get('/jsList', [JsController::class, 'index'])->name('jsList');
    Route::get('/js/create', [JsController::class, 'create'])->name('jsCreate');
    Route::post('/js/store', [JsController::class, 'store'])->name('jsStore');

    // ユーザー管理
    Route::get('/userList', [UserController::class, 'index'])->name('userList');
    Route::get('/user/create', [UserController::class, 'create'])->name('userCreate');
    Route::post('/user/store', [UserController::class, 'store'])->name('userStore');

    // 会員管理
    Route::get('/memberList', [MemberController::class, 'index'])->name('memberList');
});
