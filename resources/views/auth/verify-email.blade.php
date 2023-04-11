<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            قبل از ادامه باید آدرس ایمیل خود را تایید نمایید.
            به ایمیل خود بروید و روی لینک تاییدی که برایتان ارسال کردیم کلیک نمایید.
            اگر ایمیلی دریافت ننموده اید، روی دکمه ارسال مجدد کلیک نمایید.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                یک ایمیل تایید جدید به ایمیل شما ارسال گردید!
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit">
                        ارسال مجدد ایمیل تایید
                    </x-button>
                </div>
            </form>

            <div>
                <a
                    href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    ویرایش پروفایل</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                        خروج
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
