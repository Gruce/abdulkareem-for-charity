<?php foreach($attributes->onlyProps(['disabled' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['disabled' => false]); ?>
<?php foreach (array_filter((['disabled' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<input <?php echo e($disabled ? 'disabled' : ''); ?> <?php echo $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']); ?>>
<<<<<<<< HEAD:storage/framework/views/dd24722d1a23b36f342fc31ec4969459a9367dec.php
<?php /**PATH E:\github\abdulkareem-for-charity\resources\views/vendor/jetstream/components/input.blade.php ENDPATH**/ ?>
========
<?php /**PATH E:\Github Repositories\Elites Projects\abdulkareem-for-charity\resources\views/vendor/jetstream/components/input.blade.php ENDPATH**/ ?>
>>>>>>>> master:storage/framework/views/3014f6ff407ab472c8ee0fdd2ff7cd1ae523b723.php
