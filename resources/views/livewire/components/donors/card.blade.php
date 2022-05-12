<div>

    <div x-data="{ isOpen: false}" class="grid grid-cols-4 gap-6">
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
                                <i class="text-red-600 fa-solid fa-trash text-sm hover:scale-125 hover:text-red-600"></i> Delete
                            </a>
                            
                        </li>
                        

                    </ul>
                </div>
            </div>
            @endadmin
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

    </div>


</div>