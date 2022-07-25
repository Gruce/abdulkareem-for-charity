<div>

    <div class="flex h-auto items-center justify-center text-gray-600">
        <form wire:submit.prevent="edit">
            <div class="grid rounded-lg w-full">
                <div class="flex justify-center">
                    <div class="flex bg-primary-200 rounded-full md:p-2 p-2 border-2 border-primary-300">
                        <i class="fa-brands fa-hire-a-helper w-10 h-10 text-gray-500"></i>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="flex">
                        <h1 class="text-gray-800 font-bold md:text-2xl text-xl mt-4">تعديل الحالات</h1>
                    </div>
                </div>




                <div class="flex flex-row w-full mt-10">

                    
                    <div class="w-1/2 grid grid-cols-1 mt-5 mx-7">
                        <label class="md:text-sm text-xs text-gray-700 text-light font-semibold">عنوان الحالة</label>
                        <input wire:model.lazy="title"
                            class="py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                            type="text" placeholder="عنوان الحالة" required />
                    </div>

                    
                    <div class="w-1/2 grid grid-cols-1 mt-5 mx-7">
                        <label class="w-full md:text-sm text-xs text-gray-700 text-light font-semibold">المبلغ
                            الكلي</label>
                        <input wire:model.lazy="target"
                            class="w-full py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                            type="number" placeholder="المبلغ الكلي" required />
                    </div>




                </div>

                
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="md:text-sm text-xs text-gray-700 text-light font-semibold">تفاصيل الحالة</label>
                    <textarea wire:model.lazy="description"
                        class="py-2 px-3 rounded-lg h-32 border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                        type="text" required></textarea>
                </div>

                <div class="flex flex-row w-full">
                    <div class="w-1/2 mt-5 mx-7 items-center justify-center bg-grey-lighter">
                        <label
                            class="w-full flex flex-col items-center px-2 py-6  <?php if($image_path): ?> bg-primary-700 text-white <?php else: ?> bg-white text-primary-700 <?php endif; ?> rounded-lg tracking-wide border-4 border-dashed border-primary-700 cursor-pointer hover:bg-primary-700 hover:text-white">
                            <div wire:loading wire:target="image_path">
                                <?php if (isset($component)) { $__componentOriginal1716da4f44bad2ad281abfc716acec42a1914ead = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Ui\Loading::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ui.loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Ui\Loading::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1716da4f44bad2ad281abfc716acec42a1914ead)): ?>
<?php $component = $__componentOriginal1716da4f44bad2ad281abfc716acec42a1914ead; ?>
<?php unset($__componentOriginal1716da4f44bad2ad281abfc716acec42a1914ead); ?>
<?php endif; ?>
                            </div>
                            <div wire:loading.remove wire:target="image_path">
                                
                                <i class="fa-solid fa-upload text-2xl"></i>
                                
                            </div>
                            <span class="mt-2 text-base leading-normal">                               
                                إضافة صورة                       
                            </span>
                            <input wire:model.lazy="new_image" type="file" class="hidden" />
                        </label>
                        <?php $__errorArgs = ['image_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="error text-primary-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم يتم تحميل
                            الصورة</span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="w-1/2 mt-5 mx-7 items-center justify-center bg-grey-lighter">
                        <label
                            class="w-full flex flex-col items-center px-2 py-6  <?php if($file_path): ?> bg-primary-700 text-white <?php else: ?> bg-white text-primary-700 <?php endif; ?> rounded-lg tracking-wide border-4 border-dashed border-primary-700 cursor-pointer hover:bg-primary-700 hover:text-white">
                            <div wire:loading wire:target="file_path">
                                <?php if (isset($component)) { $__componentOriginal1716da4f44bad2ad281abfc716acec42a1914ead = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Ui\Loading::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ui.loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Ui\Loading::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1716da4f44bad2ad281abfc716acec42a1914ead)): ?>
<?php $component = $__componentOriginal1716da4f44bad2ad281abfc716acec42a1914ead; ?>
<?php unset($__componentOriginal1716da4f44bad2ad281abfc716acec42a1914ead); ?>
<?php endif; ?>
                            </div>
                            <div wire:loading.remove wire:target="file_path">
                                
                                <i class="fa-solid fa-upload text-2xl"></i>
                                
                            </div>
                            <span class="mt-2 text-base leading-normal">
                                
                                إضافة ملف
                                
                            </span>
                            <input id="file" type='file' class="hidden" wire:model="new_file" />
                        </label>
                        <?php $__errorArgs = ['file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="error text-primary-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم يتم تحميل
                            الملف</span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                
                <div class="flex items-center justify-center  md:gap-8 gap-4 pt-7 pb-7">
                    <a href="<?php echo e(route('cases')); ?>"
                    class="w-auto bg-white hover:bg-primary-600 text-primary-600 hover:text-white border border-primary-600 rounded-lg shadow-md hover:shadow-xl hover:scale-105 font-medium  px-4 py-2">الرجوع</a>
                    <button type="submit"
                        class="w-auto bg-primary-600 hover:bg-primary-800 rounded-lg shadow-md hover:shadow-xl hover:scale-105 font-medium text-white px-4 py-2">تعديل</button>
                </div>

            </div>
        </form>
    </div>

</div><?php /**PATH E:\abdulkareem-for-charity\resources\views/livewire/pages/cases/admin/edit.blade.php ENDPATH**/ ?>