<?php

namespace App\Http\Requests;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function authorize()
    {
        return true; // 認証の必要がない場合は true を返す
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
            'email.unique' => 'このメールアドレスは既に登録されています。',
            'password.required' => 'パスワードは必須項目です。',
            'password.regex' => 'パスワードは英数字のみ使用できます。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.max' => 'パスワードは20文字以内で入力してください。',
            'password_confirmation.required' => 'パスワード確認は必須項目です。',
            'password_confirmation.same' => 'パスワード確認が一致しません。',
        ];
    }
}
