@section('title', 'الحالات')
<div>
    <div>
        <div>
            @livewire('ui.search')
        </div>
        <div class="grid grid-cols-4 gap-6 pt-5">
            @livewire('components.case.card')
        </div>
    </div>
</div>
