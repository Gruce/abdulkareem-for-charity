<div class="bg-white">
    <div class="flex flex-col container mx-auto ">

        <!-- INTRO -->
        <div class="basis-4/12 grid grid-cols-1 xl:grid-cols-12 justify-between mt-10 md:mt-0 ">
            <!-- Text -->
            <div class=" xl:col-span-5  md:pt-12 lg:pt-8 xl:pt-10  ">
                <h1 class="text-secondary-900 text-4xl xl:text-5xl font-bold mr-6">
                    صندوق الكرم
                </h1>
                <p class="text-secondary-200 text-lg xl:text-2xl mt-6 px-6">
                    مبادرة ونشاط طلابي بحت ينطلق من طلبة كلية علوم الحـاسوب وتكنولوجيا المعـلومات الهدف منه رعاية
                    الأعمال الخيريّة داخل الكليّة وتكون الأولوية في صرف الصندوق للطلبة ذوي الدخل دون المحدود وبقيّة
                    الأعمال الخيريّة.</p>
                <div class="mt-4 xl:mt-10 mr-16 xl:mr-4 flex gap-5">
                    <a href="<?php echo e(route('donate')); ?>"
                        class="text-white text-base xl:text-2xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">تبرع
                        الان</a>
                    <a href="<?php echo e(route('cases')); ?>"
                        class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white  border hover:border-transparent border-green-500 text-primary-500 focus:ring-2 focus:ring-primary-300  rounded-lg  px-5 py-2.5 mr-2 mb-2 ">الحالات</a>
                </div>
            </div>
            

            <div class=" xl:col-span-7 mt-6 xl:mt-0 ">
                <img src="/img/charity.png" class="w-10/12 h-auto m-auto">
            </div>
        </div>

        
        <div class=" basis-2/12 mt-6 xl:mt-10  ">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.home.info')->html();
} elseif ($_instance->childHasBeenRendered('l3277571161-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3277571161-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3277571161-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3277571161-0');
} else {
    $response = \Livewire\Livewire::mount('pages.home.info');
    $html = $response->html();
    $_instance->logRenderedChild('l3277571161-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

        
        <div class=" basis-4/12  mt-10 xl:mt-16">
            <?php if($events->count() > 0): ?>
            <span class="text-secondary-900 text-4xl xl:text-5xl  font-bold pr-4  ">
                احدث الحالات
            </span>
            <div class="my-6 xl:my-12  grid  grid-cols-1 md:grid-cols-2  xl:grid-cols-4 gap-16 xl:gap-0 ">
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.cases.card', ['event' => $event])->html();
} elseif ($_instance->childHasBeenRendered($event->id . "hi")) {
    $componentId = $_instance->getRenderedChildComponentId($event->id . "hi");
    $componentTag = $_instance->getRenderedChildComponentTagName($event->id . "hi");
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($event->id . "hi");
} else {
    $response = \Livewire\Livewire::mount('pages.cases.card', ['event' => $event]);
    $html = $response->html();
    $_instance->logRenderedChild($event->id . "hi", $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
        </div>

        
        <div class=" basis-2/12  mt-10 xl:mt-12 ">
            <span class="text-secondary-900 text-4xl xl:text-5xl  font-bold pr-4  ">
                نحن نعمل لأجل
            </span>
            <div class="my-6 xl:my-12">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.home.activities')->html();
} elseif ($_instance->childHasBeenRendered('l3277571161-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3277571161-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3277571161-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3277571161-2');
} else {
    $response = \Livewire\Livewire::mount('pages.home.activities');
    $html = $response->html();
    $_instance->logRenderedChild('l3277571161-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>

    </div>
</div><?php /**PATH E:\abdulkareem-for-charity\resources\views/livewire/pages/home/main.blade.php ENDPATH**/ ?>