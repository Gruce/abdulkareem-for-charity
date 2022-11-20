<?php $__env->startSection('title', 'المتبرعين'); ?>
<div>

    <div class="w-full md:w-full  p-5 rounded-lg bg-white text-gray-800">

        <div>

            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-3 gap-4 mt-4">
                <div <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?> <?php if($type == 1): ?> class="col-span-2" <?php endif; ?> class="col-span-2 md:col-span-3 "<?php endif; ?>  class="col-span-2 md:col-span-1" >
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ui.search', 'name')->html();
} elseif ($_instance->childHasBeenRendered('l943550399-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l943550399-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l943550399-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l943550399-0');
} else {
    $response = \Livewire\Livewire::mount('ui.search', 'name');
    $html = $response->html();
    $_instance->logRenderedChild('l943550399-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                <select wire:change="getType" wire:model="state"
                    class="col-span-2 md:col-span-1 px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="0">حالة التبرع </option>
                    <option value="">أرسلَ طلب تبرع جديد</option>
                </select>
                <?php endif; ?>

                <select wire:change="getType" wire:model="type"
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="0">النوع</option>
                    <option value="1">طالب</option>
                    <option value="2">تدريسي</option>
                    <option value="3">موظف</option>
                    <option value="4">اخرى</option>
                </select>
                <select wire:change="getType" wire:model="gender"
                    class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="0">الجنس</option>
                    <option value="2">ذكر</option>
                    <option value="1">أنثى</option>
                </select>
                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                <?php if($type == 1): ?>
                    <select wire:change="getType" wire:model="study_type"
                        class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="">نوع الدراسة</option>
                        <option value="1">صباحي</option>
                        <option value="2">مسائي</option>

                    </select>

                    <select wire:change="getType" wire:model="stage"
                        class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="">المرحلة</option>
                        <option value="1">الاولى</option>
                        <option value="2">الثانية</option>
                        <option value="3">الثالثة</option>
                        <option value="4">الرابعة</option>
                    </select>

                    <select wire:change="getType" wire:model="division"
                        class="px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="">الشعبة</option>
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option>
                        <option value="5">E</option>

                    </select>
                    <select wire:change="getType" wire:model="department"
                        class=" px-10 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-primary-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="">القسم</option>
                        <option value="1">علوم الحاسوب</option>
                        <option value="2">نظم المعلومات</option>

                    </select>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="mt-4 grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4  group ">
            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.donors.card', ['item' => $item])->html();
} elseif ($_instance->childHasBeenRendered(''.e(now()).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(now()).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(now()).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(now()).'');
} else {
    $response = \Livewire\Livewire::mount('pages.donors.card', ['item' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(now()).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="text-2xl font-medium text-gray-700">
                    لايوجد متبرعين
                </div>
            <?php endif; ?>
        </div>
        <div>
            <?php echo e($users->links()); ?>

        </div>
    </div>

</div>
<?php /**PATH E:\abdulkareem-for-charity\resources\views/livewire/pages/donors/main.blade.php ENDPATH**/ ?>