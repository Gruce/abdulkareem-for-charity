<div class=" grid grid-cols-1 xl:grid-cols-12 justify-between">
    <div class="basis-1/2 col-span-5 pt-2 xl:pr-24 ">
        <h1 class="text-secondary-900 text-2xl p-2 md:text-3xl xl:text-5xl font-bold">
            <?php echo e($title); ?>

        </h1>
        <div class="w-full  text-center mt-5 py-2 px-5 xl:mt-8">
            <div class="xl:w-full bg-gray-300 rounded-full">
                <div class="bg-primary-500 text-xs font-medium text-blue-100 text-center h-2.5 p-0.5 leading-none rounded-full"
                    style="width:<?php echo e(($event->received_price * 100) / $event->target); ?>%"></div>
            </div>
            <div class="flex justify-between px-3 mt-2 text-xl text-secondary-200">
                <div>الواصل <?php echo e($event->received_price); ?> </div>
                <div><?php echo e(($event->received_price * 100) / $event->target); ?>%</div>
                <div>الهدف <?php echo e($event->target); ?></div>
            </div>
            <div class="h-0.5 w-full rounded-full bg-gray-300 my-7 "></div>
        </div>
        <div class="text-xl text-gray-600 px-6 xl:px-0">
            <?php echo e($description ?? 'لا يوجد وصف'); ?>

        </div>
        <div class="mt-4 xl:mt-10 mr-10 xl:mr-4 flex gap-5">
            <a href="<?php echo e(route('cases')); ?>"
                class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white border hover:border-transparent border-green-500 text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">رجوع</a>
            <a href="<?php echo e(route('donate')); ?>"
                class="text-white text-base xl:text-2xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">تبرع
                الان</a>
                <div class="flex justify-around">
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <a href="<?php echo e(route('edit-case', ['case_id' => $event->id])); ?>">
                        <i
                            class="text-secondary-600 fa-solid mt-4 fa-pen-to-square text-xl hover:rotate-12 duration-200 hover:text-secondary-700"></i>
                    </a>
                    <?php endif; ?>
                </div>
        </div>
    </div>

    <div class="basis-1/2 xl:col-span-7 rounded-3xl">
        <img src="<?php echo e(asset($image_path ?? 'img/caseImage.webp')); ?>" class="w-3/4 h-auto my-20 border-4 border-primary-500 rounded-3xl m-auto">
    </div>
</div>
<?php /**PATH C:\Users\AL Laith Group\OneDrive\Documents\GitHub\abdulkareem-for-charity\resources\views/livewire/pages/cases/case-page.blade.php ENDPATH**/ ?>