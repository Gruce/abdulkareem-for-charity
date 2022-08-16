<div>

    <div x-data="{ isOpen: false }" class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 group">
        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        
        
        <div
        class="flex flex-col justify-center max-w-sm p-6 shadow-md rounded-xl sm:px-12 border-2 border-primary-100 ">
        <img src="<?php echo e(asset($item->profile_photo_path ?? 'img/user.png')); ?>" class="w-32 h-32 mx-auto rounded-full bg-white-500 aspect-square">
        <div class="space-y-4 text-center divide-y divide-gray-700">
            <div class="my-2 space-y-1">
                <h2 class="text-xl font-semibold sm:text-2xl pb-4"><?php echo e($item->name); ?></h2>
                <p class="text-xs sm:text-base text-gray-700 text-center "><?php echo e($item->getShare() ?? 0); ?> سهم
                    <?php if($item->type == 1): ?>
                    - طالب
                    <?php elseif($item->type == 2): ?>
                    - تدريسي
                    <?php elseif($item->type == 3): ?>
                    - موظف
                    <?php endif; ?>
                </p>
            </div>
            <div class="flex justify-center pt-2 align-center">

                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                <div x-data="{ open: false }">
                    <?php if($item->shares->count() > 0): ?>
                    <button @click="open = ! open"><i
                            class="fa-solid fa-hand-holding-dollar h-8 w-8 mr-3 text-red-600 animate-pulse"></i>
                    </button>
                    <?php endif; ?>
                    <div x-show="open" @click.outside="open = false">
                        <div class="">
                            <?php $__currentLoopData = $item->shares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $share): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="px-5 py-2 text-3xl font-bold text-gray-600 bg-gray-200 rounded-lg flex justify-between">
                                <div>
                                    <h3 class="text-xl mr-2 ">تبرع :
                                        <span><?php echo e($share->share); ?></span>
                                    </h3>
                                </div>
                                <div>
                                    <button type="button" wire:click="accept(<?php echo e($share->id); ?>, <?php echo e($share->state); ?>)"
                                        class="focus:outline-none text-white bg-green-500 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-2 mb-2">قبول</button>
                                    <button type="button" wire:click="deleteShare(<?php echo e($share->id); ?>)"
                                        class="focus:outline-none text-white bg-red-500 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2 mr-2 mb-2">حذف</button>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <button wire:click="confirm(<?php echo e($item->id); ?>)" class="mx-2">
                    <i
                        class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-600">
                    </i>

                </button>
                <?php endif; ?>

            </div>


        </div>
        <div class= "flex justify-between mt-4">
        <div>
            <p class="text-xs text-gray-600 mr-2">انضم <?php echo e($item->created_at->diffForHumans()); ?></p>
        </div>
        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
        <?php if($item->phoneNumber): ?>
        <div class="text-xs text-gray-600">
            <i class="fa-solid fa-phone-flip "></i>
            <span class=""><?php echo e($item->phone_number); ?></span>
            
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        لا يوجد متبرعين
        <?php endif; ?>
    </div>
</div>

<?php /**PATH E:\github\abdulkareem-for-charity\resources\views/livewire/components/donors/card.blade.php ENDPATH**/ ?>