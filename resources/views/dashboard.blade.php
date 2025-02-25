<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        $followingCount = Auth::user()->following()->count();
        $followersCount = Auth::user()->followers()->count();

        return view('dashboard', compact('posts', 'followingCount', 'followersCount'));
    }
}
