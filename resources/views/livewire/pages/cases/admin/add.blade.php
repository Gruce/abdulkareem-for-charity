{{-- <div>
    <div class="w-5/6 basis-5/6">
        <form wire:submit.prevent="add">
            {{-- name --
            <div class="grid grid-cols-none gap-1">
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                        اسم الحالة

                    </label>
                    <input required wire:model.lazy="title" type="text" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5"
                        placeholder="اسم الحالة">

                </div>
                {{-- image --
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                        صورة الحالة
                    </label>
                    <input required wire:model.lazy="image_path" type="file" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5"
                        placeholder="صورة الحالة">

                </div>
                {{-- details file --
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                        مستمسكات شخصية

                    </label>
                    <input required wire:model.lazy="file_path" type="file" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5"
                        placeholder="مستمسكات شخصية">

                </div>
                {{-- target --
                <div class="mb-6">
                    <label for="الهدف" class="block mb-2 text-sm font-medium text-gray-900 ">
                        الهدف

                    </label>
                    <input required wire:model.lazy="target" type="number" 
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5"
                        placeholder="الهدف">

                </div>
                {{-- received_price --}}
                {{-- <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                تم دفعه

                </label>
                <input required wire:model.lazy="movie.name" type="text" id="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5"
                    placeholder="تم دفعه">

            </div> --}}

                {{-- description --
                <div class="grid grid-cols-1 gap-4 mt-4 ">
                    <label for="message" class="block text-sm font-medium text-gray-900 ">
                        الوصف

                    </label>
                    <textarea required wire:model.lazy="description" id="message" rows="4"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:shadow-sm-light"
                        placeholder="الوصف..."></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="block text-white focus:ring-4 font-medium text-sm rounded-lg px-5 py-2.5 focus:outline-none bg-blue-700 hover:bg-blue-800 focus:ring-blue-300">Add</button>
                </div>
            </div>

        </form>

    </div>
</div> --}}

<!-- component -->
<div class="">
<div class="flex items-center justify-center h-screen mt-32 mb-32">
    <div class="grid w-full rounded-lg ">
      <div class="flex justify-center py-4">
        <div class="flex p-2 bg-green-200 border-2 border-blue-300 rounded-full md:p-4">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
        </div>
      </div>
  
      <div class="flex justify-center">
        <div class="flex">
          <h1 class="text-xl font-bold text-gray-800 md:text-2xl">إضافة حالات</h1>
        </div>
      </div>
  
      <div class="grid grid-cols-1 mt-5 mx-7">
        <label class="text-xs font-semibold text-gray-700 uppercase md:text-sm text-light">عنوان الحالة</label>
        <input class="px-3 py-2 mt-1 border-2 rounded-lg border-primary-500 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent" type="text" />
      </div>
  
      <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2 md:gap-8 mx-7">
        <div class="grid grid-cols-1">
            <label for="message" class="block text-sm font-semibold text-gray-700 text-light">
                الوصف
            </label>
            <textarea required wire:model.lazy="description" id="message" rows="4"
                class="bg-white-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:shadow-sm-light"
                placeholder="الوصف"></textarea>
        </div>

        <div class="grid grid-cols-1">
          <label class="text-xs font-semibold text-gray-700 uppercase md:text-sm text-light">المبلغ الكلي</label>
          <input class="px-3 py-2 mt-1 border-2 border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" />
        </div>
      </div>
  
      <div class="grid grid-cols-1 mt-5 mx-7">
        <label class="text-xs font-semibold text-gray-700 uppercase md:text-sm text-light">المبلغ الواصل</label>
        <input class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text"/>
      </div>
  
      <div class="grid grid-cols-1 mt-5 mx-7">
        <label class="mb-1 text-xs font-semibold text-gray-700 uppercase md:text-sm text-light">ارفاق صورة</label>
          <div class='flex items-center justify-center w-full'>
              <label class='flex flex-col w-full h-32 border-4 border-blue-100 border-dashed rounded-lg hover:bg-blue-100 hover:border-blue-300 group'>
                  <div class='flex flex-col items-center justify-center pt-7'>
                    <svg class="w-10 h-10 text-gray-400 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-gray-600'>اختر صورة</p>
                  </div>
                <input type='file' class="hidden" />
              </label>
          </div>
      </div>
  
      <div class='flex items-center justify-center gap-4 pt-5 pb-5 md:gap-8'>
        <button class='w-auto px-4 py-2 font-medium text-white bg-blue-500 rounded-lg shadow-xl hover:bg-blue-700'>Create</button>
      </div>
  
    </div>
  </div>
</div>

  {{-- 
    title
    description
    target
    image path
    file path
    received price
    --}}