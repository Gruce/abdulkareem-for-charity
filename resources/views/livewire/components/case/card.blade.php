<div>
    <div class="grid grid-cols-4 gap-6 pt-5">
        @forelse ($events as $item)
            <div class="rounded-t-lg  bg-gray-50 hover:bg-gray-100 ">
                @admin
                <div class="flex justify-end relative">
                    {{-- start dropdown --}}
                    <button id="dropdownButton-{{ $item->id }}" data-dropdown-toggle="dropdown-{{ $item->id }}"
                        class="absolute text-gray-800 focus:outline-none hover:bg-gray-300 text-xl rounded-md px-2.5 py-2.5"
                        type="button">
                        <i class="fa-solid fa-ellipsis-vertical "></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown-{{ $item->id }}"
                        class="hidden z-10 rounded divide-y w-32 divide-gray-100 shadow bg-gray-50">
                        <ul class="text-base flex flex-row" aria-labelledby="dropdownButton-{{ $item->id }}">
                            <div class="group p-2">
                                <a href="{{ route('edit-case', ['case_id' => $item->id]) }}" class="hover:bg-gray-200">
                                    <i
                                        class="text-green-400 fa-solid fa-pen-to-square text-xl hover:scale-110 hover:text-green-600 hover:rotate-12">
                                    </i>
                                    تعديل
                                </a>
                                <button wire:click="confirm({{ $item->id }})" class=" w-full hover:bg-gray-200">
                                    <i
                                        class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 hover:text-red-600"></i>
                                    حذف
                                </button>
                            </div>

                        </ul>
                    </div>
                </div>
                @endadmin
                {{-- end dropdown --}}

                {{-- case Image --}}
                <a href="#!">
                    {{-- <img class="rounded-t-lg" src="{{ asset($item->image_path) }}" alt="" /> --}}
                    <img src="/img/about.png" class="rounded-md pl-3 pt-3 pr-3" alt="">
                </a>

                {{-- title + more info --}}
                <div class="p-6">
                    <h5 class="text-center font-bold text-primary-900 text-3xl mb-2"> {{ $item->title }}</h5>
                    <div class=" xs:28">
                        <p class="text-gray-900 text-medium mb-4">
                            {{ Str::limit($item->description, 140) }}

                            {{-- more info button --}}
                            <button class="text-primary-800 font-bold transition duration-300 ease-in-out mb-4"
                                type="button" data-modal-toggle="defaultModal">
                                قراءة المزيد
                            </button>
                        </p>
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-red-600 rounded-lg p-3 ml-auto inline-flex items-center "
                                        data-modal-toggle="defaultModal">
                                        <i class="fa-solid fa-xmark text-2xl"></i>
                                    </button>
                                    <div class="flex justify-center items-center rounded-t border-b ">
                                        <h5 class="text-center font-bold text-primary-900 text-3xl">
                                            {{ $item->title }}
                                        </h5>
                                    </div>

                                    <div class="p-6 space-y-6">
                                        <p class="text-base font-Alhurra font-semibold leading-relaxed text-gray-600">
                                            {{ $item->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-5">

                        <div class="font-bold font-2xl text-primary-800 text-center mb-2">
                            الهدف : {{ $item->target }} د.ع
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-2xl font-medium text-gray-700">
                لايوجد حالات
            </div>
        @endforelse
    </div>
</div>
