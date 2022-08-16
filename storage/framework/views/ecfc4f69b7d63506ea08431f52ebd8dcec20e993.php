<div>
    <div class="flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl border border-gray-800 sm:px-12">

        <div class="transform rounded-full border-secondary-200">
            <img src="/img/about1.png" class="mx-auto h-32 border-2 border-secondary-800 rounded-full" />
            
            
        </div>

        <div class="space-y-4 divide-y divide-gray-200">
            <div class="my-2 space-y-1">
                <h2 class="text-center text-xl font-semibold sm:text-2xl pb-4">
                    <?php echo e($committee->name); ?>

                    
                </h2>
                <p class="text-xs sm:text-base text-gray-700 text-center">
                    
                    <?php if($committee->department== 1): ?>
                    صباحي
                    <?php elseif($committee->department== 2): ?>
                    مسائي
                    
                    <?php endif; ?> 
                    <?php if($committee->stage == 1): ?>
                    - المرحلة الاولى
                    <?php elseif($committee->stage == 2): ?>
                    - المرحلة الثانية
                    <?php elseif($committee->stage == 3): ?>
                    - المرحلة الثالثة
                    <?php elseif($committee->stage == 4): ?>
                    - المرحلة الرابعة
                    <?php endif; ?> 
                    
                    
                    
                </p>
            </div>


            <div class="flex justify-end pt-2 space-x-4 align-center text-gray-700 ">
                <a href="#" aria-label="number" class="p-2 rounded-md text-lg">
                   <?php echo e($committee->phone_num); ?>

                    <i class="fa-solid fa-phone mr-4 " ></i>
                </a>
            </div>
            <button wire:click="confirm(<?php echo e($committee->id); ?>)" class="mx-2">
                <i
                    class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-600">
                </i>
            </button>
        </div>
    </div>
</div>
<?php /**PATH E:\github\abdulkareem-for-charity\resources\views/livewire/pages/donate/committee.blade.php ENDPATH**/ ?>