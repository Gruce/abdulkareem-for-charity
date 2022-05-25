<div>
    <form wire:submit.prevent="add">
        <div class="flex h-auto items-center justify-center">

            <div class="grid rounded-lg w-full">
                <div class="flex justify-center">
                    <div class="flex bg-primary-200 rounded-full md:p-2 p-2 border-2 border-primary-300">
                        <i class="fa-brands fa-hire-a-helper w-10 h-10 text-gray-500"></i>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="flex">
                        <h1 class="text-gray-800 font-bold md:text-2xl text-xl">إضافة الحالات</h1>
                    </div>
                </div>

                {{-- Case Name --}}
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="md:text-sm text-xs text-gray-700 text-light font-semibold">عنوان الحالة</label>
                    <input wire:model.lazy="title"
                        class="py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                        type="text" placeholder="عنوان الحالة" />
                </div>

                {{-- Total Target --}}
                <div class="flex flex-row w-full">
                    <div class="w-1/2 grid grid-cols-1 mt-5 mx-7">
                        <label class="w-full md:text-sm text-xs text-gray-700 text-light font-semibold">المبلغ
                            الكلي</label>
                        <input wire:model.lazy="target"
                            class="w-full py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                            type="number" placeholder="المبلغ الكلي" />
                    </div>

                    {{-- Received Payment --}}
                    <div class="grid grid-cols-1 mt-5 mx-7 w-1/2">
                        <label class="w-full md:text-sm text-xs text-gray-700 text-light font-semibold">المبلغ
                            الواصل</label>
                        <input wire:model.lazy="received_price"
                            class="w-full py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                            type="number" value="0" placeholder="المبلغ الواصل" />
                    </div>
                </div>

                {{-- Case Descrition --}}
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="md:text-sm text-xs text-gray-700 text-light font-semibold">تفاصيل الحالة</label>
                    <textarea wire:model.lazy="description"
                        class="py-2 px-3 rounded-lg h-32 border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                        type="text"></textarea>
                </div>

                <div class="flex flex-row w-full">
                    <div class="w-1/2 mt-5 mx-7 items-center justify-center bg-grey-lighter">
                        <label
                            class="w-full flex flex-col items-center px-2 py-6  @if ($image_path) bg-primary-700 text-white @else bg-white text-primary-700 @endif rounded-lg tracking-wide border-4 border-dashed border-primary-700 cursor-pointer hover:bg-primary-700 hover:text-white">
                            <div wire:loading wire:target="image_path">
                                <x-ui.loading />
                            </div>
                            <div wire:loading.remove wire:target="image_path">
                                @if ($image_path)
                                    <i class="fa-solid fa-check text-2xl"></i>
                                @else
                                    <i class="fa-solid fa-upload text-2xl"></i>
                                @endif
                            </div>
                            <span class="mt-2 text-base leading-normal">
                                @if ($image_path)
                                    تم اختيار الصورة
                                @else
                                    إختر صورة
                                @endif
                            </span>
                            <input wire:model.lazy="image_path" type="file" class="hidden" />
                        </label>
                        @error('image_path')
                            <span class="error text-primary-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم يتم تحميل
                                الصورة</span>
                        @enderror
                    </div>

                    <div class="w-1/2 mt-5 mx-7 items-center justify-center bg-grey-lighter">
                        <label
                            class="w-full flex flex-col items-center px-2 py-6  @if ($file_path) bg-primary-700 text-white @else bg-white text-primary-700 @endif rounded-lg tracking-wide border-4 border-dashed border-primary-700 cursor-pointer hover:bg-primary-700 hover:text-white">
                            <div wire:loading wire:target="file_path">
                                <x-ui.loading />
                            </div>
                            <div wire:loading.remove wire:target="file_path">
                                @if ($file_path)
                                    <i class="fa-solid fa-check text-2xl"></i>
                                @else
                                    <i class="fa-solid fa-upload text-2xl"></i>
                                @endif
                            </div>
                            <span class="mt-2 text-base leading-normal">
                                @if ($file_path)
                                    تم اختيار الملف
                                @else
                                    إختر ملف
                                @endif
                            </span>
                            <input id="file" type='file' class="hidden" wire:model="file_path"/>
                        </label>
                        @error('file_path')
                            <span class="error text-primary-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم يتم تحميل
                                الملف</span>
                        @enderror
                    </div>
                </div>

                {{-- Button --}}
                <div class="flex items-center justify-center  md:gap-8 gap-4 pt-7 pb-7">
                    <button type="submit"
                        class="w-auto bg-primary-600 hover:bg-primary-800 rounded-lg shadow-md hover:shadow-xl hover:scale-105 font-medium text-white px-4 py-2">أضف</button>
                </div>

            </div>
        </div>
    </form>
</div>
