<div>
    <div class="">
        <div class=" overflow-hidden w-full  mx-auto border-primary-400">
            <div class="top h-64 w-full overflow-hidden relative">
                <img src="/img/profile_background.png" alt=""
                    class="bg w-full h-full object-cover object-center absolute z-0 border-2 border-primary-600">
                <div
                    class="flex flex-col justify-center items-center relative h-full bg-gray-200 bg-opacity-50 text-white">
                    <img src="<?php if($user->profile_photo_path): ?> <?php echo e(asset($user->profile_photo_path)); ?><?php elseif($user->gender == 1): ?> <?php echo e(asset('/img/profile_woman.png')); ?> <?php elseif($user->gender != 1): ?> <?php echo e(asset('/img/profile_man.png')); ?> <?php endif; ?>"
                    
                        class="h-32 w-32 object-cover rounded-full">
                    <h1 class="text-3xl font-semibold text-gray-900"><?php echo e($user->name); ?></h1>
                    <h4 class="text-sm mt-2  text-black">انضم منذ <?php echo e(date('Y', strtotime($user->created_at))); ?>

                    </h4>
                </div>
            </div>


            <div class=" bg-white border-b border-gray-200 ">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-evenly" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent  hover:text-primary-600 hover:border-primary-300 "
                            id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="false">المعلومات الاساسية</button>
                    </li>
                    <?php if(auth()->user()->type == 1): ?>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent  hover:text-primary-600 hover:border-primary-300 "
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">معلومات الطالب</button>
                    </li>
                    <?php endif; ?>


                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 bg-white " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.profile.basic', ['user' => $user])->html();
} elseif ($_instance->childHasBeenRendered('l3329093973-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3329093973-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3329093973-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3329093973-0');
} else {
    $response = \Livewire\Livewire::mount('pages.profile.basic', ['user' => $user]);
    $html = $response->html();
    $_instance->logRenderedChild('l3329093973-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                <div class="hidden p-4 bg-white " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.profile.student-info', ['user' => $user])->html();
} elseif ($_instance->childHasBeenRendered('l3329093973-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3329093973-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3329093973-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3329093973-1');
} else {
    $response = \Livewire\Livewire::mount('pages.profile.student-info', ['user' => $user]);
    $html = $response->html();
    $_instance->logRenderedChild('l3329093973-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>


            </div>

        </div>
    </div>

</div><?php /**PATH E:\abdulkareem-for-charity\resources\views/livewire/pages/profile/main.blade.php ENDPATH**/ ?>