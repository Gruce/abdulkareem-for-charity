@section('title', 'الحالات')
<div>
    <div>
        <div>
            @livewire('ui.search')
        </div>

        <div class="grid grid-cols-4 gap-6 pt-5">
            @forelse ($events as $event)
                @livewire('components.case.card',[
                    // 'ID' => $item->id ,
                    // 'title' => $item->title ,
                    // 'description' => $item->description ,
                    // 'image_path' => $item->image_path ,
                    // 'file_path' => $item->file_path ,
                    // 'target' => $item->target ,
                    // 'received_price' => $item->received_price ,
                    // 'created_at' => $item->created_at ,
                    'event' => $event
                ],'title')
            @empty
                <div class="text-2xl font-medium text-gray-700">
                    لايوجد حالات
                </div>
            @endforelse
        </div>
    </div>
</div>
