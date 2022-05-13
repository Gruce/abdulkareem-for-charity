<div>
    <div class="grid grid-cols-3 gap-6 pt-5">
        @forelse ($events as $item)
            <div class="rounded-t-lg  bg-white w-full hover:bg-gray-50 ">
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
            </div>
        @empty
            <div class="text-2xl font-medium text-gray-700">
                لايوجد حالات
            </div>
        @endforelse

    </div>
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
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
    </div>
</div>

