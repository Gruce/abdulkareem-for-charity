<div>
    <div class="container mx-auto grid justify-center grid-cols-2 text-center lg:grid-cols-5">

        @forelse($activities->items as $item)
        <div class="p-4 bg-white xl:m-5 m-1 ml-10 xl:ml-0">
            <div class="flex flex-col p-2 text-center xl:mx-10">
                <i class="fa-solid fa-{{ $item->icon }} text-7xl text-primary-500"></i>

                <span class="text-xl xl:text-2xl font-bold mt-2 mx-auto">
                    {{ $item->info }}
                </span>
            </div>
        </div>
        @empty
        @endforelse
    </div>
</div>