@forelse ($events as $item)
    <div
        class="rounded-xl border-2 border-primary-100 hover:shadow-lg hover:border-primary-500 w-96 h-auto group duration-300">
        {{-- @admin
    start dropdown --}}
        {{-- <div class="flex justify-end relative">

        <button id="dropdownButton-{{ $item->id }}" data-dropdown-toggle="dropdown-{{ $item->id }}"
            class="absolute text-gray-800 focus:outline-none hover:bg-gray-300 text-xl rounded-md px-2.5 py-2.5"
            type="button">
            <i class="fa-solid fa-ellipsis-vertical "></i>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown-{{ $item->id }}" class="hidden z-10 rounded divide-y divide-gray-100 shadow bg-gray-50">
            <ul class="text-base" aria-labelledby="dropdownButton-{{ $item->id }}">
                <div class="group p-2">
                    <a href={{ route('edit-case', ['case_id'=> $item->id]) }} class=" w-full hover:bg-gray-200">
                        <i
                            class="text-green-400 fa-solid fa-pen-to-square text-xl hover:scale-110 hover:text-green-600 hover:rotate-12"></i>
                        تعديل
                    </a>
                    <button wire:click="confirm({{ $item->id }})" class=" w-full hover:bg-gray-200">
                        <i class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 hover:text-red-600"></i>
                        حذف
                    </button>
                </div>

            </ul>
        </div>
    </div>
    @endadmin --}}
        {{-- end dropdown --}}

        {{-- case Image --}}
        <div class="pt-3 px-3">
            {{-- <img class="rounded-t-lg" src="{{ asset($item->image_path) }}" alt="" /> --}}
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI7Vm3bWFcLUw9o1XiIVwWv3Vcuitvy9GOCg&usqp=CAU"
                class=" w-full rounded-lg ">
        </div>

        {{-- title + more info --}}
        <div class="p-6">
            <h5 class="text-center font-bold group-hover:text-green-600 text-3xl mb-2"> {{ $item->title }}</h5>
            <div class=" xs:28">
                <p class="text-gray-900 text-medium mb-4">
                    {{ Str::limit($item->description, 140) }}

                    {{-- more info button --}}
                    <button class="text-primary-500 hover:scale-110 font-bold duration-300 mb-4" type="button"
                        data-modal-toggle="defaultModal">
                        قراءة المزيد
                    </button>
                </p>
                <div id="defaultModal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow ">
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-red-600 rounded-bl-lg rounded-tr-lg p-3 ml-auto inline-flex items-center "
                                data-modal-toggle="defaultModal">
                                <i class="fa-solid fa-xmark text-2xl"></i>
                            </button>
                            <div class="flex justify-center items-center rounded-t border-b ">
                                <h5 class="text-center font-bold text-primary-900 text-3xl">
                                    {{ $item->title }}
                                </h5>
                            </div>

                            <div class="p-6 space-y-6">
                                <p class="text-base font-semibold leading-relaxed text-gray-600">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mb-5">
                <div class="flex justify-center @admin justify-between @endadmin">
                    <div class="font-bold font-noto text-xl group-hover:text-green-600 text-center ">
                        الهدف : {{ $item->target }} د.ع


                    </div>
                    <div class="text-right mt-2">
                        @admin
                            <button wire:click="confirm({{ $item->id }})" class="mx-2">
                                <i
                                    class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-600"></i>

                            </button>
                            <a href={{ route('edit-case', ['case_id' => $item->id]) }} class="mx-2">
                                <i
                                    class="text-primary-400 fa-solid fa-pen-to-square text-xl hover:rotate-12 hover:scale-110 duration-200 hover:text-primary-600"></i>

                            </a>
                        @endadmin
                    </div>
                </div>

            </div>
        </div>
    </div>
@empty
    <div class="text-2xl font-medium text-gray-700">
        لايوجد حالات
    </div>
@endforelse
