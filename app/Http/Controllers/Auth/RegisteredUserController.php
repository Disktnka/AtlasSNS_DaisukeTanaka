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
    public function create(): View
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
        $validated = $request->validate([
            'username' => 'required|string|min:2|max:12',
            'email' => 'required|string|email|max:40|unique:users,email',
            'password' => 'required|string|min:8|max:20|regex:/^[a-zA-Z0-9]+$/',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = User::create([
            'username' => $validated['username'], // `name` に変更
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        session(['user_id' => $user->username]);

        Auth::login($user);

        return redirect('http://127.0.0.1:8000/added');

        
    }

    /**
     * Display the added user view.
     */
    public function added(): View
    {
        return view('auth.added');
    }
}
