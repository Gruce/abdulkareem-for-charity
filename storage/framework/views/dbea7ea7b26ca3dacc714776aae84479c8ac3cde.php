<section class="p-6  text-secondary-900">
    <div class="container mx-auto grid justify-center grid-cols-2 text-center lg:grid-cols-3">
        <?php $__empty_1 = true; $__currentLoopData = $menu->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="flex flex-col justify-start m-2 mt-8 lg:m-6 ">
            <p class=" font-bold leading-none text-xl md:text-2xl 2xl:text-2xl "><?php if($item->type == 1): ?> <?php echo money($item->value, 'IQD'); ?> <?php else: ?> <?php echo e($item->value); ?> <?php endif; ?></p>
            <p class="text-sm sm:text-md "><?php echo e($item->info); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php /**PATH C:\Users\AL Laith Group\OneDrive\Documents\GitHub\abdulkareem-for-charity\resources\views/livewire/pages/home/info.blade.php ENDPATH**/ ?>