<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('/img/logo1.png') }}" class="mb-4 h-56 md:h-72">
            </a>

        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if(session('status'))
        <div class="mb-4 text-sm font-medium text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('البريد الأالكتروني') }}" />
                <x-jet-input id="email"
                    class="block w-full mt-1 border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                    type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('كلمة السر') }}" />
                <x-jet-input id="password"
                    class="block w-full mt-1 border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                    type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 px-2">{{ __('تذكرني') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <x-jet-button class="ml-4">
                    {{ __('تسجيل دخول') }}
                </x-jet-button>

                <a class="text-md text-gray-600 underline hover:text-gray-900" href="{{ route('register') }}">
                    انشاء حساب جديد
                </a>
                @if(Route::has('password.request'))
                <a class="text-md text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('نسيت كلمة السر ؟') }}
                </a>
                @endif

            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
