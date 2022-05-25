<div>
    <div>
        <h2 class="text-center font-semibold sm:text-4xl md:text-4xl lg:text-6xl xl:text-6xl">فريق الصندوق</h2>
    
        <p class="mt-10 mr-20 text-secondary-200 sm:text-base md:text-md lg:text-2xl">
            اسماء الفريق المسؤول عن استلام المبالغ داخل الكلية
            <div class="cursor-pointer justify-center mt-4 xl:mt-10 mr-10 xl:mr-4 flex">
                <a data-modal-toggle="committee-modal"
                    class="text-white text-base xl:text-xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2">
                    <i class="fa-solid fa-plus"></i>
                    إضافة عضو
                </a>
            </div></p>
    
        <div class="grid grid-cols-4 gap-8 mr-32 mt-10">
            @forelse($committees as $committee)
            <livewire:pages.committee.card :committee="$committee" key="{{ now() }}" />
            @empty
                <div class="text-2xl font-medium text-gray-700">
                    لايوجد فريق
                </div>
                @endforelse
        </div>
    
       
    
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
    
                    @livewire('pages.committee.add')
                </div>
            </div>
        </div>
        <a href="{{ route('edit-committee', ['committee_id' => $committee->id]) }}">
            <i
                class="text-secondary-600 fa-solid fa-pen-to-square text-xl hover:rotate-12 duration-200 hover:text-secondary-700"></i>
        </a>
          {{-- modal --}}
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
                <!-- Modal body -->
                @livewire('pages.committee.edit', ['committee_id' => $committee->id], key($committee_id))
            </div>
        </div>
    </div>
    
    </div>
</div>
