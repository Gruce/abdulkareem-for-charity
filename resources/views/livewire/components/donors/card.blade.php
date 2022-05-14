<div>

    <div x-data="{ isOpen: false }" class="grid grid-cols-4 gap-6">
        @forelse ($users as $item)
            <div
                class="shadow-sm shadow-gray-300 hover:shadow-gray-400 hover:shadow-md p-4 w-full rounded-xl bg-gray-50 hover:bg-gray-100 transition duration-200">
                @admin
                <div class="flex justify-end">
                    <button id="dropdownButton-{{ $item->id }}" data-dropdown-toggle="dropdown-{{ $item->id }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg hover:bg-gray-200 focus:ring-2 focus:ring-primary-300 px-2.5 py-2.5"
                        type="button">
                        <i class="fa-solid fa-ellipsis-vertical "></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown-{{ $item->id }}"
                        class="hidden group z-10 w-44 rounded divide-y divide-gray-100 shadow bg-gray-200">
                        <ul class="py-1 text-sm text-gray-200" aria-labelledby="dropdownButton-{{ $item->id }}">
                            <li class="mb-2">
                                <a class="cursor-pointer w-full p-4 block py-2 px-4 bg-gray-200 hover:bg-gray-600 font-bold hover:text-white text-black flex justify-between"
                                    wire:click="confirm({{ $item->id }})">
                                    <i
                                        class="text-red-600 fa-solid fa-trash text-md duration-200 group-hover:scale-125 hover:text-red-600"></i>
                                    حذف
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
                        <h3 class=" text-xl mr-2 mt-4"> يملك {{ $item->getShare() ?? 0 }} سهماً </h3>
                    </div>


                    <div class="col-span-3">
                        <h3 class="mt-6 text-center font-bold text-2xl ">{{ $item->name }}</h3>
                        <h3
                            class="mt-2 font-Alhurra text-center text-base @if ($item->type == 4) hidden @endif">
                            @if ($item->type == 1)
                                طالب
                            @elseif($item->type == 2)
                                تدريسي
                            @else
                                موظف
                            @endif
                        </h3>

                    </div>

                </div>
                @admin
                <div x-data="{ open: false }">
                    @if ($item->shares->count() > 0)
                        <button @click="open = ! open"><i
                                class="fa-solid fa-hand-holding-dollar h-10 w-10 mr-3 text-red-600 animate-pulse"></i>
                        </button>
                    @endif
                    <div x-show="open" @click.outside="open = false">
                        <div class="">
                            @foreach ($item->shares as $share)
                                <div
                                    class="px-5 py-2 text-3xl font-bold text-gray-600 bg-gray-200 rounded-lg flex justify-between">
                                    <div>
                                        <h3 class="text-xl mr-2 ">تبرع :
                                            <span>{{ $share->share }}</span>
                                        </h3>
                                    </div>
                                    <div>
                                        <button type="button"
                                            wire:click="accept({{ $share->id }}, {{ $share->state }})"
                                            class="focus:outline-none text-white bg-green-500 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">قبول</button>
                                        <button type="button" wire:click="deleteShare({{ $share->id }})"
                                            class="focus:outline-none text-white bg-red-500 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">حذف</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                @endadmin

                @auth
                    <h5 class="text-lg tracking-tight pt-5">البريد الالكتروني: {{ $item->email }}</h5>
                @endauth
                <p class="text-sm font-normal text-gray-500">انضم منذ: {{ $item->created_at }}</p>

            </div>
        @empty
            لا يوجد متبرعين
        @endforelse

    </div>


</div>
