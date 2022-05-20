@if($state)

    {{-- activites --}}
    @forelse($activities->items as $item)
        <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-md xl:m-5 m-1 ml-10 xl:ml-0">
            <div class="flex flex-col p-2 text-center xl:mx-10">
                <i class="fa-solid fa-{{ $item->value }} text-7xl text-primary-500"></i>

                <span class="text-xl xl:text-2xl font-bold mt-2 mx-auto">
                    {{ $item->info }}
                </span>
            </div>
        </div>
    @empty
    @endforelse
@else
    {{-- info --}}
    @forelse($menu->items as $item)
        <div class="flex flex-col p-2 text-center mx-3 xl:mx-20 mb-4 xl:mb-10">
            <span class="text-sm md:text-lg xl:text-4xl font-bold font-noto">
                {{ $item->value }}
            </span>

            <span class="text-xs md:text-base xl:text-2xl">
                {{ $item->info }}
            </span>
        </div>
    @empty
    @endforelse

@endif
