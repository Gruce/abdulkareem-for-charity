<div>
    <div class="flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl border border-gray-800 sm:px-12">
        @if($edit_id == $committee->id)
        <div>
            <div class="flex h-auto items-center justify-center">

                <div class="grid rounded-lg w-full">
                    <div class="flex justify-center">
                        <div class="flex">
                            <h1 class="text-gray-800 font-bold md:text-2xl text-xl">تعديل المعلومات</h1>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label for="name" class="md:text-sm text-xs text-gray-700 text-light font-semibold">الأسم</label>
                        <input wire:model.lazy="name" id="name"
                            class="py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                            type="text" />
                    </div>

                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <div class="p-1">
                            <select wire:model.lazy="department"
                                class="px-10 py-3 w-full rounded-md border-2 border-gray-200 bg-white border-transparent focus:border-primary-100 focus:bg-white focus:ring-0 text-sm">
                                <option value="">القسم</option>
                                <option value="1">علوم الحاسوب</option>
                                <option value="2">نظم المعلومات</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <div class="p-1">
                            <select wire:model.lazy="stage"
                                class="px-10 py-3 w-full rounded-md border-2 border-gray-200 bg-white border-transparent focus:border-primary-100 focus:bg-white focus:ring-0 text-sm">
                                <option value="">المرحلة</option>
                                <option value="1">اولى</option>
                                <option value="2">ثانية</option>
                                <option value="3">ثالثة</option>
                                <option value="4">رابعة</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <div class="p-1">
                            <select wire:model.lazy="study_type"
                                class="px-10 py-3 w-full rounded-md border-2 border-gray-200 bg-white border-transparent focus:border-primary-100 focus:bg-white focus:ring-0 text-sm">
                                <option value="">الدراسة</option>
                                <option value="1">صباحية</option>
                                <option value="2">مسائية</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="md:text-sm text-xs text-gray-700 text-light font-semibold">رقم الهاتف</label>
                        <input wire:model.lazy="phone_num"
                            class="py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-primary-100 focus:border-transparent"
                            type="text" placeholder="رقم الهاتف" />
                    </div>



                    {{-- Button --}}
                    <div class="flex items-center justify-center  md:gap-8 gap-4 pt-7 pb-7">
                        <button wire:click="save"
                            class="w-auto bg-primary-600 hover:bg-primary-800 rounded-lg shadow-md hover:shadow-xl hover:scale-105 font-medium text-white px-4 py-2">حفظ</button>
                        <button  wire:click="$set('edit_id', {{null}})"
                            class="w-auto bg-red-600 hover:bg-red-800 rounded-lg shadow-md hover:shadow-xl hover:scale-105 font-medium text-white px-4 py-2">اغلاق</button>
                    </div>

                </div>
            </div>
        </div>
        @else
        <div class="transform rounded-full border-secondary-200">
            <img src="/img/about1.png" class="mx-auto h-32 border-2 border-secondary-800 rounded-full" />

            {{-- <img src="{{ $committee->photo ?? 'img/about1/png'}}" alt=""
                class="mx-auto h-32 border-2 border-secondary-800 rounded-full"> --}}
        </div>

        <div class="space-y-4 divide-y divide-gray-200">
            <div class="my-2 space-y-1">
                <h2 class="text-center text-xl font-semibold sm:text-2xl pb-4">
                    {{ $committee->name }}

                </h2>
                <p class="text-xs sm:text-base text-gray-700 text-center">

                    @if ($committee->study_type == 1)
                    صباحي
                    @elseif($committee->study_type == 2)
                    مسائي
                    @endif
                    @if ($committee->stage == 1)
                    - المرحلة الاولى
                    @elseif($committee->stage == 2)
                    - المرحلة الثانية
                    @elseif ($committee->stage == 3)
                    - المرحلة الثالثة
                    @elseif ($committee->stage == 4)
                    - المرحلة الرابعة
                    @endif



                </p>
            </div>


            <div class="flex justify-end pt-2 space-x-4 align-center text-gray-700 ">
                <a href="#" aria-label="number" class="p-2 rounded-md text-lg">
                    {{ $committee->phone_num }}
                    <i class="fa-solid fa-phone mr-4 "></i>
                </a>
            </div>
            @admin
            <button wire:click="confirm({{ $committee->id }})" class="mx-2">
                <i class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-600">
                </i>
            </button>

            <button wire:click="edit({{ $committee->id }})">

                <i
                    class="text-secondary-600 fa-solid fa-pen-to-square text-xl hover:rotate-12 duration-200 hover:text-secondary-700"></i>
            </button>
            @endadmin
        </div>
        @endif
    </div>
</div>
