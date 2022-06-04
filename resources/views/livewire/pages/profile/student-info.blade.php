{{-- <div>
    <div class="px-4 pt-4">
        <form action="#" class="flex flex-col space-y-8" wire:submit.prevent="edit">

            <div class="p-2">
                <h3 class="text-2xl font-semibold text-primary-500">معلومات الطالب</h3>
                <hr class="w-2/3">
            </div>


            <div class="form-item">
                <div class="grid grid-cols-2">
                    <div class="grid col-span-1">
                        <label class="text-xl font-semibold mb-2">القسم</label>

                        <div class="text-base leading-7 ">
                            <input type="radio" wire:model="department" value="1" id="CS" class="focus:ring-primary-500 text-primary-600">
                            <label for="CS">علوم الحاسوب</label><br>

                            <input type="radio" wire:model="department" value="2" id="IT" class="focus:ring-primary-500 text-primary-600">
                            <label for="IT">نظم المعلومات</label><br>
                        </div>

                        @error('department')
                            <span class="text-red-500 error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="grid col-span-1">
                        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                            <div class="form-item w-full">
                                <label class="text-xl font-semibold mb-2">نوع الدراسة</label>

                                <div class="text-base leading-7">
                                    <input type="radio" wire:model="study_type" value="1" id="morning" class="focus:ring-primary-500 text-primary-600">
                                    <label for="morning">صباحي</label><br>

                                    <input type="radio" wire:model="study_type" value="2" id="evening" class="focus:ring-primary-500 text-primary-600">
                                    <label for="evening">مسائي</label><br>
                                </div>

                                @error('study_type')
                                    <span class="text-red-500 error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-2">
                <div class="grid col-span-1">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                        <div class="form-item w-full">
                            <label class="text-xl font-semibold mb-2">المرحلة</label>

                            <div class="text-base leading-7">
                                <input type="radio" wire:model="stage" value="1" id="first" class="focus:ring-primary-500 text-primary-600">
                                <label for="first">اولى</label><br>

                                <input type="radio" wire:model="stage" value="2" id="second" class="focus:ring-primary-500 text-primary-600">
                                <label for="second">ثانية</label><br>

                                <input type="radio" wire:model="stage" value="3" id="third" class="focus:ring-primary-500 text-primary-600">
                                <label for="third">ثالثة</label><br>

                                <input type="radio" wire:model="stage" value="4" id="fourth" class="focus:ring-primary-500 text-primary-600">
                                <label for="fourth">رابعة</label><br>
                            </div>

                            @error('stage')
                                <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="grid col-span-1">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                        <div class="form-item w-full">
                            <label class="text-xl font-semibold mb-2">الشعبة</label>
                            <br>

                            <div class="text-base leading-7">
                                <input type="radio" wire:model="division" value="1" id="A" class="focus:ring-primary-500 text-primary-600">
                                <label for="A">A</label><br>

                                <input type="radio" wire:model="division" value="2" id="B" class="focus:ring-primary-500 text-primary-600">
                                <label for="B">B</label><br>

                                <input type="radio" wire:model="division" value="3" id="C" class="focus:ring-primary-500 text-primary-600">
                                <label for="C">C</label><br>

                                <input type="radio" wire:model="division" value="4" id="D" class="focus:ring-primary-500 text-primary-600">
                                <label for="D">D</label><br>

                            </div>

                            @error('division')
                                <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit"
                class="text-white bg-primary-600 hover:scale-105 duration-200 hover:bg-primary-800 focus:ring-2 focus:outline-none focus:ring-primary-600 font-medium rounded-md text-base w-40 px-5 py-2.5 text-center">ارسل</button>

        </form>
    </div>
</div> --}}


<div>
    <div class="px-4 pt-4 mb-5">
        <form action="#" class="flex flex-col space-y-2" wire:submit.prevent="edit">

            <div class="p-2">
                <h3 class="text-2xl font-semibold text-primary-500">معلومات الطالب</h3>
                <hr class="w-full">
            </div>

            <div class="form-item">
                <div class="grid col-span-1">
                    <div class="text-base leading-7 ">
                        <select wire:model="department"  name="" id="department" class="bg-gray-50 px-7 border border-primary-400 text-sm w-full focus:ring-primary-600 focus:border-primary-500  block p-2.5 rounded-md mt-2">
                            <option value="0">القسم</option>
                            <option value="1">علوم الحاسوب</option>
                            <option value="2">نظم المعلومات</option>
                        </select>
                    </div>

                    @error('department')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-item">
                <div class="grid col-span-1">
                    <div class="text-base leading-7 ">
                        <select wire:model="study_type"  name="" id=""class="bg-gray-50 px-7 border border-primary-400 text-sm w-full focus:ring-primary-600 focus:border-primary-500  block p-2.5 rounded-md mt-2">
                            <option value="0">نوع الدراسة</option>
                            <option value="1">صباحي</option>
                            <option value="2">مسائي</option>
                        </select>
                    </div>

                    @error('study_type')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="form-item">
                <div class="grid col-span-1">
                    <div class="text-base leading-7 ">
                        <select wire:model="stage"  name="" id=""class="bg-gray-50 px-7 border border-primary-400 text-sm w-full focus:ring-primary-600 focus:border-primary-500  block p-2.5 rounded-md mt-2">
                            <option value="0">المرحلة</option>
                            <option value="1">اولى</option>
                            <option value="2">ثانية</option>
                            <option value="3">ثالثة</option>
                            <option value="4">رابعة</option>
                        </select>
                    </div>

                    @error('stage')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="form-item">
                <div class="grid col-span-1">
                    <div class="text-base leading-7 ">
                        <select wire:model="division"  name="" id=""class="bg-gray-50 px-7 border border-primary-400 text-sm w-full focus:ring-primary-600 focus:border-primary-500  block p-2.5 rounded-md mt-2">
                            <option value="0">الشعبة</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                        </select>
                    </div>

                    @error('division')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </form>
    </div>
</div>