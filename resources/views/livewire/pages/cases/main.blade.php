@section('title', 'الحالات')

<div>
    @forelse ($cases as $item)
    @livewire('components.case.card' , [
    'title' => $item->title,
    'description' => $item->description,
    'image_path' => $item->image_path,
    'file_path' => $item->file_path,
    'target' => $item->target,
    'received_price' => $item->received_price,
    ])
    @empty
    لا يوجد حالات
    @endforelse

    
</div>
