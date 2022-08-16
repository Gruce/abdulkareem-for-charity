
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.new-user')->html();
} elseif ($_instance->childHasBeenRendered('5D06D7I')) {
    $componentId = $_instance->getRenderedChildComponentId('5D06D7I');
    $componentTag = $_instance->getRenderedChildComponentTagName('5D06D7I');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5D06D7I');
} else {
    $response = \Livewire\Livewire::mount('guest.new-user');
    $html = $response->html();
    $_instance->logRenderedChild('5D06D7I', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH E:\github\abdulkareem-for-charity\resources\views/auth/register.blade.php ENDPATH**/ ?>