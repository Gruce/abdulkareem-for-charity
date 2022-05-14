<div>
    <div class="grid grid-cols-3 p-10 ">
        @forelse ($menu->items as $item)
        <div class="flex ">
            <div class="flex flex-col p-2 text-center">
                <span class=" text-3xl">
                    {{ $item->value }}
                </span>

                <span class=" text-lg">
                    {{ $item->info }}
                </span>
            </div>
            
        </div>
        @empty
        
        @endforelse
    </div>
</div>