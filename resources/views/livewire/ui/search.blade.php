<div class=" " wire:loading.class="opacity-50">
    <label for="search" class="sr-only">Search</label>
    
    <div class="relative">
        <div class="absolute flex items-center mr-2 h-full">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <input wire:model="search" type="text" id="table-search" placeholder="البحث بواسطة الاسم..."
            class="px-8 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
    </div>

</div>
