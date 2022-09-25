<div>
    <div
        class="flex flex-col justify-center text-gray-600 px-8 my-12 text-center rounded-md border mx-auto w-full">
        <img alt="" class="self-center flex-shrink-0 w-24 h-24 -mt-12 bg-center bg-cover rounded-full border-2 border-primary-600"
            src="<?php echo e($team->photo); ?>">
        <div class="flex-1 my-4">
            <p class="text-xl font-semibold leading-snug text-gray-800"><?php echo e($team->name); ?></p>
            <p class="text-xs block mt-4 "><?php echo e($team->stage); ?> - <?php echo e($team->department); ?></p>
        </div>
        <?php if($team->type == 1): ?>
            <div class="flex items-center justify-around p-3 space-x-3 border-t-2">
                <a rel="noopener noreferrer" target="_blank" href="mailto:<?php echo e($team->email); ?>" title="Email"
                    class="">
                    <i class="fa-solid fa-envelope"></i>
                </a>

                <a rel="noopener noreferrer" target="_blank" href="<?php echo e($team->github); ?>" title="GitHub"
                    class="">
                    <i class="fa-brands fa-github"></i>
                </a>
            </div>
        <?php else: ?>
        <div class="flex justify-end pt-2 space-x-4 align-center text-gray-700 ">
            <a aria-label="number" class="p-2 rounded-md text-lg mx-auto">
                <?php echo e($team->adjective); ?>

            </a>
        </div>
        <?php endif; ?>

    </div>
</div>
<?php /**PATH E:\abdulkareem-for-charity\resources\views/livewire/pages/about/card.blade.php ENDPATH**/ ?>