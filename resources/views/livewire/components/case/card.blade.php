<div>
        <div
            class="rounded-xl border-2 border-primary-100 hover:shadow-lg hover:border-primary-500 w-96 h-auto group duration-300">
            {{-- case Image --}}
            <div class="pt-3 px-3">
                {{-- <img class="rounded-t-lg" src="{{ asset($item->image_path) }}" alt="" /> --}}
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI7Vm3bWFcLUw9o1XiIVwWv3Vcuitvy9GOCg&usqp=CAU"
                    class=" w-full rounded-lg ">
            </div>
            {{-- title + more info --}}
            <div class="p-6">
                <h5 class="text-center font-bold group-hover:text-primary-500 text-3xl mb-2"> {{ $title }}</h5>
                <div class=" xs:28">
                    <p class="text-gray-900 text-medium mb-4">
                        {{-- {{ $item->getLimit('description') }} --}}
                            {{$description}}
                        {{-- more info button --}}
                        <button
                            class="text-primary-500 hover:text-primary-700 hover:scale-110 font-bold duration-300 mb-4"
                            type="button" data-modal-toggle="defaultModal">
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
                                        {{ $title }}
                                    </h5>
                                </div>

                                <div class="p-6 space-y-6">
                                    <p class="text-base font-semibold leading-relaxed text-gray-600">
                                        {{ $description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-5">
                    <div
                        class="flex justify-center @admin justify-between @endadmin">
                        <div class="font-bold font-noto text-xl group-hover:text-primary-500 text-center ">
                            الهدف : {{ $target }} د.ع


                        </div>
                        <div class="text-right mt-2">
                            @admin
                            
                                <button wire:click="confirm({{ $ID }})" class="mx-2">
                                    <i
                                        class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-600"></i>
                                </button>
                                <button wire:click="$set('case_id', {{ $ID }})" class="mx-2"
                                    type="button" data-modal-toggle="case-modal">
                                    <i
                                        class="text-primary-400 fa-solid fa-pen-to-square text-xl hover:text-primary-600"></i>
                                </button>
                            @endadmin
                        </div>
                    </div>

                </div>
            </div>
        </div>

            {{-- modal --}}
    <div wire:ignore.self id="case-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex justify-between items-center p-5 rounded-t border-b">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-red-600 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="case-modal">
                        <i class="fa-solid fa-xmark text-2xl"></i>
                    </button>
                </div>
                <!-- Modal body -->
                @livewire('pages.cases.admin.edit', ['case_id' => $case_id], key($case_id))
            </div>
        </div>
    </div>
</div>
