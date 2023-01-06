<?php if($errors->any()): ?>
    <div <?php echo e($attributes); ?>>
        <div class="font-medium text-red-600"><?php echo e(__('Whoops! Something went wrong.')); ?></div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<<<<<<<< HEAD:storage/framework/views/128772dbfeeaef5d54d5e0762a91c105aef4a6df.php
<?php /**PATH E:\github\abdulkareem-for-charity\vendor\laravel\jetstream\src/../resources/views/components/validation-errors.blade.php ENDPATH**/ ?>
========
<?php /**PATH E:\Github Repositories\Elites Projects\abdulkareem-for-charity\resources\views/vendor/jetstream/components/validation-errors.blade.php ENDPATH**/ ?>
>>>>>>>> master:storage/framework/views/fef7fd092145e73c49aca48cd199631f6c836687.php
