<div>
    <div class="grid grid-cols-3 gap-6 pt-5">
        @forelse ($events as $item)
            {{-- <div class="rounded-t-lg  bg-white w-full hover:bg-gray-50 ">
                <a href="#!">
                    <img class="rounded-t-lg" src="{{ asset($item->image_path) }}" alt="" />
                </a>
                <div class="p-6">
                    <div class="flex justify-between">
                        <h5 class="text-gray-900 text-xl font-medium mb-2"> {{ $item->title }}</h5>
                        @admin
                        <div>
                            <a wire:click="confirm({{ $item->id }})">
                                <i class="text-red-500 fa-solid fa-trash text-xl hover:scale-110 hover:text-red-600"></i>
                            </a>

                            <a href={{ route('edit-case', ['case_id' => $item->id]) }}>
                                <i class="text-green-500 fa-solid fa-pen-to-square text-xl hover:scale-110 hover:text-green-600 hover:rotate-12"></i>
                            </a>
                        </div>
                        @endadmin
                    </div>
                    <div class=" xs:28">
                        <p class="text-gray-700 text-base mb-4">
                            {{ $item->description }}
                        </p>
                        <p>هدف الحملة : {{ $item->target }} IQ</p>
                    </div>
                    <a href="#!"
                        class="text-primary-500 hover:text-primary-500 transition duration-300 ease-in-out mb-4"> عرض
                        التفاصيل</a>

                    <a
                class="text-white hover:scale-105 duration-200 hover:border-2 hover:border-primary-400 bg-primary-300 hover:bg-primary-600 focus:outline-none font-medium rounded-lg text-sm px-5 text-center" data-modal-toggle="defaultModa" >
                تبرع
            </a>

                    <button
                        class="block text-white bg-primary-400 hover:bg-primary-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="button" data-modal-toggle="defaultModal">
                        تبرع
                    </button>
                </div>

                <div class="w-full  ">
                    <div class="bg-primary-500 text-xs font-medium text-gray-700 text-center p-0.5 leading-none rounded-b"
                        style="width: 100%"> {{ $item->received_price }}</div>
                </div>
            </div> --}}

            <div class=" px-4 py-10 sm:p-10 bg-gray-50 hover:bg-gray-100 shadow-lg sm:rounded-3xl  bg-clip-padding bg-opacity-60 border border-gray-200 "
                    style="backdrop-filter: blur(20px);">
                    <div class="max-w-md mx-auto">
                        @if (1==2)
                            <div>

                                <input wire:model.lazy="title" type="text"
                                    class="mt-4  text-gray-800 border-gray-200 text-3xl font-bold focus:ring-0 rounded-full">
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">


                                    <textarea wire:model.lazy="description" rows="3"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "></textarea>
                                    <input wire:model="file_path" type="file"
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 ">

                                </div>
                                <div
                                    class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7 flex justify-end space-x-4">
                                    <button wire:click="save">
                                        <i class="fa-solid fa-check text-blue-400 hover:text-blue-600"></i>
                                    </button>
                                    <button wire:click="$set('edit_id', {{ null }})" class="mr-4">
                                        <i class=" fa-solid fa-angles-right text-red-400 hover:text-red-600"></i>
                                    </button>


                                </div>

                            </div>
                        @else
                            <div>
                                <h3 class="mt-4  text-gray-800  text-4xl font-bold">{{ $item->title }}</h3>
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    @if ($item->description)
                                        <p>Description: {{ $item->description }}</p>
                                    @else
                                        <p>No description added</p>
                                    @endif

                                    @if ($item->file_path)
                                        <p>
                                            <a href="{{ asset($item->file_path)}}"
                                                class="font-bold text-cyan-600 hover:text-cyan-700">
                                                Read
                                                the details file &rarr; </a>
                                        </p>
                                    @else
                                        No file
                                    @endif
                                </div>
                                <div
                                    class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7 flex justify-end">
                                    <button class="mr-4">
                                        <i class=" fa-solid fa-trash-can text-red-400 hover:text-red-600"></i>
                                    </button>
                                    <button>
                                        <i class="fa-solid fa-pen-to-square text-blue-400 hover:text-blue-600"></i>
                                    </button>

                                </div>

                            </div>
                        @endif
                    </div>
                </div>
        @empty
            <div class="text-2xl font-medium text-gray-700">
                لايوجد حالات
            </div>
        @endforelse
    </div>
    {{-- <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg ">

                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    @livewire('pages.donate.main')
                </div>
                <!-- Modal footer -->
                <div class="flex justify-end p-6 space-x-2 rounded-b border-t border-gray-200">
                    <button data-modal-toggle="defaultModal" type="button"
                        class=" text-white bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-white focus:z-10">اغلاق</button>
                </div>
            </div>
        </div>
    </div> --}}
</div>

