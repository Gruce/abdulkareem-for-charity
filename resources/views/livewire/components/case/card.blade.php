<div>
    <div class="grid grid-cols-4 gap-6 pt-5">
        @forelse ($events as $item)
            <div class="rounded-t-lg  bg-gray-50 w-full hover:bg-gray-100 ">
                <div class="flex justify-end relative">
                    {{-- start dropdown --}}
                    <button id="dropdownButton-{{ $item->id }}" data-dropdown-toggle="dropdown-{{ $item->id }}"
                        class="absolute text-gray-800 focus:outline-none hover:bg-gray-300 text-xl rounded-md px-2.5 py-2.5"
                        type="button">
                        <i class="fa-solid fa-ellipsis-vertical "></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown-{{ $item->id }}"
                        class="hidden group z-10 w-44 rounded divide-y divide-gray-100 shadow bg-gray-50">
                        <ul class="py-1 text-base" aria-labelledby="dropdownButton-{{ $item->id }}">

                        @admin
                            <div>
                                
                                <a href={{ route('edit-case', ['case_id' => $item->id]) }}>
                                    <i class="text-green-500 fa-solid fa-pen-to-square text-xl hover:scale-110 hover:text-green-600 hover:rotate-12">
                                    </i>
                                    تعديل
                                </a>

                                <br>

                                <button wire:click="confirm({{ $item->id }})" class="">
                                    <i class="text-red-500 fa-solid fa-trash text-xl hover:scale-110 hover:text-red-600">
                                    </i>
                                    حذف
                                </button>
                                
                            </div>
                        @endadmin
                        </ul>
                    </div>
                </div>
                {{-- end dropdown --}}
                
                <a href="#!">
                    {{-- <img class="rounded-t-lg" src="{{ asset($item->image_path) }}" alt="" /> --}}
                    <img src="/img/about.png" alt="">
                </a>

                {{-- title --}}
                <div class="p-6">
                    <h5 class="text-center font-bold text-primary-900 text-3xl mb-2"> {{ $item->title }}</h5>
                
                    <div class=" xs:28">
                        <p class="text-gray-900 text-medium mb-4">
                            {{ $item->description }}
                        

<button class="text-primary-800 font-bold transition duration-300 ease-in-out mb-4" type="button" data-modal-toggle="defaultModal">
    قراءة المزيد
    </button>
    
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
    
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
    
    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
        <h5 class="text-center font-bold text-primary-900 text-3xl mb-2"> {{ $item->title }}</h5>
    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    </div>
    
    <div class="p-6 space-y-6">
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
   
    </p>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
    
    </p>
    </div>
    
    {{-- <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
    <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
    <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
    </div> --}}
    </div>
    </div>
    </div>
    
                        </p>

                        <hr class="mb-5">

                        <div class="font-bold font-2xl text-primary-800 text-center mb-2">
                            الهدف : {{ $item->target }} د.ع
                        </div>
                    </div>
                </div>

                {{-- <div class="w-full  ">
                    <div class="bg-primary-500 text-xs font-medium text-gray-700 text-center p-0.5 leading-none rounded-b"
                        style="width: 100%"> {{ $item->received_price }}</div>
                </div> --}}
            </div>
        @empty
            <div class="text-2xl font-medium text-gray-700">
                لايوجد حالات
            </div>
        @endforelse
    </div>
</div>