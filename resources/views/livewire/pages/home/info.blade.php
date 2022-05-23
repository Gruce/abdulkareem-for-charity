<section class="p-6  text-secondary-900">
    <div class="container mx-auto grid justify-center grid-cols-2 text-center lg:grid-cols-3">
        @forelse($menu->items as $item)
        <div class="flex flex-col justify-start m-2 lg:m-6">
            <p class="text-3xl font-bold leading-none lg:text-6xl">{{ $item->value }}</p>
            <p class="text-sm sm:text-base">{{ $item->info }}</p>
        </div>
        @endforeach
    </div>
</section>