<div>

    <form wire:submit.prevent="add">
        {{-- name --}}
        <div class="grid grid-cols-2 gap-2">
            <div class="mb-6 ">
                <label for="name" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    اسم الحالة

                </label>
                <input required wire:model.lazy="movie.name" type="text" id="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="name">

            </div>

            {{-- description --}}
            <div class="mt-4 grid grid-cols-1 gap-4 ">
                <label for="message" class=" block text-sm font-medium text-gray-900 dark:text-gray-400">
                    الوصف

                </label>
                <textarea required wire:model.lazy="movie.description" id="message" rows="4"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:shadow-sm-light"
                    placeholder="description..."></textarea>
            </div>

            <div>
                <button type="submit"
                    class="block text-white focus:ring-4 font-medium text-sm rounded-lg px-5 py-2.5 focus:outline-none bg-red-700 hover:bg-red-800 focus:ring-red-300">Add</button>
            </div>
        </div>
    </form>

</div>
