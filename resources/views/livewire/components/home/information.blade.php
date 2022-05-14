@if($state)

{{-- activites --}}
@forelse ($menu->items as $item)

<div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md ">
    <div class="flex flex-col p-2 text-center mx-20">
        <i class="fa-solid fa-{{ $item->value }}"></i>
    
        <span class="text-xl">
            {{ $item->info }}
        </span>
    </div>
    
    
</div>


@empty

@endforelse


@else
{{-- info --}}
@forelse ($menu->items as $item)

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