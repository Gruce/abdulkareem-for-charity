<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
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

<label <?php echo e($attributes->merge(['class' => 'block font-medium text-md text-gray-700'])); ?>>
    <?php echo e($value ?? $slot); ?>

</label>
<<<<<<<< HEAD:storage/framework/views/822fdea51ac06cabf1a164a9a8f387004c032adc.php
<?php /**PATH E:\github\abdulkareem-for-charity\resources\views/vendor/jetstream/components/label.blade.php ENDPATH**/ ?>
========
<?php /**PATH C:\Github Repositories\Elites Projects\abdulkareem-for-charity\resources\views/vendor/jetstream/components/label.blade.php ENDPATH**/ ?>
>>>>>>>> master:storage/framework/views/8f659f216e256e6b60c7408cc10185355486bb59.php
