<div>
    <div class="h-auto ">
        <div class="bg-white hover:bg-gray-50 p-6 rounded-t-lg border  w-11/12">
            <img class="h-64 rounded w-full object-cover object-center mb-6"
                src="<?php echo e(asset($event->image_path ?? 'img/caseImage.webp')); ?>" alt="content">
            
            <h2 class="text-xl text-gray-900 font-medium title-font mb-2 text-center"><?php echo e($event->title); ?></h2>
            <h3 class="tracking-widest text-secondary-700 text-base font-medium title-font text-center mb-4"><?php echo e($event->target); ?> د.ع</h3>

            <p class="leading-relaxed text-base"><?php echo e($event->getLimit('description')); ?>

                
                <button class="text-secondary-600 text-sm font-bold duration-300 mb-4" type="button"
                    data-modal-toggle="defaultModal">
                    قراءة المزيد
                </button>

            </p>
            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow ">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-red-600 rounded-bl-lg rounded-tr-lg p-3 ml-auto inline-flex items-center"
                            data-modal-toggle="defaultModal">
                            <i class="fa-solid fa-xmark text-2xl"></i>
                        </button>

                        <div class="flex justify-center items-center rounded-t border-b">
                            <h5 class="text-center font-bold text-primary-900 text-3xl">
                                <?php echo e($event->title); ?>

                            </h5>
                        </div>

                        <div class="p-6 space-y-6">
                            <p class="text-base font-semibold leading-relaxed text-black">
                                <?php echo e($event->description); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-5">
            <div x-data="{ open: false }" class="flex flex-col">
                
                <div class="flex justify-around">

                    <button wire:click="confirm(<?php echo e($event->id); ?>)" class="mx-2">
                        <i
                            class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-500"></i>

                    </button>
                    <button wire:click="$set('case_id', <?php echo e($event->id); ?>)" class="mx-2" type="button"
                        data-modal-toggle="case-modal">
                        <i
                            class="text-secondary-600 fa-solid fa-pen-to-square text-xl hover:rotate-12 duration-200 hover:text-secondary-700"></i>
                    </button>
                    <?php if($event->received_price != $event->target): ?>
                    <button @click="open = !open" class="mx-2">
                        <i
                            class="text-red-400 fa-solid fa-plus text-xl hover:scale-110 hover:rotate-45 duration-300 hover:text-red-500"></i>
                    </button>
                    <?php endif; ?>


                </div>

                <div x-show="open" @click.outside="open = false" class="flex">

                    <button wire:click="add_price (<?php echo e($event->id); ?>)"
                        class=" mt-4 inline-flex items-center py-2 px-2 ml-2 text-sm font-medium text-white bg-primary-600 rounded-lg border border-primary-700 focus:ring-2 focus:outline-none focus:ring-primary-300">
                        اضافة</button>
                    <input type="number" wire:model="received_price"
                        class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500  w-full h-1/2 p-1 mt-4 "
                        placeholder="" required="">

                </div>

            </div>

        </div>
        <div class="w-11/12 bg-gray-200 h-1 mb-6 text-center">
            <div class="bg-green-500 h-1 " style="width: <?php echo e(($event->received_price * 100) / $event->target); ?>%"></div>
            <?php if($event->received_price == $event->target): ?>
            مكتمل
            <?php else: ?>
            <?php echo e($event->received_price); ?> د.ع
            <?php endif; ?>
        </div>
    </div>


</div><?php /**PATH C:\Users\AL Laith Group\OneDrive\Documents\GitHub\abdulkareem-for-charity\resources\views/livewire/components/case/card.blade.php ENDPATH**/ ?>