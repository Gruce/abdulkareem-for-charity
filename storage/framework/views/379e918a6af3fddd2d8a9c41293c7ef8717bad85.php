<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class=" flex flex-wrap md:flex-col md:space-y-3 xl:flex-row justify-between xl:justify-around items-center">

        
        <div class="mb-2 md:my-0">
            <a href="/" class="flex items-center text-xl">
                <img src="<?php echo e(asset('/img/logo.png')); ?>" class="h-12 mx-4 ">
                <span class="font-Alhurra text-2xl font-bold text-gray-700">صندوق الكرم</span>
            </a>
        </div>

        <div class="flex items-center md:order-2 ">
            
            <?php if(auth()->guard()->check()): ?>

            <div class="flex justify-around items-center md:order-2 md:-mt-4 <?php if(auth()->guard()->guest()): ?> hidden <?php endif; ?> ml-2">
                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                <div class="hidden   md:flex justify-around   ml-10  text-gray-500 text-base text-center ">

                    <div class="flex flex-col mx-2 border-b border-gray-200">
                        <span><?php echo money($total, 'IQD'); ?> </span>
                        <span class="text-2xs -mt-2">الكلي</span>
                    </div>
                    <div class="flex flex-col mx-2 border-b border-gray-200">
                        <span><?php echo money($current_price, 'IQD'); ?> </span>
                        <span class="text-2xs -mt-2">الحالي</span>
                    </div>

                    <div class="flex flex-col mx-2 border-b border-gray-200">
                        <span><?php echo money($payments, 'IQD'); ?></span>
                        <span class="text-2xs -mt-2">مصروف</span>
                    </div>
                </div>
                <?php endif; ?>
                <div class=" ">
                    <button type="button"
                        class="flex mr-3 text-sm border-2 border-transparent  md:mr-0"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                        <span class="sr-only">Open user menu</span>
                        <i class="fa-solid fa-angle-down ml-2 mt-3"></i>
                        <img class="w-8 h-8 xl:w-10 xl:h-10 rounded-full border-2 border-primary-600"
                            src="<?php echo e(asset(auth()->user()->profile_photo_path ?? '/img/user.png')); ?>" alt="user photo">
                    </button>

                    <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow "
                        id="dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1246px, 801px);">
                        <div class="py-3 px-4">
                            <span class="block text-sm text-gray-900 "><?php echo e(auth()->user()->name); ?></span>
                            <span class="block text-sm font-medium text-gray-500 truncate "><?php echo e(auth()->user()->email); ?></span>
                        </div>
                        <ul class="py-1" aria-labelledby="dropdown">

                            <li>
                                <a href="<?php echo e(route('profile')); ?>"
                                    class=" py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 flex justify-between">
                                    <span> حسابك</span>
                                    <i class="fa-solid fa-circle-user"></i>
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="<?php echo e(route('logout')); ?>" class="" x-data>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit"
                                        class="flex justify-around items-center p-3 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 w-full">
                                        <span> تسجيل الخروج</span>
                                        <i class="fa-solid fa-right-from-bracket"></i>

                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            
            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden justify-center items-center w-full md:flex md:w-auto md:order-1 " id="mobile-menu-2">
            <ul class="flex flex-col mt-4 md:flex-row  md:-mt-1 md:text-sm md:font-medium xl:mr-28 my-2 ">
                <?php $__currentLoopData = $menu->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="mx-8">

                    <a href="<?php echo e(route($item->route)); ?>" class="block py-2 pl-3 pr-4 font-Alhurra1 <?php echo e($item->active ? "
                        text-primary-500
                        border-primary-100 " : 'text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 '); ?> border-b">
                        <?php echo e($item->name); ?>


                    </a>

                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $leftMenu->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="mx-8  md:hidden ">

                    
                    <a href="<?php echo e(route($item->route)); ?>"
                        class="block py-2 pl-3 pr-4  <?php echo e($item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 '); ?> border-b ">
                        <?php echo e($item->name); ?>

                    </a>

                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>


        </div>
        <div class="hidden justify-center items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">

            <ul class="flex flex-col mt-4 md:flex-row  md:-mt-4  md:text-sm md:font-medium">


                <?php $__currentLoopData = $leftMenu->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="mx-8 ">

                    <a href="<?php echo e(route($item->route)); ?>"
                        class="block py-2 pl-3 pr-4 <?php echo e($item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 '); ?> border-b-2 ">
                        <?php echo e($item->name); ?>

                    </a>

                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>
    </div>
</nav>
<?php /**PATH C:\Users\AL Laith Group\OneDrive\Documents\GitHub\abdulkareem-for-charity\resources\views/livewire/components/navbar.blade.php ENDPATH**/ ?>