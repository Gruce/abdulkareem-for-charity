<div>
    <div class="grid grid-cols-3">
        @forelse ($menu->items as $item)
            <div class="flex ">
                <div class="">
                    <i class="{{ $item->icon }} text-red-400 text-7xl"></i>
                </div>

                <div class="flex flex-col">
                    <span>
                        {{ $item->value }}
                    </span>

                    <span>
                        {{ $item->info }}
                    </span>
                </div>
            </div>
        @empty
        
        @endforelse
    </div>
</div>
