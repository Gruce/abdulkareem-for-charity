
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.new-user')->html();
} elseif ($_instance->childHasBeenRendered('ixkXuST')) {
    $componentId = $_instance->getRenderedChildComponentId('ixkXuST');
    $componentTag = $_instance->getRenderedChildComponentTagName('ixkXuST');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ixkXuST');
} else {
    $response = \Livewire\Livewire::mount('guest.new-user');
    $html = $response->html();
    $_instance->logRenderedChild('ixkXuST', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH /www/wwwroot/abdulkareem-for-charity/resources/views/auth/register.blade.php ENDPATH**/ ?>