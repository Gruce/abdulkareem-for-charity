<div class=" grid grid-cols-1 xl:grid-cols-12 justify-between">
    <div class="basis-1/2 col-span-5 pt-2 xl:pr-24 ">
        <div class="flex justify-between">
            <h1 class="text-secondary-900 text-2xl p-2 md:text-3xl xl:text-5xl font-bold">
                {{ $title }}
            </h1>
            <!-- Dropdown menu -->
            @admin
                <div>
                    <button id="pagecase" data-dropdown-toggle="casepage" class="mt-3 md:mt-5 ml-7" type="button">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>

                    <div id="casepage" class="z-10 hidden bg-white divide-y divide-blue-200 rounded shadow  ">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a class="block px-4 py-2 my-1 hover:bg-gray-100 text-secondary-200 group"
                                    href="{{ route('edit-case', ['case_id' => $event->id]) }}">
                                    <span>تعديل </span>
                                    <i
                                        class="text-secondary-500 fa-solid fa-pen-to-square text-xl group-hover:rotate-12  duration-200 group-hover:text-secondary-700"></i>
                                </a>
                            </li>
                            <li>
                                <button wire:click="confirm({{ $event->id }})"
                                    class="block px-6 py-2 my-1 hover:bg-gray-100 text-secondary-200 group">
                                    <span>حذف </span>
                                    <i
                                        class="text-red-500 fa-solid  fa-pen-to-square text-xl duration-200 group-hover:text-red-700 fa-solid fa-trash"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            @endadmin
        </div>
        <div class="w-full  text-center mt-5 py-2 px-5 xl:mt-8">
            <div class="xl:w-full bg-gray-300 rounded-full">
                <div class="bg-primary-500 text-xs font-medium text-blue-100 text-center h-2.5 p-0.5 leading-none rounded-full"
                    style="width:{{ ($event->received_price * 100) / $event->target }}%"></div>
            </div>
            <div class="flex justify-between px-3 mt-2 text-xl text-secondary-200">
                <div>الواصل {{ $event->received_price }} </div>
                <div class="px-1.5">{{ round($event->received_price * 100) / $event->target }}%</div>
                <div>الهدف {{ $event->target }}</div>
            </div>
            <div class="h-0.5 w-full rounded-full bg-gray-300 my-7 "></div>
        </div>
        <div class="text-xl text-gray-600 px-6 xl:px-0">
            {{ $description ?? 'لا يوجد وصف' }}
        </div>
        <div class="mt-4 xl:mt-10 mr-8 xl:mr-4 flex gap-3 md:gap-5">
            <a href="{{ route('cases') }}"
                class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white border hover:border-transparent border-green-500 text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">رجوع</a>
            <a href="{{ route('donate') }}"
                class="text-white text-base xl:text-2xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">تبرع
                الان</a>
            @if ($file_path != null)
                <button href="{{ asset($file_path) }}" download class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white border hover:border-transparent border-green-500 text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2">
                    <i class="fa-solid fa-file-arrow-down"></i>
                    <span>ملف</span>
                </button>
            @endif
            
        </div>
    </div>

    <div class="basis-1/2 xl:col-span-7 rounded-3xl">
        <img src="{{ asset($image_path ?? 'img/caseImage.webp') }}"
            class="w-3/4 h-auto my-20 border-4 border-primary-500 rounded-3xl m-auto">
    </div>
</div>
