<div>
    <div class="px-4 pt-4">
        <form action="#" class="space-y-5" wire:submit.prevent="edit">
            <div class="p-2">
                <h3 class="text-2xl font-semibold text-primary-500">المعلومات الاساسية</h3>
                <hr class="w-1/2 mt-1">
            </div>
            <div class="form-item">
                <label class="text-xl">الاسم الكامل</label>
                <input wire:model="name" type="text" value="<?php echo e($name); ?>"
                    class="bg-gray-50 border border-primary-400 text-sm w-full md:w-1/2 md:col-span-1 focus:ring-primary-600 focus:border-primary-500  block p-2.5 rounded-md mt-2 ">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500 error"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-md">البريد الألكتروني</label>
                    <input wire:model="email" type="text" id="email"
                        class="bg-gray-50 border border-primary-400 w-full md:w-1/2 text-sm focus:ring-primary-600 focus:border-primary-500 block  p-2.5 mt-2 rounded-md">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-500 error"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="p-2">
                <h3 class="text-2xl font-semibold text-primary-500">معلومات الاتصال</h3>
                <hr class="w-1/2 mt-1">
            </div>
            <div class="form-item">
                <label class="text-xl ">رقم الهاتف</label>
                <input wire:model="phone_number" type="text"
                    class="bg-gray-50 border border-primary-400 text-sm w-full md:w-1/2 focus:ring-primary-600 focus:border-primary-500 block p-2.5 mt-2 rounded-md">
                <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500 error"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-item">
                <label class="text-xl ">معرف التلجرام</label>
                <input type="text"
                    class="bg-gray-50 border border-primary-400 text-sm w-full md:w-1/2 focus:ring-primary-600 focus:border-primary-500 block p-2.5 mt-2 rounded-md">
                <?php $__errorArgs = ['telegram_username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500 error"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class=" items-center justify-center">
                <label
                    class="w-full pt-5 h-28 md:w-1/2 flex flex-col items-center px-2 py-6  <?php if($profile_photo): ?> bg-primary-700 text-white <?php else: ?> bg-white text-primary-700 <?php endif; ?> rounded-lg tracking-wide border-4 border-dashed border-primary-700 cursor-pointer hover:bg-primary-700 hover:text-white">
                    <div wire:loading wire:target="profile_photo">
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
                    <div wire:loading.remove wire:target="profile_photo">
                        <?php if($profile_photo): ?>
                            <i class="fa-solid fa-check text-2xl"></i>
                        <?php else: ?>
                            <i class="fa-solid fa-upload text-2xl"></i>
                        <?php endif; ?>
                    </div>
                    <span class="mt-2 text-base leading-normal">
                        <?php if($profile_photo): ?>
                            تم اختيار الصورة
                        <?php else: ?>
                            إختر صورة
                        <?php endif; ?>
                    </span>
                    <input type='file' class="hidden" wire:model="profile_photo" />
                </label>
                <?php $__errorArgs = ['profile_photo'];
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
            <button type="submit"
                class="text-white bg-primary-600 hover:scale-105 duration-200 hover:bg-primary-800 focus:ring-2 focus:outline-none focus:ring-primary-600 font-medium text-sm w-40 px-5 py-2.5 text-center rounded-md">
                أرسل</button>
        </form>
    </div>

</div>
<?php /**PATH C:\Users\AL Laith Group\OneDrive\Documents\GitHub\abdulkareem-for-charity\resources\views/livewire/pages/profile/basic.blade.php ENDPATH**/ ?>