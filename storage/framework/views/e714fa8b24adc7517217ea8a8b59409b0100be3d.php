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
<<<<<<<< HEAD:storage/framework/views/19e60544bc5a61b7e92d9bd48d779a82b53b77c6.php
<?php /**PATH E:\github\abdulkareem-for-charity\resources\views/vendor/jetstream/components/validation-errors.blade.php ENDPATH**/ ?>
========
<?php /**PATH C:\Github Repositories\Elites Projects\abdulkareem-for-charity\resources\views/vendor/jetstream/components/validation-errors.blade.php ENDPATH**/ ?>
>>>>>>>> master:storage/framework/views/e714fa8b24adc7517217ea8a8b59409b0100be3d.php
