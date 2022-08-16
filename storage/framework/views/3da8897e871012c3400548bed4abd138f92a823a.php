<div>
    <div
        class="flex flex-col justify-center text-gray-800 px-4 my-12 text-center rounded-md w-11/12 border border-gray-500 mx-auto">
        <img alt=""
            class="self-center flex-shrink-0 w-24 h-24 mt-12 bg-center bg-cover rounded-full border-2 border-primary-600"
            src="<?php if($item->profile_photo_path): ?> <?php echo e(asset($item->profile_photo_path)); ?><?php elseif($item->gender == 1): ?> <?php echo e(asset('/img/profile_woman.png')); ?> <?php elseif($item->gender != 1): ?> <?php echo e(asset('/img/profile_man.png')); ?> <?php endif; ?>">
        <div class="flex-1 my-4">
            <p class="text-xl font-semibold leading-snug"> <?php echo e($item->name); ?></p>

            <p class="text-xs block mt-4">
                <?php if($item->type == 1): ?>
                    <?php if($item->student->stage == 1): ?>
                    المرحلة الاولى
                    <?php elseif($item->student->stage == 2): ?>
                    المرحلة الثانية
                    <?php elseif($item->student->stage == 3): ?>
                    المرحلة الثالثة
                    <?php else: ?>
                    المرحلة الرابعة
                    <?php endif; ?> - <?php if($item->student->department == 1): ?>
                    علوم حاسوب
                    <?php else: ?>
                    نظم المعلومات
                    <?php endif; ?>
                <?php elseif($item->type == 2): ?>
                تدريسي
                <?php elseif($item->type == 3): ?>
                موظف
                <?php else: ?>
                من خارج الكلية
                <?php endif; ?>
            </p>

        </div>
        <div class="flex flex-col text-right  p-3  border-t-2 border-gray-500 w-auto">
            <div>
                <span>الهاتف:</span>
                <?php echo e($item->phone_number); ?>

            </div>
            <div>
                <span>التلجرام:</span>
                <?php echo e($item->telegram_username); ?>

            </div>
        </div>
    </div>

</div>
<?php /**PATH /www/wwwroot/abdulkareem-for-charity/resources/views/livewire/pages/donate/card.blade.php ENDPATH**/ ?>