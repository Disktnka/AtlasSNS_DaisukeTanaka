<?php
// app/Http/Controllers/MainController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Show the main page.
     */
    public function index()
    {
        return view('main'); // resources/views/main.blade.php を表示
    }
}

use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        // ログイン中のユーザー情報を取得
        $user = Auth::user();

        // もしユーザーが認証されていなければログインページへリダイレクト
        if (!$user) {
            return redirect()->route('login');
        }

        return view('main', [
            'user' => $user,
            'followersCount' => $user->followers()->count(),
            'followingCount' => $user->following()->count(),
        ]);
    }
}

