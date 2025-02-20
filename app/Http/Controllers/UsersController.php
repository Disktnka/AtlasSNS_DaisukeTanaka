<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function search(){
        return view('users.search');
    }

    
}


class CurrentPasswordRule implements Rule
{

    
    public function passes($attribute, $value)
    {
        // ユーザーがログインしているかを確認
        if (Auth::check()) {
            // ユーザーの現在のパスワードを取得
            $currentPassword = Auth::user()->password;

            // 入力されたパスワードが現在のパスワードと一致するかどうかを確認
            return Hash::check($value, $currentPassword);
        }

        return false;
    }

    public function message()
    {
        return '現在のパスワードが正しくありません。';
    }
}

 public function rules()
    {
        return [
            'username' => 'required|min:2|max:12',
            'email' => 'required|email|min:5|max:40|unique:users,email',
            'password' => 'required|regex:/^[a-zA-Z0-9]+$/|min:8|max:20',
            'password_confirmation' => 'required|same:password|regex:/^[a-zA-Z0-9]+$/|min:8|max:20',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'ユーザー名は必須項目です。',
            'username.min' => 'ユーザー名は2文字以上で入力してください。',
            'username.max' => 'ユーザー名は12文字以内で入力してください。',
            
            'email.required' => 'メールアドレスは必須項目です。',
            'email.email' => '有効なメールアドレス形式で入力してください。',
            'email.min' => 'メールアドレスは5文字以上で入力してください。',
            'email.max' => 'メールアドレスは40文字以内で入力してください。',
            'email.unique' => 'このメールアドレスは既に登録されています。',
            
            'password.required' => 'パスワードは必須項目です。',
            'password.regex' => 'パスワードは英数字のみ使用できます。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.max' => 'パスワードは20文字以内で入力してください。',
            
            'password_confirmation.required' => 'パスワード確認は必須項目です。',
            'password_confirmation.same' => 'パスワード確認が一致しません。',
            'password_confirmation.regex' => 'パスワード確認は英数字のみ使用できます。',
            'password_confirmation.min' => 'パスワード確認は8文字以上で入力してください。',
            'password_confirmation.max' => 'パスワード確認は20文字以内で入力してください。',
        ];
    }
}