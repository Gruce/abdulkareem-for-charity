<div>
    <div class="px-4 md:px-8 xl:px-12 bg-white text-gray-800 h-screen">
        <div class="flex justify-between mt-6 md:mt-0">
            <h2 class="text-center font-semibold text-2xl md:text-3xl xl:text-5xl">فريق الصندوق</h2>
            {{-- add committee --}}
            @if (auth()->user()->id == 1)
                <div class="cursor-pointer justify-center xl:mr-4 flex">
                    <button wire:click="add"
                        class="text-white text-md xl:text-xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 rounded-lg px-3 py-2 md:px-5 md:py-2.5">
                        <i class="fa-solid fa-plus"></i>
                        إضافة عضو
                    </button>
                </div>
            @endif
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-6 mt-20 ">
            @forelse($admins as $item)
                <livewire:pages.admins.card :item="$item" key="{{ now() }}" />
            @empty
                <div class="text-2xl font-medium text-gray-700">
                    لايوجد فريق
                </div>
            @endforelse
        </div>

    </div>
</div>
