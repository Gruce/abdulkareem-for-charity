<section class="p-6  text-secondary-900">
    <div class="container mx-auto grid justify-center grid-cols-2 text-center lg:grid-cols-3">
        <?php $__empty_1 = true; $__currentLoopData = $menu->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="flex flex-col justify-start m-2 lg:m-6">
            <p class=" font-bold leading-none text-xl md:text-3xl lg:text-4xl"><?php if($item->type == 1): ?> <?php echo money($item->value, 'IQD'); ?> <?php else: ?> <?php echo e($item->value); ?> <?php endif; ?></p>
            <p class="text-sm sm:text-md md:text-base"><?php echo e($item->info); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section><?php /**PATH E:\abdulkareem-for-charity\resources\views/livewire/pages/home/info.blade.php ENDPATH**/ ?>