<div>
    <?php if($state): ?>

    
    <?php $__empty_1 = true; $__currentLoopData = $activities->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-md xl:m-5 m-1 ml-10 xl:ml-0">
        <div class="flex flex-col p-2 text-center xl:mx-10">
            <i class="fa-solid fa-<?php echo e($item->value); ?> text-7xl text-primary-500"></i>

            <span class="text-xl xl:text-2xl font-bold mt-2 mx-auto">
                <?php echo e($item->info); ?>

            </span>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>
    <?php else: ?>
    
    <?php $__empty_1 = true; $__currentLoopData = $menu->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="flex flex-col p-2 text-center mx-3 xl:mx-20 mb-4 xl:mb-10">
        <span class="text-sm md:text-lg xl:text-4xl font-bold font-noto">
            <?php echo e($item->value); ?>

        </span>

        <span class="text-xs md:text-base xl:text-2xl">
            <?php echo e($item->info); ?>

        </span>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>

    <?php endif; ?>
</div><?php /**PATH E:\github\abdulkareem-for-charity\resources\views/livewire/components/home/information.blade.php ENDPATH**/ ?>