<div>
    <div class="px-4 pt-4">
        <form action="#" class="space-y-5" wire:submit.prevent="edit">
            
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="grid-cols-1">
                    <div class="p-2">
                        <h3 class="text-2xl font-semibold text-primary-500">المعلومات الاساسية</h3>
                        <hr class="w-1/2 mt-1">
                    </div>
                    <div class="form-item">
                        <label class="text-xl">الاسم الكامل</label>
                        <input wire:model="name" type="text" value="{{ $name }}"
                            class="bg-gray-50 border border-primary-400 text-sm w-full md:w-1/2 md:col-span-1 focus:ring-primary-600 focus:border-primary-500  block p-2.5 rounded-md mt-2 ">
                        @error('name')
                            <span class="text-red-500 error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                        <div class="form-item w-full mt-3">
                            <label class="text-xl">البريد الألكتروني</label>
                            <input wire:model="email" type="text" id="email"
                                class="bg-gray-50 border border-primary-400 w-full md:w-1/2 text-sm focus:ring-primary-600 focus:border-primary-500 block  p-2.5 mt-2 rounded-md">
                            @error('email')
                                <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="grid-cols-1">
                    <div class="p-2">
                        <h3 class="text-2xl font-semibold text-primary-500">معلومات الاتصال</h3>
                        <hr class="w-1/2 mt-1">
                    </div>
                    <div class="form-item">
                        <label class="text-xl ">رقم الهاتف</label>
                        <input wire:model="phone_number" type="text"
                            class="bg-gray-50 border border-primary-400 text-sm w-full md:w-1/2 focus:ring-primary-600 focus:border-primary-500 block p-2.5 mt-2 rounded-md">
                        @error('phone_number')
                            <span class="text-red-500 error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-item mt-3">
                        <label class="text-xl">معرف التلجرام</label>
                        <input wire:model="telegram_username" type="text"
                            class="bg-gray-50 border border-primary-400 text-sm w-full md:w-1/2 focus:ring-primary-600 focus:border-primary-500 block p-2.5 mt-2 rounded-md">
                        @error('telegram_username')
                            <span class="text-red-500 error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- profile image--}}
            <div class="justify-center">
                <label
                    class="w-full pt-5 h-28 md:w-1/4 flex flex-col items-center px-2 py-6  @if ($profile_photo) bg-primary-700 text-white @else bg-white text-primary-700 @endif rounded-lg tracking-wide border-4 border-dashed border-primary-700 cursor-pointer hover:bg-primary-700 hover:text-white">
                    <div wire:loading wire:target="profile_photo">
                        <x-ui.loading />
                    </div>
                    <div wire:loading.remove wire:target="profile_photo">
                        @if ($profile_photo)
                            <i class="fa-solid fa-check text-2xl"></i>
                        @else
                            <i class="fa-solid fa-upload text-2xl"></i>
                        @endif
                    </div>
                    <span class="mt-2 text-base leading-normal">
                        @if ($profile_photo)
                            تم اختيار الصورة
                        @else
                            إختر صورة
                        @endif
                    </span>
                    <input type='file' class="hidden" wire:model="profile_photo" />
                </label>
                @error('profile_photo')
                    <span class="error text-primary-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم يتم تحميل
                        الصورة</span>
                @enderror
            </div>
            
            <button type="submit"
                class="text-white bg-primary-600 hover:scale-105 duration-200 hover:bg-primary-800 focus:ring-2 focus:outline-none focus:ring-primary-600 font-medium text-sm w-40 px-5 py-2.5 text-center rounded-md">
                أرسل</button>
        </form>
    </div>

</div>
