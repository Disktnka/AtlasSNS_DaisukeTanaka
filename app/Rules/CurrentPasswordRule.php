<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CurrentPasswordRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CurrentPasswordRule implements Rule
{
    public function passes($attribute, $value)
    {
        if (Auth::check()) {
            return Hash::check($value, Auth::user()->password);
        }
        return false;
    }

    public function message()
    {
        return '現在のパスワードが正しくありません。';
    }
}

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CurrentPasswordRule implements Rule
{
    public function passes($attribute, $value)
    {
        if (Auth::check()) {
            return Hash::check($value, Auth::user()->password);
        }
        return false;
    }

    public function message()
    {
        return '現在のパスワードが正しくありません。';
    }
}
