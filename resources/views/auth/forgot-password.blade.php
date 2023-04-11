<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-base py-4 text-gray-600">
            رمز عبور خود را فراموش کرده اید؟
            آدرس ایمیلی که با آن در وبسایت ثبت نام نموده اید را وارد نمایید تا لینک بازیابی رمز عبور برای شما ارسال گردد.
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="آدرس ایمیل" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-6">
                <x-button>
                    ارسال ایمیل بازیابی رمز عبور
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
