<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Rules\Password;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input): User
    {
        Validator::make($input, $this->rules(), $this->messages())->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8'],
            //'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'وارد کردن نام ضروری است!',
            'name.string' => 'نام نا معتبر است!',
            'name.max' => ' نام نا معتبر است!',
            'email.required' => 'وارد کردن ایمیل ضروری است!',
            'email.email' => 'ایمیل نا معتبر است!',
            'email.string' => 'ایمیل نا معتبر است!',
            'email.max' => 'ایمیل نا معتبر است!',
            'email.unique' => 'ایمیل تکراری است!',
            'password.min' => 'پسورد باید شامل حداقل 8 کاراکتر باشد',
            'password.required' => 'وارد کردن رمز عبور ضروری است!',
            'password.string' => 'رمز عبور نامعتبر است!',
            'password.confirmed' => 'وارد کردن  تکرار رمز عبور ضروری است!',
            'terms.accepted' => 'تایید کردن قوانین ضروری است!',
            'terms.required' => 'تایید کردت قوانین ضروری است!',
        ];
    }
}
