<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\FollowerController;

// ユーザー登録関連
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');
    Route::get('added', [RegisteredUserController::class, 'added'])->name('added');
});

Route::middleware(['auth'])->group(function () {
    // ログイン後にアクセス可能なルート
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// ログイン関連
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ダッシュボード
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// トップページ
Route::get('top', [PostsController::class, 'index']);

// プロフィール関連
Route::get('profile', [ProfileController::class, 'profile']);
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// **ユーザー検索ルート**
Route::get('/user/search', [UsersController::class, 'search'])->name('user.search');

// 投稿機能
Route::post('/post', [PostsController::class, 'store'])->name('post.store');

// **フォロー・フォロワー関連**
Route::get('/follow-list', [FollowController::class, 'index'])->name('follow.list');
Route::get('/follower-list', [FollowerController::class, 'index'])->name('follower.list');
