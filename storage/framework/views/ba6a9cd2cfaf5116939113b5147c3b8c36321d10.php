<div>
    <div class="flex flex-col   px-4 py-8 md:px-10 md:py-0">

        
        <div class="basis-1/4 grid md:grid-cols-12 justify-between md:mt-10 ">

            <!-- Text -->
            <div class="md:col-span-7  text-right xl:mt-20 md:px-5 lg:px-8">
                <h1 class="text-secondary-900 text-2xl md:text-3xl xl:text-5xl font-bold text-center md:text-right">
                    صندوق الكرم
                </h1>
                <p
                    class="leading-10 mt-6 lg:mt-10 text-md sm:text-base md:text-lg xl:text-2xl text-gray-700 font-Alhurrareg px-2 md:pl-4    ">
                    هو مبادرة ونشاط طلابي ينطلق من طلبة كلية علوم الحاسوب وتكنولوجيا المعلومات في جامعة البصرة. الهدف
                    منه رعاية الأعمال الخيريّة داخل الكليّة وتكون الأولويّة في صرف الصندوق للطلبة ذوي الدخل دون المحدود.
                    سمي بأسم صندوق الكرم نسبة إلى الأستاذ الراحل عبد الكريم حسين.
                </p>

            </div>

            
            <div class="md:col-span-5 ">
                <img src="/img/About1.png" class="w-full mt-6 lg:mt-0 xl:w-9/12 h-auto m-auto">
            </div>

        </div>

        
        <div class="basis-1/4 grid lg:grid-cols-12 justify-between mt-20 md:mt-12 xl:mt-0">

            
            <div class="basis-1/2 lg:col-span-5 ">
                <img src="/img/About2.png" class="w-3/5 xl:mt-6 h-auto m-auto">
            </div>

            <!-- Text -->
            <div class="basis-1/2 lg:col-span-7 mt-4 xl:mt-20 text-right md:px-2">
                <h1 class="text-secondary-900 text-2xl md:text-3xl xl:text-5xl font-bold text-center lg:text-right">
                    من هو الأستاذ عبدالكريم
                </h1>
                <p
                    class="leading-10 mt-10 text-md sm:text-base md:text-xl xl:text-2xl text-gray-700 font-Alhurrareg px-2  ">
                    الأستاذ عبد الكريم حسين السوداني (1974 - 2021) تدريسي في كلية علوم الحاسوب وتكنولوجيا المعلومات وشغل
                    منصب مدير وحدة شؤون الطلبة سابقًا عُرف عنه فعل الخير والمشاركة في النشاطات الخيريّة والاهتمام بطلبته
                    وتشجيعهم فأحبه طلبته و أرادوا إبقاء ذكر أستاذهم حتى بعد أن تَوَفَّاه الله لذا بدأوا بإنشاء مجموعة من
                    الأعمال الخيريّة داخل الكليّة وربطها بأسم الأستاذ وأحّد هذه الأعمال هو هذا الصندوق الخيري.</p>

            </div>


        </div>

        
        <div class="basis-1/4 grid lg:grid-cols-12 justify-between mt-12 md:mt-20">

            <!-- Text -->
            <div class="basis-1/2 lg:col-span-7  xl:mt-32  text-right md:px-8">
                <h1 class="text-secondary-900 text-2xl md:text-3xl xl:text-5xl font-bold text-center md:text-right">
                    كيف يتم جمع التبرعات؟
                </h1>
                <p
                    class="leading-10 mt-6 text-md sm:text-base md:text-xl xl:text-2xl text-gray-700 font-Alhurrareg px-2  ">
                    يعمل الصندوق على نظام الأسهم حيث يمتلك كل متبرع عدد من الأسهم تدل على حجم تبرعاته وسيظهر عدد أسهمه
                    في صفحة <a href="<?php echo e(route('donors')); ?>" class="text-primary-500"> المتبرعين </a> وسعر السهم في
                    الصندوق هو 2000 د.ع ثابت ويتم شراء الأسهم من خلال صفحة <a href="<?php echo e(route('donate')); ?>"
                        class="text-primary-500">التبرع</a>.
                </p>




            </div>

            
            <div class="basis-1/2 lg:col-span-5  ">
                <img src="/img/About3.png" class="w-full md:w-3/4 mt-10 h-auto m-auto">
            </div>

        </div>

        
        <div class="basis-1/4 flex flex-col mt-20 py-10 space-y-40 xl:px-24">

            
            <div>
                <h1 class="text-secondary-900 text-2xl md:text-4xl xl:text-5xl font-bold text-center mb-20">
                    المطورين
                </h1>

                
                <div class="flex flex-wrap gap-x-4 justify-center 2xl:gap-x-28">
                    <?php $__currentLoopData = $developers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.about.card', ['team' => $team])->html();
} elseif ($_instance->childHasBeenRendered(''.e(now()).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(now()).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(now()).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(now()).'');
} else {
    $response = \Livewire\Livewire::mount('pages.about.card', ['team' => $team]);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(now()).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <div>
                <h1 class="text-secondary-900 text-2xl md:text-5xl font-bold text-center mb-20">
                    المساهمين
                </h1>
                
                <div class="flex flex-wrap gap-x-4 justify-center ">
                    <?php $__currentLoopData = $managers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.about.card', ['team' => $team])->html();
} elseif ($_instance->childHasBeenRendered(''.e(now()).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(now()).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(now()).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(now()).'');
} else {
    $response = \Livewire\Livewire::mount('pages.about.card', ['team' => $team]);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(now()).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>



        </div>


    </div>
</div><?php /**PATH C:\Users\AL Laith Group\OneDrive\Documents\GitHub\abdulkareem-for-charity\resources\views/livewire/pages/about/main.blade.php ENDPATH**/ ?>