
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.new-user')->html();
} elseif ($_instance->childHasBeenRendered('Vt2vmIq')) {
    $componentId = $_instance->getRenderedChildComponentId('Vt2vmIq');
    $componentTag = $_instance->getRenderedChildComponentTagName('Vt2vmIq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Vt2vmIq');
} else {
    $response = \Livewire\Livewire::mount('guest.new-user');
    $html = $response->html();
    $_instance->logRenderedChild('Vt2vmIq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH E:\abdulkareem-for-charity\resources\views/auth/register.blade.php ENDPATH**/ ?>