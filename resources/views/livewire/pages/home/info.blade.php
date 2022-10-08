<section class="p-6  text-secondary-900">
    <div class="container mx-auto grid justify-center grid-cols-2 text-center lg:grid-cols-3">
        @forelse($menu->items as $item)
        <div class="flex flex-col justify-start m-2 lg:m-6">
            <p class=" font-bold leading-none text-xl md:text-3xl lg:text-4xl">@if($item->type == 1) @money($item->value, 'IQD') @else {{ $item->value }} @endif</p>
            <p class="text-sm sm:text-md md:text-base">{{ $item->info }}</p>
        </div>
        @endforeach
    </div>
</section>