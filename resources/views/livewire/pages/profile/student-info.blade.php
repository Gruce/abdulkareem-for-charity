<div>
    <div class="px-4 pt-4">
        <form action="#" class="flex flex-col space-y-8" wire:submit.prevent="edit">

            <div class="p-2">
                <h3 class="text-2xl  text-primary-500">معلومات الطالب</h3>
                <hr class="w-2/3">
            </div>

            <div class="grid grid-cols-4 md:grid-cols-2 gap-2">

                <div class="col-span-2 md:col-span-1 border-2 border-primary-600 border-dashed rounded-md p-2">
                    <label class=" text-base md:text-xl ">القسم</label>

                    <div class="text-base mt-6 ">
                        <div class="mb-3">
                            <input type="radio" wire:model="department" value="1" id="CS"
                                class="focus:ring-primary-500 text-primary-600">
                            <label for="CS">علوم الحاسوب</label><br>
                        </div>
                        <div>
                            <input type="radio" wire:model="department" value="2" id="IT"
                                class="focus:ring-primary-500 text-primary-600">
                            <label for="IT">نظم المعلومات</label><br>
                        </div>



                    </div>

                    @error('department')
                    <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-2 md:col-span-1 border-2 border-primary-600 border-dashed rounded-md p-2">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                        <div class="form-item w-full">
                            <label class=" text-base md:text-xl  ">نوع الدراسة</label>

                            <div class="text-base mt-6">

                                <div class="mb-3">
                                    <input type="radio" wire:model="study_type" value="1" id="morning"
                                        class="focus:ring-primary-500 text-primary-600">
                                    <label for="morning">صباحي</label><br>
                                </div>
                                <div>
                                    <input type="radio" wire:model="study_type" value="2" id="evening"
                                        class="focus:ring-primary-500 text-primary-600">
                                    <label for="evening">مسائي</label><br>
                                </div>



                            </div>

                            @error('study_type')
                            <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>


            </div>

            <div class="grid grid-cols-4 md:grid-cols-2 gap-2">
                {{-- المرحلة --}}
                <div class="col-span-2 md:col-span-1 border-2 border-primary-600 border-dashed rounded-md p-2">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                        <div class="form-item w-full">
                            <label class=" text-base md:text-xl  ">المرحلة</label>

                            <div class="text-base flex mt-6">
                                <div class="ml-5 ">

                                    <div class="mb-3">
                                        <input type="radio" wire:model="stage" value="1" id="first"
                                            class="focus:ring-primary-500 text-primary-600 ">
                                        <label for="first">اولى</label><br>
                                    </div>
                                    <div>
                                        <input type="radio" wire:model="stage" value="2" id="second"
                                            class="focus:ring-primary-500 text-primary-600">
                                        <label for="second">ثانية</label><br>
                                    </div>

                                </div>

                                <div class="">
                                    <div class="mb-3">
                                        <input type="radio" wire:model="stage" value="3" id="third"
                                            class="focus:ring-primary-500 text-primary-600 ">
                                        <label for="third">ثالثة</label><br>
                                    </div>
                                    <div>
                                        <input type="radio" wire:model="stage" value="4" id="fourth"
                                            class="focus:ring-primary-500 text-primary-600">
                                        <label for="fourth">رابعة</label><br>
                                    </div>
                                </div>

                            </div>

                            @error('stage')
                            <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- الشعبة --}}
                <div class="col-span-2 md:col-span-1 border-2 border-primary-600 border-dashed rounded-md p-2">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                        <div class="form-item w-full">
                            <label class=" text-base md:text-xl ">الشعبة</label>
                            <br>

                            <div class="text-base mt-7 flex">
                                <div class="ml-5 ">
                                    <div class="mb-3">
                                        <input type="radio" wire:model="division" value="1" id="A"
                                            class="focus:ring-primary-500 text-primary-600">
                                        <label for="A">A</label><br>
                                    </div>
                                    <div>
                                        <input type="radio" wire:model="division" value="2" id="B"
                                            class="focus:ring-primary-500 text-primary-600">
                                        <label for="B">B</label><br>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <input type="radio" wire:model="division" value="3" id="C"
                                            class="focus:ring-primary-500 text-primary-600">
                                        <label for="C">C</label><br>
                                    </div>
                                    <div>
                                        <input type="radio" wire:model="division" value="4" id="D"
                                            class="focus:ring-primary-500 text-primary-600">
                                        <label for="D">D</label><br>
                                    </div>
                                </div>

                            </div>

                            @error('division')
                            <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit"
                class="text-white bg-primary-600 hover:scale-105 duration-200 hover:bg-primary-800 focus:ring-2 focus:outline-none focus:ring-primary-600 font-medium rounded-md text-base md:w-56 px-5 py-2.5 text-center">حفظ</button>

        </form>
    </div>
</div>
