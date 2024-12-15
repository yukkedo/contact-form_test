<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 登録画面
Route::get('/auth', [AuthController::class, 'index']); //ユーザー登録画面の表示
Route::post('/auth/register', [RegisteredUserController::class, 'store'])->name('register'); //新規ユーザー登録
// ログイン画面
Route::get('/auth/login', [AuthenticatedSessionController::class, 'create'])->name('login'); //ログイン画面の表示
Route::post('/auth/login', [AuthenticatedSessionController::class, 'store'])->name('login'); //ユーザーの認証処理の実行
// 管理画面
Route::middleware(['auth'])->get('/auth/admin', function () {
    return view('/auth/admin');
});

// お問い合わせフォーム
Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);