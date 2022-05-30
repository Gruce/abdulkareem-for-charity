<div>
    <div>
        <h2 class="text-center font-semibold text-4xl xl:text-6xl">فريق الصندوق</h2>

        <p class="mt-10 text-center text-secondary-200 text-lg xl:text-2xl">
            اسماء الفريق المسؤول عن استلام المبالغ داخل الكلية

            {{-- add committee --}}
        <div class="cursor-pointer justify-center mt-4 xl:mt-10 xl:mr-4 flex">
            <a data-modal-toggle="committee-modal"
                class="text-white text-base xl:text-xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 rounded-lg px-5 py-2.5">
                <i class="fa-solid fa-plus"></i>
                إضافة عضو
            </a>
        </div>
        </p>

        {{-- model add committee --}}
        <div wire:ignore.self id="committee-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-red-600 rounded-bl-lg rounded-tr-lg text-lg p-1.5 ml-auto inline-flex items-center"
                            data-modal-toggle="committee-modal">
                            <i class="fa-solid fa-xmark text-2xl"></i>
                        </button>
                    </div>

                    {{-- @livewire('pages.committee.add') --}}
                </div>
            </div>
        </div>


        <div
            class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4  mt-20 ">
            @forelse($admins as $admin)
            {{-- {{ dd($admin->toArray()) }} --}}
            <livewire:pages.admins.card :admin="$admin" key="{{ now() }}" />
            @empty
            <div class="text-2xl font-medium text-gray-700">
                لايوجد فريق
            </div>
            @endforelse
        </div>

    </div>
</div>