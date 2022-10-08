<div>
    <div class=" p-4 w-full rounded-t-xl bg-gray-50 hover:bg-gray-100 transition duration-300 border border-gray-200">
        <div class="grid grid-cols-5 mb-5">
            <img src="<?php if($item->profile_photo_path): ?> <?php echo e(asset($item->profile_photo_path)); ?><?php elseif($item->gender == 1): ?> <?php echo e(asset('/img/profile_woman.png')); ?> <?php elseif($item->gender != 1): ?> <?php echo e(asset('/img/profile_man.png')); ?> <?php endif; ?>"
                class="col-span-2 rounded-full h-32 border-2 border-primary-600" />
            <div class="col-span-3">

                <h3 class="mt-6 text-center text-2xl "><?php echo e($item->name); ?></h3>
                <h3 class="mt-2 text-center text-base ">
                    <?php if($item->type == 1): ?>
                        طالب - <?php if($item->student->department == 1): ?>
                            علوم
                        <?php else: ?>
                            نظم
                        <?php endif; ?>
                        - <?php if($item->student->study_type == 1): ?>
                            صباحي
                        <?php else: ?>
                            مسائي
                        <?php endif; ?>
                        - <?php if($item->student->stage == 1): ?>
                            أولى
                        <?php elseif($item->student->stage == 2): ?>
                            ثانية
                        <?php elseif($item->student->stage == 3): ?>
                            ثالثة
                        <?php else: ?>
                            رابعة
                        <?php endif; ?>
                        - <?php if($item->student->division == 1): ?>
                            A
                        <?php elseif($item->student->stage == 2): ?>
                            B
                        <?php elseif($item->student->stage == 3): ?>
                            C
                        <?php elseif($item->student->stage == 4): ?>
                            D
                        <?php else: ?>
                            E
                        <?php endif; ?>
                    <?php elseif($item->type == 2): ?>
                        تدريسي
                    <?php elseif($item->type == 3): ?>
                        موظف
                    <?php elseif($item->type == 4): ?>
                        من خارج الكلية
                    <?php endif; ?>
                </h3>
            </div>
        </div>
        <div class="grid grid-cols-5 mb-5">
            <div class="col-span-2 flex flex-col">
                <div class="flex justify-center">
                    <button wire:click="confirm_downgrade()" type="button"
                        class="inline-block rounded-full text-white bg-gradient-to-r from-red-400  to-red-500 hover:bg-gradient-to-br shadow-md  hover:shadow-lg transition duration-450 w-9 h-9">
                        <i class="fa-solid fa-person-circle-xmark"></i>
                    </button>

                </div>


            </div>
            <div class="col-span-3">
                <ul class="  flex justify-around text-center text-2xl">
                    <li class="flex flex-col"><span class="font-sans mb-3">سهم</span><?php echo e($item->get_shares); ?></li>
                    <li class=" flex flex-col"><span class="font-sans mb-3">مستلم</span><?php echo e($item->get_shares * 2000); ?></li>

                </ul>

            </div>

        </div>
    </div>

</div>
<?php /**PATH C:\Users\AL Laith Group\OneDrive\Documents\GitHub\abdulkareem-for-charity\resources\views/livewire/pages/admins/card.blade.php ENDPATH**/ ?>