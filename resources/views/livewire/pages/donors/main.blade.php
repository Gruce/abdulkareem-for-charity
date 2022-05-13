@section('title', 'المتبرعين')
<div>
    <div class="grid grid-cols-2 gap-2">
        <div  class="col-start-1 col-end-3" >
            @livewire('ui.search')
        </div>
        <div class=" w-40  py-4 col-end-7 col-span-2" >
            <select wire:change="x" wire:model="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="0">اختر شي معين </option>
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
