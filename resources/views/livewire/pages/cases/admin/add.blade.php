<!-- component -->
<div class="">
    <form wire:submit.prevent="add">
        <div class="flex h-screen items-center justify-center  mt-32 mb-32">
            <div class="grid  rounded-lg  w-full ">
                <div class="flex justify-center py-4">
                    <div class="flex bg-green-200 rounded-full md:p-4 p-2 border-2 border-blue-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="flex">
                        <h1 class="text-gray-800 font-bold md:text-2xl text-xl">إضافة حالات</h1>
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-700 text-light font-semibold">عنوان
                        الحالة</label>
                    <input wire:model.lazy="title"
                        class="py-2 px-3 rounded-lg border-2 border-primary-600 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent"
                        type="text" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label for="message" class="block text-sm text-gray-700 text-light font-semibold">
                            الوصف
                        </label>
                        <textarea required wire:model.lazy="description" id="message" rows="4"
                            class="bg-white-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:shadow-sm-light"
                            placeholder="الوصف"></textarea>
                    </div>

                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-700 text-light font-semibold">المبلغ
                            الكلي</label>
                        <input wire:model.lazy="target"
                            class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="number" />
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-700 text-light font-semibold mb-1">ارفاق
                        صورة</label>
                    <div class='flex items-center justify-center w-full'>
                        <label
                            class='flex flex-col border-4 border-dashed border-blue-100 w-full h-32 hover:bg-blue-100 hover:border-blue-300 group rounded-lg'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-gray-400 group-hover:text-blue-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p
                                    class='lowercase text-sm text-gray-400 group-hover:text-gray-600 pt-1 tracking-wider'>
                                    اختر صورة</p>
                            </div>
                            <input wire:model.lazy="image_path" type='file' class="hidden" />
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-700 text-light font-semibold mb-1">ارفاق
                        مستمسكات</label>
                    <div class='flex items-center justify-center w-full'>
                        <label
                            class='flex flex-col border-4 border-dashed border-blue-100 w-full h-32 hover:bg-blue-100 hover:border-blue-300 group rounded-lg'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-gray-400 group-hover:text-blue-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p
                                    class='lowercase text-sm text-gray-400 group-hover:text-gray-600 pt-1 tracking-wider'>
                                    اختر صورة</p>
                            </div>
                            <input wire:model.lazy="file_path" type='file' class="hidden" />
                        </label>
                    </div>
                </div>

                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button type="submit"
                        class='w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Create</button>
                </div>

            </div>
        </div>
    </form>
</div>

