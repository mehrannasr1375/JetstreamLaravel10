<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;
use Laravel\Jetstream\Jetstream;

class UpdateUserPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules;

    public function update(User $user, array $input): void
    {
        Validator::make($input, $this->rules(), $this->messages())->validateWithBag('updatePassword');

        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }

    public function rules(): array
    {
        return [
            'current_password' => ['required', 'string', 'current_password:web'],
            'password' => ['required', 'min:8'],
            //'password' => $this->passwordRules(),
        ];
    }

    public function messages(): array
    {
        return [
            'current_password.required' => 'وارد کردن پسورد فعلی ضروری است!',
            'password.required' => 'وارد کردن پسورد جدید ضروری است!',
            'password.min' => 'پسورد جدید باید شامل حداقل 8 کاراکتر باشد',
            'current_password.string' => 'پسورد وارد شده نا معتبر است!',
            'current_password.current_password' => 'پسورد وارد شده با پسورد فعلی شما مطابقت ندارد!',
        ];
    }
}
