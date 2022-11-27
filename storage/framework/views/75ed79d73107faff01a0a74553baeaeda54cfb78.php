
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.new-user')->html();
} elseif ($_instance->childHasBeenRendered('uGMS765')) {
    $componentId = $_instance->getRenderedChildComponentId('uGMS765');
    $componentTag = $_instance->getRenderedChildComponentTagName('uGMS765');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uGMS765');
} else {
    $response = \Livewire\Livewire::mount('guest.new-user');
    $html = $response->html();
    $_instance->logRenderedChild('uGMS765', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH C:\Users\AL Laith Group\OneDrive\Documents\GitHub\abdulkareem-for-charity\resources\views/auth/register.blade.php ENDPATH**/ ?>