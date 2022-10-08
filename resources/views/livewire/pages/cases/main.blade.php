@section('title', 'الحالات')
<div>
    <div>
        <div class="grid grid-cols-8 px-3 md:px-4 mt-6 lg:mt-0">
            <div class="@superAdmin col-span-8  @else col-span-8 md:col-span-5 lg:col-span-6 @endsuperAdmin p-1">@livewire('ui.search', 'title')</div>

            <div class="@superAdmin col-span-4 md:col-span-6 @else col-span-8 md:col-span-3 lg:col-span-2 @endsuperAdmin p-1">
                <select wire:change="getEvent" wire:model="selectEvent"
                    class=" px-6 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm text-gray-800">
                    <option value="0">الكل</option>
                    <option value="1">الحالات التي تم علاجها</option>
                    <option value="2">حالات لم تعالج الى الان</option>
                </select>
            </div>
            @superAdmin
            <div class="col-span-4 md:col-span-2 flex item-center p-1">

                <a href="{{ route('add-case') }}"
                    class=" px-6 py-3 w-full rounded-md bg-primary-500  hover:bg-primary-600 focus:border-primary-500 focus:bg-primary-700 focus:ring-0 text-white text-sm">
                    <p class="inline">إضافة</p>
                    <p class="hidden md:inline">حالة</p>
                    <i class="fa-solid fa-plus"></i>
                </a>

            </div>

            @endsuperAdmin
        </div>
        
    </div>


    {{-- cases --}}
    <div class="grid gap-y-6 pt-5 md:px-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4">

        @forelse ($events as $event)
        <livewire:pages.cases.card :event="$event" key="{{ now() }}" />
        @empty
        <div class="px-2 py-4  mb-4 text-sm text-gray-700 bg-primary-100 rounded-lg" role="alert">
            <span class="font-medium">ملاحظة:</span>لم يتم اضافة حالات للموقع ليتم عرضها
          </div>
        @endforelse
    </div>
    <div>
        {{-- {{ $events->links() }} --}}
    </div>

</div>