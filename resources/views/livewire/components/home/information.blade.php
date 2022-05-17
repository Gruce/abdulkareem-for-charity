@if($state)

    {{-- activites --}}
    @forelse($activities->items as $item)
        <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-md m-5">
            <div class="flex flex-col p-2 text-center mx-10">
                <i class="fa-solid fa-{{ $item->value }} text-7xl text-primary-500"></i>

                <span class="text-2xl font-bold mt-2">
                    {{ $item->info }}
                </span>
            </div>
        </div>
    @empty
    @endforelse
@else
    {{-- info --}}
    @forelse($menu->items as $item)
        <div class="flex flex-col p-2 text-center mx-20">
            <span class="text-5xl font-bold font-noto">
                {{ $item->value }}
            </span>

            <span class="text-xl">
                {{ $item->info }}
            </span>
        </div>
    @empty
    @endforelse

@endif
