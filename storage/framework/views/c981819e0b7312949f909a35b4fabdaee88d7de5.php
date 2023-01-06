<script>
    /**** Livewire Alert Scripts ****/
    <?php echo file_get_contents($jsPath); ?>

</script>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-alert::components.flash','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-alert::flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<<<<<<<< HEAD:storage/framework/views/8bf99a777184496cb823462f0e911118fb2246f7.php
<?php endif; ?><?php /**PATH E:\github\abdulkareem-for-charity\vendor\jantinnerezo\livewire-alert\src/../resources/views/components/scripts.blade.php ENDPATH**/ ?>
========
<?php endif; ?><?php /**PATH E:\Github Repositories\Elites Projects\abdulkareem-for-charity\vendor\jantinnerezo\livewire-alert\src/../resources/views/components/scripts.blade.php ENDPATH**/ ?>
>>>>>>>> master:storage/framework/views/c981819e0b7312949f909a35b4fabdaee88d7de5.php
