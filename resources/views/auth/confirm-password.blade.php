<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            این ناحیه حفاظت شده است. جهت ادامه رمز عبور خود را مجددا وارد نمایید
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-label for="password" value="رمز علور" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-6">
                <x-button class="mr-4">
                    تایید
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
