<?php

namespace App\Http\Requests;

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
        return true; // 認証不要の設定
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:12',
            'email' => 'required|string|email|min:5|max:40|unique:users,email',
            'password' => [
                'required',
                'string',
                'regex:/^[a-zA-Z0-9]+$/',
                'min:8',
                'max:20',
            ],
            'password_confirmation' => [
                'required',
                'string',
                'same:password',
                'regex:/^[a-zA-Z0-9]+$/',
                'min:8',
                'max:20',
            ],
        ];
    }

    /**
     * Get custom error messages for validation failures.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'name.required' => 'ユーザー名は必須項目です。',
            'name.min' => 'ユーザー名は2文字以上で入力してください。',
            'name.max' => 'ユーザー名は12文字以内で入力してください。',
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
