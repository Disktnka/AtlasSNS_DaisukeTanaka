<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\UserController;
use App\Http\Requests\UserRegistrationRequest; // このリクエストをインポート
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Handle the user registration.
     *
     * @param  \App\Http\Requests\UserRegistrationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRegistrationRequest $request)
    {
        // バリデーション済みデータを取得
        $validatedData = $request->validated();

        // パスワードをハッシュ化
        $validatedData['password'] = bcrypt($validatedData['password']);

        // ユーザー登録
        User::create($validatedData);

        // 登録後のリダイレクト
        return redirect()->route('register.success');
    }
}
