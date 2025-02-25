<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // バリデーション
        $validated = $request->validate([
            'username' => 'required|string|min:2|max:12',
            'email' => 'required|string|email|max:40|unique:users,email',
            'password' => 'required|string|min:8|max:20|regex:/^[a-zA-Z0-9]+$/',
            'password_confirmation' => 'required|same:password',
        ]);

        // ユーザーを作成
        $user = User::create([
            'username' => $validated['username'], // `name` に変更
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // セッションにユーザー名を保存
        session(['userName' => $user->username]);

        // ログイン
        Auth::login($user);

        // 登録完了ページにリダイレクト
        return redirect()->route('added');
    }

    /**
     * Display the added user view.
     */
    public function added(): View
    {
        // セッションからユーザー名を取得
        $userName = session('userName');
    
        return view('auth.added', compact('userName'));
    }
}
