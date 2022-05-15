@section('title', 'المتبرعين')
<div>
    <div class="grid grid-cols-2 gap-2">
        <div class="col-start-1 col-end-3">
            @livewire('ui.search')
        </div>
        <div class="w-40  py-4 col-end-7 col-span-2">
            <select wire:change="x" wire:model="type"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-2 focus:ring-primary-300">
                <option value="0">الكل</option>
                <option value="1">طالب</option>
                <option value="2">تدريسي</option>
                <option value="3">موظف</option>
                <option value="4">اخرى</option>
            </select>
        </div>
    </div>
    <div>
        @livewire('components.donors.card')
    </div>
</div>
