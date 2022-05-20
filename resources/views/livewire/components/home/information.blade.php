@if($state)

    {{-- activites --}}
    @forelse($activities->items as $item)
        <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-md md:m-5 m-1 ml-10 md:ml-0">
            <div class="flex flex-col p-2 text-center md:mx-10">
                <i class="fa-solid fa-{{ $item->value }} text-7xl text-primary-500"></i>

                <span class="text-xl md:text-2xl font-bold mt-2 mx-auto">
                    {{ $item->info }}
                </span>
            </div>
        </div>
    @empty
    @endforelse
@else
    {{-- info --}}
    @forelse($menu->items as $item)
        <div class="flex flex-col p-2 text-center mx-3 md:mx-20 mb-4 md:mb-10">
            <span class="text-sm md:text-5xl font-bold font-noto">
                {{ $item->value }}
            </span>

            <span class="text-xs md:text-xl">
                {{ $item->info }}
            </span>
        </div>
    @empty
    @endforelse

@endif
