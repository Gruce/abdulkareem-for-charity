
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.new-user')->html();
} elseif ($_instance->childHasBeenRendered('NozMuxF')) {
    $componentId = $_instance->getRenderedChildComponentId('NozMuxF');
    $componentTag = $_instance->getRenderedChildComponentTagName('NozMuxF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NozMuxF');
} else {
    $response = \Livewire\Livewire::mount('guest.new-user');
    $html = $response->html();
    $_instance->logRenderedChild('NozMuxF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH C:\Users\AL Laith Group\OneDrive\Documents\GitHub\abdulkareem-for-charity\resources\views/auth/register.blade.php ENDPATH**/ ?>