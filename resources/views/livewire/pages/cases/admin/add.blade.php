<!-- Add Case -->
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
                    <input
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
                <div class="w-1/2 mt-5 mx-7">
                    <label class=" md:text-sm text-xs text-gray-700 text-light font-semibold mb-1">ارفاق صورة
                        الحالة</label>
                    <div class="flex items-center justify-center w-full">
                        <label
                            class="flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-200 hover:border-primary-300 rounded-lg">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <i class="fa-solid fa-image w-10 h-10 text-gray-400 hover:text-primary-300"></i>
                                <p class="text-sm text-gray-400 group-hover:text-gray-600 pt-1 tracking-wide">
                                    اختر صورة</p>
                            </div>
                            <input wire:model.lazy="image_path" type="file" class="hidden" />
                        </label>
                    </div>
                </div>

                {{-- Case Personal info image --}}
                <div class="w-1/2 mt-5 mx-7">
                    <label class="md:text-sm text-xs text-gray-700 text-light font-semibold mb-1">صورة
                        المستمسكات</label>
                    <div class="flex items-center justify-center w-full">
                        <label
                            class="flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-200 hover:border-primary-300 rounded-lg">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <i
                                    class="fa-solid fa-file-circle-plus w-10 h-10 text-gray-400 hover:text-primary-300"></i>
                                <p class="text-sm text-gray-400 group-hover:text-gray-600 pt-1 tracking-wider">
                                    اختر صورة</p>
                            </div>
                            <input wire:model.lazy="file_path" type="file" class="hidden" />
                        </label>
                    </div>
                </div>
            </div>
            {{-- Button --}}
            <div class="flex items-center justify-center  md:gap-8 gap-4 pt-7 pb-7">
                <button type="submit"
                    class="w-auto bg-primary-400 hover:bg-primary-500 rounded-lg shadow-md hover:shadow-xl hover:scale-105 font-medium text-white px-4 py-2">أضف</button>
            </div>

        </div>
</div>
</form>
