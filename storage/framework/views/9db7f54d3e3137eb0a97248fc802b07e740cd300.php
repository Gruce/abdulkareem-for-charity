<div>
    <div class=" grid grid-cols-2 lg:grid-cols-5 mx-auto text-gray-800">

        <?php $__empty_2 = true; $__currentLoopData = $activities->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
        <div class="p-4 bg-white xl:m-5 m-1  xl:ml-0 mx-auto">
            <div class="flex flex-col p-2 text-center xl:mx-10">
                <i class="fa-solid fa-<?php echo e($item->icon); ?> text-7xl text-primary-500"></i>

                <span class="text-xl xl:text-2xl font-bold mt-2 mx-auto">
                    <?php echo e($item->info); ?>

                </span>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
        <?php endif; ?>
    </div>
</div><?php /**PATH /www/wwwroot/abdulkareem-for-charity/resources/views/livewire/pages/home/activities.blade.php ENDPATH**/ ?>