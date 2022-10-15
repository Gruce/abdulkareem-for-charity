<div>
    <div class=" lg:grid lg:grid-cols-5 flex justify-center flex-wrap mx-auto text-gray-800">

        @forelse($activities->items as $item)
        <div class="p-4 bg-white xl:m-5 m-1  xl:ml-0 mx-auto">
            <div class="flex flex-col p-2 text-center xl:mx-10 ">
                <i class="fa-solid fa-{{ $item->icon }} text-7xl text-primary-500"></i>

                <span class="text-lg xl:text-xl font-bold mt-2 mx-auto">
                    {{ $item->info }}
                </span>
            </div>
        </div>
        @empty
        @endforelse
    </div>
</div>
