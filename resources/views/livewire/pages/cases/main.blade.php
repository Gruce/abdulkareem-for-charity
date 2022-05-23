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

        <div class="mt-4 xl:mt-10 mr-10 xl:mr-4 flex gap-5">
            <a href="{{ route('add-case') }}"
                class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white  border hover:border-transparent border-green-500 text-primary-500 focus:ring-4 focus:ring-primary-300  rounded-lg  px-5 py-2.5 mr-2 mb-2 ">اضف حالة</a>
        </div>

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
