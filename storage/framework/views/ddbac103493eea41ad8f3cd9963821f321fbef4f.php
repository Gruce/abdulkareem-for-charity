<div >
    <div class="py-4 px-2 rounded-xl transition duration-300 mx-auto border border-gray-300 hover:shadow-md hover:bg-gray-50">
        <div class="">
            <img src="<?php if($item->profile_photo_path): ?> <?php echo e(asset($item->profile_photo_path)); ?><?php elseif($item->gender == 1): ?> <?php echo e(asset('/img/profile_woman.png')); ?> <?php elseif($item->gender != 1): ?> <?php echo e(asset('/img/profile_man.png')); ?> <?php endif; ?>"
                class="mx-auto h-48" />
        </div>
        <div class="text-center">
            <h3 class="text-center text-3xl font-semibold mt-4"><?php echo e($item->name); ?></h3>
            <span class="text-sm">
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
            </span>
        </div>
        <ul class="mt-12 mb-8 flex justify-evenly text-center text-2xl">
            <li class="flex flex-col"><span class="mb-2">سهم</span> <?php echo e($item->get_shares); ?></li>
            <li class=" flex flex-col"><span class="mb-2">مبلغ</span> <?php echo e($item->get_shares * 2000); ?></li>

        </ul>
        <?php if (\Illuminate\Support\Facades\Blade::check('superAdmin')): ?>
        <div class="text-center">
            <button wire:click="confirm_downgrade()" type="button"
                class="rounded-xl mb-2  bg-gradient-to-r from-red-400 to-red-500 hover:bg-gradient-to-br px-20 py-2 text-white">تخفيض
                المدير</button>
        </div>
        <?php endif; ?>
    </div>

</div>
<?php /**PATH E:\abdulkareem-for-charity\resources\views/livewire/pages/admins/card.blade.php ENDPATH**/ ?>