<div>

    <div class="grid grid-cols-4 gap-6" >
        @forelse ($users as $item)
        <div 
            class="shadow-sm shadow-gray-300 hover:shadow-gray-400 hover:shadow-lg p-4 w-full rounded-xl bg-gray-50 hover:bg-gray-200 transition duration-200">
            <div class="flex justify-end px-4 pt-4">
                <button id="dropdownButton" data-dropdown-toggle="dropdown"
                    class="hidden sm:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                    type="button">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                        </path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <ul class="py-1" aria-labelledby="dropdownButton">
                        <li class="mb-2">
                            <a class="cursor-pointer w-full p-4" wire:click="confirm({{$item->id}})">
                                <i class="text-red-600 fa-solid fa-trash"></i> Delete
                            </a>
                            <hr>
                        </li>
                        <li>
                            <button
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button" data-modal-toggle="authentication-modal">
                                Toggle modal
                            </button>

                        </li>

                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-5 mb-5">
                <div class="col-span-2 flex flex-col">
                    <img src="{{ asset($item->profile_photo_path ?? 'img/user.png') }}" alt=""
                        class=" rounded-full h-32 w-32" />
                    <h3 class=" text-xl mr-2 mt-4"> يملك {{ $item->shares_sum_share ?? 0 }} سهماً </h3>
                </div>

                <div class="col-span-3">
                    <h3 class="mt-6 text-center font-bold text-2xl ">{{ $item->name }}</h3>
                    <h3 class="mt-2 font-Kufi text-center text-base @if($item->type == 4) hidden @endif">@if($item->type
                        == 1) طالب
                        @elseif($item->type == 2) تدريسي @else موظف @endif</h3>

                </div>

            </div>



            @auth
            <h5 class="text-lg tracking-tight pt-5 ">البريد الالكتروني: {{ $item->email }}</h5>
            @endauth
            <p class="text-sm font-normal text-gray-500 ">انضم منذ: {{ $item->created_at }}</p>

        </div>
        @empty
        لا يوجد متبرعين
        @endforelse
        {{-- Modal --}}
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div  class="relative bg-white rounded-lg shadow ">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="authentication-modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">زيادة الاسهم</h3>
                        <form wire:submit.prevent="add({{ $item->id }} )" class="space-y-6" action="#">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">عدد
                                    الاسهم المضافة</label>
                                <input wire:moder="share" type="number">
                            </div>


                            <button type="submit"
                                class="w-full text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">اضافة
                                الاسهم</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>