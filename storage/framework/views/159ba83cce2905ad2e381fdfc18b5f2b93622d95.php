<div dir="ltr">
    <?php if($paginator->hasPages()): ?>
        <?php (isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : ($this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)); ?>

        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between mt-4">
            <div dir="ltr" class="flex justify-center flex-1 sm:hidden">
                <span>
                    <?php if($paginator->onFirstPage()): ?>
                        <span
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md select-none">
                            <?php echo __('pagination.previous'); ?>

                        </span>
                    <?php else: ?>
                        <button wire:click="previousPage('<?php echo e($paginator->getPageName()); ?>')"
                            wire:loading.attr="disabled"
                            dusk="previousPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>.before"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-primary-500 border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-primary focus:border-primary-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            <?php echo __('pagination.previous'); ?>

                        </button>
                    <?php endif; ?>
                </span>

                <span>
                    <?php if($paginator->hasMorePages()): ?>
                        <button wire:click="nextPage('<?php echo e($paginator->getPageName()); ?>')" wire:loading.attr="disabled"
                            dusk="nextPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>.before"
                            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-primary focus:border-primary-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            <?php echo __('pagination.next'); ?>

                        </button>
                    <?php else: ?>
                        <span
                            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md select-none">
                            <?php echo __('pagination.next'); ?>

                        </span>
                    <?php endif; ?>
                </span>
            </div>

            <div class="hidden md:flex md:justify-between">

                <div>
                    <span class="relative z-0 inline-flex rounded-md shadow-sm">
                        <span>
                            
                            <?php if($paginator->onFirstPage()): ?>
                                <span aria-disabled="true" aria-label="<?php echo e(__('pagination.previous')); ?>">

                                </span>
                            <?php else: ?>
                                <button wire:click="previousPage('<?php echo e($paginator->getPageName()); ?>')"
                                    dusk="previousPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>.after"
                                    rel="prev"
                                    class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-primary-500 bg-white border border-primary-500 rounded-l-md leading-5 hover:text-white hover:bg-primary-500 focus:z-10 focus:outline-none focus:border-primary-300 focus:shadow-outline-primary active:bg-primary-600 transition ease-in-out duration-150"
                                    aria-label="<?php echo e(__('pagination.previous')); ?>">
                                    <svg class="" fill="currentColor" viewBox="0 0 20 20">
                                        <p>السابق</p>
                                    </svg>
                                </button>
                            <?php endif; ?>
                        </span>

                        
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <?php if(is_string($element)): ?>
                                <span aria-disabled="true">
                                    <span
                                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5 select-none"><?php echo e($element); ?></span>
                                </span>
                            <?php endif; ?>

                            
                            <?php if(is_array($element)): ?>
                                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span
                                        wire:key="paginator-<?php echo e($paginator->getPageName()); ?>-<?php echo e($this->numberOfPaginatorsRendered[$paginator->getPageName()]); ?>-page<?php echo e($page); ?>">
                                        <?php if($page == $paginator->currentPage()): ?>
                                            <span aria-current="page">
                                                <span
                                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-primary-500 border border-primary-500 cursor-default leading-5 select-none"><?php echo e($page); ?></span>
                                            </span>
                                        <?php else: ?>
                                            <button
                                                wire:click="gotoPage(<?php echo e($page); ?>, '<?php echo e($paginator->getPageName()); ?>')"
                                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-primary-500 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-primary-300 focus:shadow-outline-primary active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                                aria-label="<?php echo e(__('Go to page :page', ['page' => $page])); ?>">
                                                <?php echo e($page); ?>

                                            </button>
                                        <?php endif; ?>
                                    </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <span>
                            
                            <?php if($paginator->hasMorePages()): ?>
                                <button wire:click="nextPage('<?php echo e($paginator->getPageName()); ?>')"
                                    dusk="nextPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>.after"
                                    rel="next"
                                    class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-primary-500 border rounded-r-md leading-5 hover:text-primary-500 hover:bg-white hover:border-primary-500 focus:z-10 focus:outline-none focus:border-primary-300 focus:shadow-outline-primary active:bg-primary-100 active:text-green-500 transition ease-in-out duration-150"
                                    aria-label="<?php echo e(__('pagination.next')); ?>">
                                    <svg class="" fill="currentColor" viewBox="0 0 20 20">
                                        <p class="font-bold">التالي</p>
                                    </svg>
                                </button>
                            <?php else: ?>
                                <span aria-disabled="true" aria-label="<?php echo e(__('pagination.next')); ?>">

                                </span>
                            <?php endif; ?>
                        </span>
                    </span>
                </div>
            </div>
        </nav>
    <?php endif; ?>
</div>
<?php /**PATH E:\abdulkareem-for-charity\resources\views/vendor/livewire/tailwind.blade.php ENDPATH**/ ?>