{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('/img/logo1.png') }}" class="mb-4 h-56 md:h-72">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('الأسم') }}" />
                <x-jet-input id="name"
                    class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('البريد الألكتروني') }}" />
                <x-jet-input id="email"
                    class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                    type="email" name="email" :value="old('email')" required />
            </div>
            <div class="flex mt-8 gap-x-2">
                <div class=" w-full">
                    <x-jet-label for="gender" />

                    <select name="gender" id="gender" wire:model="gender" required
                        class="px-8 py-3 w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="0">الجنس</option>
                        <option value="1">أنثى</option>
                        <option value="2">ذكر</option>
                    </select>
                </div>
                <div class=" w-full">
                    <x-jet-label for="type" />
                    <select name="type" id="type" wire:model="type" required
                        class="px-8 py-3 w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="0">النوع</option>
                        <option value="1">طالب</option>
                        <option value="2">تدريسي</option>
                        <option value="3">موظف</option>
                        <option value="4">اخرى</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('كلمة السر') }}" />
                <x-jet-input id="password"
                    class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                    type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('تأكيد كلمة السر') }}" />
                <x-jet-input id="password_confirmation"
                    class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                    type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-between mt-4">
                <x-jet-button class="ml-4">
                    {{ __('أنشاء') }}
                </x-jet-button>

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('لديك حساب بالفعل ؟') }}
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<div>
    @livewire('guest.new-user')
</div>
