<?php $__env->startSection('title', 'الحالات'); ?>
<div>
    <div>
        <div class="grid grid-cols-8 px-3 md:px-4 mt-6 lg:mt-0">
            <div class="<?php if (\Illuminate\Support\Facades\Blade::check('superAdmin')): ?> col-span-8  <?php else: ?> col-span-8 md:col-span-5 lg:col-span-6 <?php endif; ?> p-1"><?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ui.search', 'title')->html();
} elseif ($_instance->childHasBeenRendered('l69739021-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l69739021-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l69739021-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l69739021-0');
} else {
    $response = \Livewire\Livewire::mount('ui.search', 'title');
    $html = $response->html();
    $_instance->logRenderedChild('l69739021-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></div>

            <div class="<?php if (\Illuminate\Support\Facades\Blade::check('superAdmin')): ?> col-span-4 md:col-span-6 <?php else: ?> col-span-8 md:col-span-3 lg:col-span-2 <?php endif; ?> p-1">
                <select wire:change="getEvent" wire:model="selectEvent"
                    class=" px-6 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm text-gray-800">
                    <option value="0">الكل</option>
                    <option value="1">الحالات التي تم علاجها</option>
                    <option value="2">حالات لم تعالج الى الان</option>
                </select>
            </div>
            <?php if (\Illuminate\Support\Facades\Blade::check('superAdmin')): ?>
            <div class="col-span-4 md:col-span-2 flex item-center p-1">

                <a href="<?php echo e(route('add-case')); ?>"
                    class=" px-6 py-3 w-full rounded-md bg-primary-500  hover:bg-primary-600 focus:border-primary-500 focus:bg-primary-700 focus:ring-0 text-white text-sm">
                    <p class="inline">إضافة</p>
                    <p class="hidden md:inline">حالة</p>
                    <i class="fa-solid fa-plus"></i>
                </a>

            </div>

            <?php endif; ?>
        </div>
        
    </div>


    
    <div class="grid gap-y-6 pt-5 md:px-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4">

        <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.cases.card', ['event' => $event])->html();
} elseif ($_instance->childHasBeenRendered(''.e(now()).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(now()).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(now()).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(now()).'');
} else {
    $response = \Livewire\Livewire::mount('pages.cases.card', ['event' => $event]);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(now()).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="px-2 py-4  mb-4 text-sm text-gray-700 bg-primary-100 rounded-lg" role="alert">
            <span class="font-medium">ملاحظة:</span>لم يتم اضافة حالات للموقع ليتم عرضها
          </div>
        <?php endif; ?>
    </div>
    <div>
        
    </div>

</div><?php /**PATH E:\abdulkareem-for-charity\resources\views/livewire/pages/cases/main.blade.php ENDPATH**/ ?>