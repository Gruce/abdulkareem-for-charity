<div>
    <div class="grid grid-cols-3 p-10 ">
        @forelse ($menu->items as $item)
        <div class="flex justify-center">
            <div class="flex flex-col p-2 ">
                <span class="text-white text-3xl">
                    {{ $item->value }}
                </span>

                <span class="text-white text-lg">
                    {{ $item->info }}
                </span>
            </div>
            <div class="">
                <i class="{{ $item->icon }} text-white text-7xl ml-4"></i>
            </div>


        </div>
        @empty
        
        @endforelse
    </div>
</div>