<form wire:submit.prevent="edit">
    <div class="flex h-auto items-center justify-center">

        <div class="grid rounded-lg w-full">
            <div class="flex justify-center">
                <div class="flex">
                    <h1 class="text-gray-800 font-bold md:text-2xl text-xl">تعديل معلومات العضو</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="md:text-sm text-xs text-gray-700 text-light font-semibold">الأسم</label>
                <input wire:model.lazy="name"
                    class="py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                    type="text" placeholder="الاسم" />
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <div class="p-1">
                    <select wire:model.lazy="department"
                        class="px-10 py-3 w-full rounded-md border-2 border-gray-200 bg-white border-transparent focus:border-primary-100 focus:bg-white focus:ring-0 text-sm">
                        <option value="">القسم</option>
                        <option value="1">علوم الحاسوب</option>
                        <option value="2">نظم المعلومات</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <div class="p-1">
                    <select wire:model.lazy="stage"
                        class="px-10 py-3 w-full rounded-md border-2 border-gray-200 bg-white border-transparent focus:border-primary-100 focus:bg-white focus:ring-0 text-sm">
                        <option value="">المرحلة</option>
                        <option value="1">اولى</option>
                        <option value="2">ثانية</option>
                        <option value="3">ثالثة</option>
                        <option value="4">رابعة</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <div class="p-1">
                    <select  wire:model.lazy="study_type"
                        class="px-10 py-3 w-full rounded-md border-2 border-gray-200 bg-white border-transparent focus:border-primary-100 focus:bg-white focus:ring-0 text-sm">
                        <option value="">الدراسة</option>
                        <option value="1">صباحية</option>
                        <option value="2">مسائية</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="md:text-sm text-xs text-gray-700 text-light font-semibold">رقم الهاتف</label>
                <input wire:model.lazy="phone_num"
                    class="py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                    type="text" placeholder="رقم الهاتف" />
            </div>

            {{-- <div class="flex flex-row w-full justify-center">
                <div class="w-1/2 mt-5 mx-7 items-center justify-center bg-grey-lighter">
                    <label
                        class="w-full flex flex-col items-center px-2 py-6  @if ($photo) bg-primary-700 text-white @else bg-white text-primary-700 @endif rounded-lg tracking-wide border-4 border-dashed border-primary-700 cursor-pointer hover:bg-primary-700 hover:text-white">
                        <div wire:loading wire:target="image_path">
                            <x-ui.loading />
                        </div>
                        <div wire:loading.remove wire:target="image_path">
                            @if ($photo)
                                <i class="fa-solid fa-check text-2xl"></i>
                            @else
                                <i class="fa-solid fa-upload text-2xl"></i>
                            @endif
                        </div>
                        <span class="mt-2 text-base leading-normal">
                            @if ($photo)
                                تم اختيار الصورة
                            @else
                                إختر صورة
                            @endif
                        </span>
                        <input wire:model.lazy="photo" type="file" class="hidden" />
                    </label>
                    @error('photo')
                        <span class="error text-primary-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم يتم
                            تحميل
                            الصورة</span>
                    @enderror
                </div>
            </div> --}}

            {{-- Button --}}
            <div class="flex items-center justify-center  md:gap-8 gap-4 pt-7 pb-7">
                <button type="submit"
                    class="w-auto bg-primary-600 hover:bg-primary-800 rounded-lg shadow-md hover:shadow-xl hover:scale-105 font-medium text-white px-4 py-2">تعديل</button>
            </div>

        </div>
    </div>
</form>
