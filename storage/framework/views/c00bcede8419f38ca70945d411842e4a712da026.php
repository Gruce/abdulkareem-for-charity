<?php foreach($attributes->onlyProps(['value']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['value']); ?>
<?php foreach (array_filter((['value']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<label <?php echo e($attributes->merge(['class' => 'block font-medium text-sm text-gray-700'])); ?>>
    <?php echo e($value ?? $slot); ?>

</label>
<<<<<<<< HEAD:storage/framework/views/ef4d0ea8ab4ed7a7caf3039f8829896186c8e177.php
<?php /**PATH E:\github\abdulkareem-for-charity\vendor\laravel\jetstream\src/../resources/views/components/label.blade.php ENDPATH**/ ?>
========
<?php /**PATH E:\Github Repositories\Elites Projects\abdulkareem-for-charity\resources\views/vendor/jetstream/components/label.blade.php ENDPATH**/ ?>
>>>>>>>> master:storage/framework/views/c00bcede8419f38ca70945d411842e4a712da026.php
