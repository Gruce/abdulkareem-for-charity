<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
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
<<<<<<<< HEAD:storage/framework/views/b37088901277b9d8c2f833f604e3cd175f1097ea.php
<?php /**PATH E:\github\abdulkareem-for-charity\vendor\laravel\jetstream\src/../resources/views/components/input.blade.php ENDPATH**/ ?>
========
<?php /**PATH C:\Github Repositories\Elites Projects\abdulkareem-for-charity\resources\views/vendor/jetstream/components/input.blade.php ENDPATH**/ ?>
>>>>>>>> master:storage/framework/views/e9605ed76aba9245924174c36424ad2af9b75c20.php
