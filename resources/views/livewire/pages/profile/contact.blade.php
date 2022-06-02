<div>
    <div class="px-4 pt-4 mb-5">
        <form action="#" class="space-y-1" wire:submit.prevent="edit">
            <div class="p-2">
                <h3 class="text-2xl font-semibold text-primary-500">معلومات الاتصال</h3>
                <hr class="w-full mt-1">
            </div>
           
            <div class="flex flex-col md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl">البريد الألكتروني</label>
                    <input  type="text" id="email"
                        class="bg-gray-50 border border-primary-400 w-full text-sm focus:ring-primary-600 focus:border-primary-500 block  p-2.5 mt-2 rounded-md">
                    {{-- @error('email')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror --}}
                </div>
            </div>
            <div class="form-item">
                <label class="text-xl ">رقم الهاتف</label>
                <input  type="text"
                    class="bg-gray-50 border border-primary-400 text-sm w-full focus:ring-primary-600 focus:border-primary-500 block p-2.5 mt-2 rounded-md">
                {{-- @error('phone_number')
                    <span class="text-red-500 error">{{ $message }}</span>
                @enderror --}}
            </div>
            <div class="form-item">
                <label class="text-xl ">معرف التليجرام</label>
                <input wire:model="telegram_username" type="text"
                    class="bg-gray-50 border border-primary-400 text-sm w-full focus:ring-primary-600 focus:border-primary-500 block p-2.5 mt-2 rounded-md">
                {{-- @error('telegram_username')
                    <span class="text-red-500 error">{{ $message }}</span>
                @enderror --}}
            </div>
        </form>
    </div>

</div>
