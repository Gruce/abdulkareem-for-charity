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

                <div class="flex flex-row w-full">
                    <div class="w-1/2 mt-5 mx-7 items-center justify-center bg-grey-lighter">
                        <label
                            class="w-full flex flex-col items-center px-2 py-6  @if ($image_path) bg-primary-700 text-white @else bg-white text-primary-700 @endif rounded-lg tracking-wide border-4 border-dashed border-primary-700 cursor-pointer hover:bg-primary-700 hover:text-white">
                            <div wire:loading wire:target="image_path">
                                <svg role="status"
                                    class="inline mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-red-600"
                                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="currentColor" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentFill" />
                                </svg>

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
                                {{-- <components\u-i\loading /> --}}
                                <svg role="status"
                                    class="inline mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-red-600"
                                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="currentColor" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentFill" />
                                </svg>

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
                            <input id="file" required type='file' class="hidden" wire:model="file_path" multiple />
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
