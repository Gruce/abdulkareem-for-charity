<div>
    <div>
        <h2 class="text-center font-semibold text-4xl xl:text-6xl">فريق الصندوق</h2>
    
        <p class="mt-10 text-center text-secondary-200 text-lg xl:text-2xl">
            اسماء الفريق المسؤول عن استلام المبالغ داخل الكلية

            
            <div class="cursor-pointer justify-center mt-4 xl:mt-10 xl:mr-4 flex">
                <a data-modal-toggle="committee-modal"
                    class="text-white text-base xl:text-xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 rounded-lg px-5 py-2.5">
                    <i class="fa-solid fa-plus"></i>
                    إضافة عضو
                </a>
            </div>
        </p>

        
        <div wire:ignore.self id="committee-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-red-600 rounded-bl-lg rounded-tr-lg text-lg p-1.5 ml-auto inline-flex items-center"
                            data-modal-toggle="committee-modal">
                            <i class="fa-solid fa-xmark text-2xl"></i>
                        </button>
                    </div>
    
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.committee.add')->html();
} elseif ($_instance->childHasBeenRendered('l1993854774-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1993854774-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1993854774-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1993854774-0');
} else {
    $response = \Livewire\Livewire::mount('pages.committee.add');
    $html = $response->html();
    $_instance->logRenderedChild('l1993854774-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </div>
    
    

        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8 mr-2 lg:mr-10 mt-10">
            <?php $__empty_1 = true; $__currentLoopData = $committees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $committee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.committee.card', ['committee' => $committee])->html();
} elseif ($_instance->childHasBeenRendered(''.e(now()).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(now()).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(now()).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(now()).'');
} else {
    $response = \Livewire\Livewire::mount('pages.committee.card', ['committee' => $committee]);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(now()).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="text-2xl font-medium text-gray-700">
                    لايوجد فريق
                </div>
                <?php endif; ?>
        </div>
    
    </div>
</div>
<?php /**PATH E:\github\abdulkareem-for-charity\resources\views/livewire/pages/committee/main.blade.php ENDPATH**/ ?>