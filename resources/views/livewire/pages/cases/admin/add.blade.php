<div>
    <div class="basis-5/6 w-5/6">
        <form wire:submit.prevent="add">
            {{-- name --}}
            <div class="grid grid-cols-none gap-1">
                <div class="mb-6">
                    <label for="name" class=" block mb-2 text-sm font-medium text-gray-900 ">
                        اسم الحالة

                    </label>
                    <input required wire:model.lazy="movie.name" type="text" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5"
                        placeholder="اسم الحالة">

                </div>
                {{-- image --}}
                <div class="mb-6">
                    <label for="name" class=" block mb-2 text-sm font-medium text-gray-900">
                        صورة الحالة
                    </label>
                    <input required wire:model.lazy="movie.name" type="file" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5"
                        placeholder="صورة الحالة">

                </div>
                {{-- details file --}}
                <div class="mb-6">
                    <label for="name" class=" block mb-2 text-sm font-medium text-gray-900">
                        مستمسكات شخصية

                    </label>
                    <input required wire:model.lazy="movie.name" type="file" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5"
                        placeholder="مستمسكات شخصية">

                </div>
                {{-- target --}}
                <div class="mb-6">
                    <label for="الهدف" class=" block mb-2 text-sm font-medium text-gray-900">
                        الهدف

                    </label>
                    <input required wire:model.lazy="movie.name" type="text" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5"
                        placeholder="الهدف">

                </div>
                {{-- received_price --}}
                {{-- <div class="mb-6">
                <label for="name" class=" block mb-2 text-sm font-medium text-gray-900">
                تم دفعه

                </label>
                <input required wire:model.lazy="movie.name" type="text" id="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5"
                    placeholder="تم دفعه">

            </div> --}}

                {{-- description --}}
                <div class="mt-4 grid grid-cols-1 gap-4 ">
                    <label for="message" class=" block text-sm font-medium text-gray-900">
                        الوصف

                    </label>
                    <textarea required wire:model.lazy="movie.description" id="message" rows="4"
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
</div>