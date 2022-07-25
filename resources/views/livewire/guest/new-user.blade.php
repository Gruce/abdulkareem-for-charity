<div>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('/img/logo1.png') }}" class="mb-4 h-56 md:h-72">
                </a>
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form wire:submit.prevent="save">

                <div>
                    <x-jet-label for="name" value="{{ __('الأسم') }}" />
                    <x-jet-input wire:model="name"
                        class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    @error('name')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('البريد الألكتروني') }}" />
                    <x-jet-input wire:model="email"
                        class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                        type="email" name="email" :value="old('email')" required />
                    @error('email')
                    <span class="error">{{ $message }}</span>
                    @enderror
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
                    <x-jet-input wire:model="password"
                        class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                        type="password" name="password" required autocomplete="new-password" />
                    @error('password')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('تأكيد كلمة السر') }}" />
                    <x-jet-input wire:model="password_confirmation"
                        class="block mt-1 w-full border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0"
                        type="password" name="password_confirmation" required autocomplete="new-password" />
                    @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                @if ($type == 1)
                <div class="flex mt-8 gap-x-2">
                    <div class=" w-full">
                        <x-jet-label for="department" />

                        <select name="department" id="department" wire:model="department" required
                            class="px-8 py-3 w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0 text-sm">
                            <option value="0">القسم</option>
                            <option value="1">علوم حاسوب</option>
                            <option value="2">نظم المعلومات</option>
                        </select>
                        @error('department')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class=" w-full">
                        <x-jet-label for="study_type" />
                        <select name="study_type" id="study_type" wire:model="study_type" required
                            class="px-8 py-3 w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0 text-sm">
                            <option value="0">الدراسة</option>
                            <option value="1">صباحي</option>
                            <option value="2">مسائي</option>
                        </select>
                        @error('study_type')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex mt-8 gap-x-2">
                    <div class=" w-full">
                        <x-jet-label for="stage" />

                        <select name="stage" id="stage" wire:model="stage" required
                            class="px-8 py-3 w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0 text-sm">
                            <option value="0">المرحلة</option>
                            <option value="1">اولى </option>
                            <option value="2">ثانية</option>
                            <option value="3">ثالثة</option>
                            <option value="4">رابعة</option>

                        </select>
                        @error('stage')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class=" w-full">
                        <x-jet-label for="division" />
                        <select name="division" id="division" wire:model="division" required
                            class="px-8 py-3 w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:bg-white focus:ring-0 text-sm">
                            <option value="0">الشعبة</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                            <option value="5">E</option>

                        </select>
                        @error('division')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                @endif

                {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '"
                                    class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of
                                    Service') . '</a>',
                                'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '"
                                    class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy')
                                    . '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
                @endif --}}

                <div class="flex items-center justify-between mt-4">
                    <x-jet-button type="submit" class="ml-4">
                        {{ __('أنشاء') }}
                    </x-jet-button>

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('لديك حساب بالفعل ؟') }}
                    </a>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>
