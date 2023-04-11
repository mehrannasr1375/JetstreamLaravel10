<header class="bg-white border-b border-grey-300">


    <nav class="mx-auto flex max-w-7xl items-center justify-between p-3 lg:px-8" aria-label="Global">
        <!-- logo -->
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">کلینیک کامپیوتر</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <!--  mobile menu -->
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">نمایش منو</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <!-- middle links -->
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">خانه</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">فروشگاه</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">وبلاگ</a>
        </div>
        <!-- account area -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm py-2 px-3 text-gray-500 transition hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-purple-500">داشبورد</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm bg-purple-100 hover:bg-purple-200 transition rounded-r-lg py-2 px-3 text-gray-500 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-purple-500">ورود</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-purple-50 hover:bg-purple-100 transition rounded-l-lg py-2 px-3 text-sm text-gray-500 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-purple-500">ثبت نام</a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>


    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">خانه</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">فروشگاه</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">وبلاگ</a>
                    </div>
                    <div class="py-6 flex justify-center">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="p-2 text-sm text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-purple-500">داشبورد</a>
                            @else
                                <a href="{{ route('login') }}" class="p-2 text-sm text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-purple-500">ورود</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="mr-4 p-2 text-sm text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-purple-500">ثبت نام</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>
