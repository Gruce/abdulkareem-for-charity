@section('title', 'الحالات')
<div>
    <div>
        <div class="grid grid-cols-3">
            <div class="col-span-2 p-1">@livewire('ui.search', 'title')</div>
            <div class="p-1">
                <select wire:change="getEventt" wire:model="selectEvent"
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="0">الكل</option>
                    <option value="1">الحالات التي تم علاجها</option>
                    <option value="2">حالات لم تعالج الى الان</option>
                </select>
            </div>
        </div>
        @admin
        {{-- information --}}
        <div class="flex justify-center sm:mt-7 md:mt-7 lg:mt-10 xl:mt-14">

            <div class="flex flex-col p-2 text-center mx-10">
                <span class="text-3xl font-bold font-noto">
                    {{ $total }}
                </span>

                <span class="text-sm sm:text-xs md:text-base lg:text-xl">
                    المبلغ الكلي
                </span>
            </div>

            <div class="flex flex-col p-2 text-center mx-10">
                <span class="text-3xl font-bold font-noto">
                    {{ $current_price }}
                </span>

                <span class="text-sm sm:text-xs md:text-base lg:text-xl">
                    المبلغ الحالي
                </span>
            </div>

        </div>
        
        {{-- add-case --}}
        <div class="mt-4 xl:mt-10 mr-10 xl:mr-4 flex gap-5">
            {{-- <a href="{{ route('add-case') }}"
                class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white  border hover:border-transparent border-green-500 text-primary-500 focus:ring-4 focus:ring-primary-300  rounded-lg  px-5 py-2.5 mr-2 mb-2 ">اضف
                حالة</a> --}}
            <button
                class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white  border hover:border-transparent border-green-500 text-primary-500 focus:ring-4 focus:ring-primary-300  rounded-lg  px-5 py-2.5 mr-2 mb-2"
                type="button" data-modal-toggle="case-modal">
                اضافة حالة
            </button>
        </div>
        @endadmin

        <!-- CaseAdd Modal -->
        <div id="case-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <!-- Modal header -->
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-red-600 rounded-bl-lg rounded-tr-lg text-lg p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="case-modal">
                        <i class="fa-solid fa-xmark text-2xl"></i>
                    </button>
                    <!-- Modal body -->

                    <livewire:pages.cases.admin.add />

                </div>
            </div>
        </div>

        {{-- cases --}}
        <div class="grid gap-6 pt-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @forelse ($events as $event)
            <livewire:pages.cases.card :event="$event" key="{{ now() }}" />
            @empty
            <div class="text-2xl font-medium text-gray-700">
                لايوجد حالات
            </div>
            @endforelse
        </div>

    </div>
</div>