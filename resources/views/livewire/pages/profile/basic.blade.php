<div>
    <div class="px-4 pt-4">
        <form action="#" class="flex flex-col space-y-8" wire:submit.prevent="edit">
            <div class="p-2">
                <h3 class="text-2xl font-semibold text-primary-700">المعلومات الاساسية</h3>
                <hr class="w-1/2">
            </div>
            <div class="form-item">
                <label class="text-xl ">الاسم الكامل</label>
                <input wire:model="name" type="text" value="{{ $name }}"
                    class="bg-gray-50 border border-primary-400 text-sm focus:ring-primary-600 focus:border-primary-500 w-1/2 block p-2.5 rounded-md mt-2">
                @error('name')
                    <span class="text-red-500 error">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl ">البريد الألكتروني</label>
                    <input wire:model="email" type="text" id="email"
                        class="bg-gray-50 border border-primary-400  text-sm focus:ring-primary-600 focus:border-primary-500 block w-1/2 p-2.5 mt-2 rounded-md">
                    @error('email')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="p-2">
                <h3 class="text-2xl font-semibold text-primary-700">معلومات الاتصال</h3>
                <hr class="w-1/2">
            </div>
            <div class="form-item">
                <label class="text-xl ">رقم الهاتف</label>
                <input wire:model="phone_number" type="text"
                    class="bg-gray-50 border border-primary-400 text-sm focus:ring-primary-600 focus:border-primary-500 block w-1/2 p-2.5 mt-2 rounded-md">
                @error('phone_number')
                    <span class="text-red-500 error">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-1/2 group">
                <label class="text-xl ">اختر صورة الملف الشخصي</label>
                <div class="flex items-center justify-center w-full">
                    <label
                        class="flex flex-col border-4 border-dashed border-primary-100 w-full h-32 hover:bg-gray-100 group-hover:border-primary-500 rounded-md">
                        <div class="flex flex-col items-center justify-center pt-7">
                            <i class="fa-solid fa-image w-10 h-10 text-gray-400 group-hover:text-primary-500"></i>
                            <p class="text-sm text-gray-400 group-hover:text-gray-600 pt-1 tracking-wide">
                                إختر صورة</p>
                        </div>
                        <input wire:model="profile_photo" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            <button type="submit"
                class="text-white bg-primary-600 hover:scale-105 duration-200 hover:bg-primary-800 focus:ring-2 focus:outline-none focus:ring-primary-600 font-medium text-sm w-40 px-5 py-2.5 text-center rounded-md">
                أرسل</button>
        </form>
    </div>

</div>
