<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * ログインページを表示
     */
    public function showLoginForm()
    {
        return view('auth.login'); // ログインフォームのビューを返す
    }

    /**
     * ログイン処理
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // 入力値のバリデーション
        $credentials = $request->validate([
            'email' => 'required|email', // メールアドレスの検証
            'password' => 'required',    // パスワードの検証
        ]);

        // ユーザーの認証
        if (Auth::attempt($credentials)) {
            // 認証成功
            $request->session()->regenerate(); // セッションの再生成
            return redirect()->intended('/dashboard'); // ダッシュボードにリダイレクト
        }

        // 認証失敗
        return back()->withErrors([
            'email' => 'ログイン情報が正しくありません', // エラーメッセージの表示
        ]);
    }

    /**
     * ログアウト処理
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        // ログアウト処理
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // ログイン画面にリダイレクト
        return redirect('/login');
    }
}
