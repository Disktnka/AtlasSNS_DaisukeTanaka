<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * ダッシュボード画面を表示
     */
    public function index()
    {
        // ログインしていない場合はログイン画面へリダイレクト
        if (!Auth::check()) {
            return redirect('/login');
        }

        // 投稿一覧を取得（投稿者の情報も含める）
        $posts = Post::with('user')->latest()->get();

        // フォロー・フォロワーのカウントを取得
        $followingCount = Auth::user()->following()->count();
        $followersCount = Auth::user()->followers()->count();

        // ダッシュボードビューにデータを渡す
        return view('dashboard', compact('posts', 'followingCount', 'followersCount'));
    }
}