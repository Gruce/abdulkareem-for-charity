@section('title', 'الحالات')
<div>
    <div>
        <div>
            @livewire('ui.search','title' )
        </div>

        <div class="grid grid-cols-4 gap-6 pt-5">
            
            @forelse ($events as $event)
                <livewire:components.case.card :event="$event" key="{{now()}}" />
            @empty
                <div class="text-2xl font-medium text-gray-700">
                    لايوجد حالات
                </div>
            @endforelse
        </div>
    </div>
</div>
