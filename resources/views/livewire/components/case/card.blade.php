<div>
@forelse ($events as $item)

    <div class="rounded-lg  border-2 border-primary-100 hover:shadow-lg hover:border-primary-500 w-96 h-auto group">
        {{--
        @admin
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
                    <div class="text-right mt-2">@admin
                        <button wire:click="confirm({{ $item->id }})" class="mx-2">
                            <i class="text-red-400 fa-solid fa-trash text-xl hover:text-red-600"></i>

                        </button>

                        <button wire:click="$set('case_id', {{$item->id}})" class="mx-2" type="button" data-modal-toggle="case-modal">
                            <i class="text-primary-400 fa-solid fa-pen-to-square text-xl hover:text-primary-600"></i>
                        </button>

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

    <div wire:ignore.self id="case-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Large modal
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="case-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                @livewire('pages.cases.admin.edit' , ['case_id' => $case_id], key($case_id))
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="case-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </div>
        </div>
    </div>
</div>
