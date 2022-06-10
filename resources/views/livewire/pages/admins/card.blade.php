<div>
    <div class=" p-4 w-full rounded-t-xl bg-gray-50 hover:bg-gray-100 transition duration-300 border border-gray-200">
        <div class="grid grid-cols-5 mb-5">
            <img src="@if ($item->profile_photo_path) {{ asset($item->profile_photo_path) }}@elseif($item->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif($item->gender != 1) {{ asset('/img/profile_man.png') }} @endif"
                class="col-span-2 rounded-full h-32" />
            <div class="col-span-3">
                <h3 class="mt-6 text-center text-2xl ">{{ $item->name }}</h3>
                <h3 class="mt-2 text-center text-base ">
                    @if ($item->type == 1)
                        طالب - @if ($item->student->department == 1)
                            علوم
                        @else
                            نظم
                        @endif
                        - @if ($item->student->study_type == 1)
                            صباحي
                        @else
                            مسائي
                        @endif
                        - @if ($item->student->stage == 1)
                            أولى
                        @elseif($item->student->stage == 2)
                            ثانية
                        @elseif($item->student->stage == 3)
                            ثالثة
                        @else
                            رابعة
                        @endif
                        - @if ($item->student->division == 1)
                            A
                        @elseif($item->student->stage == 2)
                            B
                        @elseif($item->student->stage == 3)
                            C
                        @elseif($item->student->stage == 4)
                            D
                        @else
                            E
                        @endif
                    @elseif($item->type == 2)
                        تدريسي
                    @elseif($item->type == 3)
                        موظف
                    @elseif($item->type == 4)
                        من خارج الكلية
                    @endif
                </h3>
            </div>
        </div>
        <div class="grid grid-cols-5 mb-5">
            <div x-data="{ isOpen: false }" class="col-span-2 flex flex-col">
                <div class="flex justify-center">
                    <button wire:click="confirm_downgrade()" type="button"
                        class="inline-block rounded-full text-white bg-gradient-to-r from-red-400  to-red-500 hover:bg-gradient-to-br shadow-md  hover:shadow-lg transition duration-450 w-9 h-9">
                        <i class="fa-solid fa-person-circle-xmark"></i>
                    </button>
                    <button @click="isOpen = !isOpen" type="button"
                        class="inline-block rounded-full text-white bg-gradient-to-r from-primary-400  to-primary-500 hover:bg-gradient-to-br shadow-md  hover:shadow-lg transition duration-450 w-9 h-9 ml-16 mr-2">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </button>
                </div>
                <div x-show="isOpen" class="mt-10 text-xs text-center">
                    <span class=" ">اذا سلم هذا المدير مبالغ للصندوق </span>
                    <span class=" ">قم بأضافتها هنا</span>
                    <input type="number" wire:model="paid_amount"
                        class="mt-2 w-full rounded-t-md border border-gray-300 p-2 text-center focus:border-green-400 " />
                    <button wire:click="add_paid_amount" type="button"
                        class="inline-block rounded-b-sm text-white bg-gradient-to-r from-primary-400  to-primary-500 hover:bg-gradient-to-br shadow-md  hover:shadow-lg transition duration-450 w-full h-9 mt-1">
                        اضافة
                </div>

            </div>
            <div class="col-span-3">
                <ul class="  flex justify-around text-center text-2xl">
                    <li class="flex flex-col"><span class="font-sans mb-3">سهم</span></li>
                    <li class=" flex flex-col"><span class="font-sans mb-3">مستلم</span>0</li>

                </ul>
                <ul class="mt-5 mb-8 flex justify-around text-center text-2xl">
                    <li class=" flex flex-col"><span class="font-sans mb-3">مدفوع</span>0</li>
                    <li class="flex flex-col"><span class="font-sans mb-3">متبقي</span>0</li>
                </ul>
            </div>

        </div>
    </div>

</div>
