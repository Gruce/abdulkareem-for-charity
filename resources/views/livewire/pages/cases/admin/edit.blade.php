<div>

    <div class="flex h-auto items-center justify-center">
        <form wire:submit.prevent="edit">
            <div class="grid rounded-lg w-full">
                <div class="flex justify-center">
                    <div class="flex bg-primary-200 rounded-full md:p-2 p-2 border-2 border-primary-300">
                        <i class="fa-brands fa-hire-a-helper w-10 h-10 text-gray-500"></i>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="fzlex">
                        <h1 class="text-gray-800 font-bold md:text-2xl text-xl">تعديل الحالات</h1>
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
                            type="number" placeholder="المبلغ الواصل" />
                    </div>
                </div>

                {{-- Case Descrition --}}
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="md:text-sm text-xs text-gray-700 text-light font-semibold">تفاصيل الحالة</label>
                    <textarea wire:model.lazy="description"
                        class="py-2 px-3 rounded-lg h-32 border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                        type="text"></textarea>
                </div>

                {{-- Case Image --}}
                <div class="flex flex-row w-full">
                    <div class="w-1/2 mt-5 mx-7 items-center justify-center bg-grey-lighter">
                        <label
                            class="w-full flex flex-col items-center px-2 py-6  @if ($new_image) bg-primary-700 text-white @else bg-white text-primary-700 @endif rounded-lg tracking-wide border-4 border-dashed border-primary-700 cursor-pointer hover:bg-primary-700 hover:text-white">
                            <div wire:loading wire:target="new_image">
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
                                @if ($new_image)
                                تم تعديل الصورة
                                @else
                                تعديل الصورة
                                @endif
                            </span>
                            <input wire:model.lazy="new_image" type="file" class="hidden" />
                        </label>
                        @error('new_image')
                        <span class="error text-primary-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم يتم تحميل
                            الصورة</span>
                        @enderror
                    </div>

                    <div class="w-1/2 mt-5 mx-7 items-center justify-center bg-grey-lighter">
                        <label
                            class="w-full flex flex-col items-center px-2 py-6  @if ($new_file) bg-primary-700 text-white @else bg-white text-primary-700 @endif rounded-lg tracking-wide border-4 border-dashed border-primary-700 cursor-pointer hover:bg-primary-700 hover:text-white">
                            <div wire:loading wire:target="new_file">
                                <x-ui.loading />
                            </div>
                            <div wire:loading.remove wire:target="new_file">
                                @if ($new_file)
                                <i class="fa-solid fa-check text-2xl"></i>
                                @else
                                <i class="fa-solid fa-upload text-2xl"></i>
                                @endif
                            </div>
                            <span class="mt-2 text-base leading-normal">
                                @if ($new_file)
                                تم تعديل الملف
                                @else
                                تعديل الملف
                                @endif
                            </span>
                            <input id="file" type='file' class="hidden" wire:model="new_file" />
                        </label>
                        @error('new_file')
                        <span class="error text-primary-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم يتم تحميل
                            الملف</span>
                        @enderror
                    </div>
                </div>

                {{-- Button --}}
                <div class="flex items-center justify-center  md:gap-8 gap-4 pt-7 pb-7">
                    <button type="submit"
                        class="w-auto bg-primary-600 hover:bg-primary-800 rounded-lg shadow-md hover:shadow-xl hover:scale-105 font-medium text-white px-4 py-2">تعديل</button>
                </div>

            </div>
        </form>
    </div>

</div>