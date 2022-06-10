@section('title', 'الحالات')
<div>
    <div>
        <div class="grid grid-cols-8 px-3 md:px-10 ">
            <div class="col-span-5 md:col-span-4 py-1">@livewire('ui.search', 'title')</div>

            <div class="p-1 col-span-2 md:col-span-3">
                <select wire:change="getEvent" wire:model="selectEvent"
                    class=" px-6 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="0">الكل</option>
                    <option value="1">الحالات التي تم علاجها</option>
                    <option value="2">حالات لم تعالج الى الان</option>
                </select>
            </div>
            @admin
                <div class="col-span-1  md:hidden mt-4">
                    <a href="{{ route('add-case') }}"
                        class="text-white px-4 py-2 text-sm font-bold rounded-md duration-200 bg-primary-500 hover:bg-white border border-transparent mt-1 hover:border-green-500 hover:text-primary-500 focus:ring-2 focus:ring-primary-300 ">
                        <i class="fa-solid fa-plus text-lg"></i>

                    </a>
                </div>
                <div class="col-span-1 justify-center items-center flex flex-col ">
                    <a href="{{ route('add-case') }}"
                        class="text-white text-md hidden md:block w-full  xl:text-lg duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-1 xl:px-5 py-2    ">
                        <i class="fa-solid fa-plus"></i>
                        إضافة حالة
                    </a>
                </div>
            @endadmin
        </div>
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
    </div>


    {{-- cases --}}
    <div class="grid gap-6 pt-5 md:px-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

        @forelse ($events as $event)
            <livewire:pages.cases.card :event="$event" key="{{ now() }}" />
        @empty
            <div class="text-2xl font-medium text-gray-700">
                لايوجد حالات
            </div>
        @endforelse
    </div>
    <div>
        {{-- {{ $events->links() }} --}}
    </div>

</div>
