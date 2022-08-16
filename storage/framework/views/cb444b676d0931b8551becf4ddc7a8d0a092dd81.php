<div>
    <div class="flex flex-col px-4 py-8 md:px-0 md:py-0">
        <div class="basis-1/4 grid lg:grid-cols-12 justify-between">
            <div class="sm:grid-cols-12 lg:col-span-5 pt-2 md:mt-10">
                <div class="md:mr-10 lg:mr-0">
                    <h1 class="text-secondary-900 text-4xl md:text-4xl xl:text-5xl font-bold md:mr-3 xl:mr-10">
                        طريقة التبرع
                    </h1>
                    <ul
                        class="list-disc list-inside text-secondary-200 text-right mt-5 text-md md:text-lg lg:text-xl md:mr-3 xl:text-xl xl:mr-10">
                        <li class="py-2">يتم التبرع عن طريق شراء الاسهم</li>
                        <li class="py-2">سعر السهم 2000 دينار عراقي</li>
                        <li class="py-2">ادخل عدد الاسهم التي تود شرائها</li>
                        <li class="py-2">يتم دفع الاسهم نقداً لأحد اعضاء فريق الصندوق الموجود اسفل الصفحة</li>
                        <li class="py-2">تضاف الاسهم الى حسابك بعد التأكد من عملية الدفع </li>
                    </ul>
                </div>

                <div class="lg:hidden mt-10">
                    <img src="/img/donate.png" class="w-1/2 h-auto m-auto">
                </div>
                <form wire:submit.prevent="save"
                    class="p-8 w-full md:w-11/12 h-60 mx-auto lg:mr-10 rounded-3xl mt-10 bg-white border border-gray-600 md:max-w-lg">
                    <div class="text-center ">
                        <h3 class="text-xl md:text-2xl xl:text-3xl font-bold mb-5 text-gray-800">ما نقص مال من صدقة</h3>
                        <div class="">
                            <input wire:model="share" id="item_count" type="number" value="1"
                                class="block px-2.5 pb-3  pt-3 w-full h-14 text-md md:text-lg text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none  focus:outline-none focus:ring-0  focus:border-primary-500 peer"
                                placeholder="ادخل عدد الاسهم" min=1 />
                            <?php $__errorArgs = ['share'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error text-red-700 rounded-lg mt-3">يجب ملئ هذا الحقل</span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <button
                            class="text-white text-xl xl:text-2xl mt-4 bg-primary-500 hover:bg-primary-800 border border-transparent hover:border-green-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-1 mr-2 mb-2"
                            type="submit">

                            <span class="" id="login_default_state">تبرع<span id="subtotal"></span></span>
                        </button>
                        <span class="text-sm"></span>
                    </div>
                </form>
            </div>

            <div class="basis-1/2 lg:col-span-7 mt-5 hidden lg:block">
                <img src="/img/donate.png" class="w-3/4 h-auto m-auto">
            </div>
        </div>

        
        <h3 class="text-secondary-900 text-4xl md:text-4xl xl:text-5xl font-bold md:mr-3 xl:mr-10 mt-10">
            فريق الصندوق
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2  lg:grid-cols-3 xl:grid-cols-4 gap-2 p-5">
            <?php $__empty_1 = true; $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.donate.card', ['item' => $item])->html();
} elseif ($_instance->childHasBeenRendered(''.e(now()).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(now()).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(now()).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(now()).'');
} else {
    $response = \Livewire\Livewire::mount('pages.donate.card', ['item' => $item]);
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
    </div><?php /**PATH /www/wwwroot/abdulkareem-for-charity/resources/views/livewire/pages/donate/main.blade.php ENDPATH**/ ?>