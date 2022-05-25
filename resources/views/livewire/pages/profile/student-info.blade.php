<div>
    <div class="px-4 pt-4">
        <form action="#" class="flex flex-col space-y-8" wire:submit.prevent="edit">

            <div class="p-2">
                <h3 class="text-2xl font-semibold text-primary-700">معلومات الطالب</h3>
                <hr class="w-1/2">
            </div>

            <div class="form-item">
                <label class="text-xl font-semibold mb-2">القسم</label>
                <div class="text-base leading-7">
                    <input type="radio" wire:model="department" value="1" id="CS">
                    <label for="CS">علوم الحاسوب</label><br>

                    <input type="radio" wire:model="department" value="2" id="IT">
                    <label for="IT">نظم المعلومات</label><br>
                </div>

                @error('department')
                    <span class="text-red-500 error">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl font-semibold mb-2">نوع الدراسة</label>

                    <div class="text-base leading-7">
                        <input type="radio" wire:model="study_type" value="1" id="morning">
                        <label for="morning">صباحي</label><br>

                        <input type="radio" wire:model="study_type" value="2" id="evening">
                        <label for="evening">مسائي</label><br>
                    </div>

                    @error('study_type')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl font-semibold mb-2">المرحلة</label>

                    <div class="text-base leading-7">
                        <input type="radio" wire:model="stage" value="1" id="first">
                        <label for="first">اولى</label><br>

                        <input type="radio" wire:model="stage" value="2" id="second">
                        <label for="second">ثانية</label><br>

                        <input type="radio" wire:model="stage" value="3" id="third">
                        <label for="third">ثالثة</label><br>

                        <input type="radio" wire:model="stage" value="4" id="fourth">
                        <label for="fourth">رابعة</label><br>
                    </div>

                    @error('stage')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl font-semibold mb-2">الشعبة</label>
                    <br>
                    <div class="text-base leading-7">
                        <input type="radio" wire:model="division" value="1" id="A">
                        <label for="A">A</label><br>

                        <input type="radio" wire:model="division" value="2" id="B">
                        <label for="B">B</label><br>

                        <input type="radio" wire:model="division" value="3" id="C">
                        <label for="C">C</label><br>

                        <input type="radio" wire:model="division" value="4" id="D">
                        <label for="D">D</label><br>

                        <input type="radio" wire:model="division" value="5" id="E">
                        <label for="E">E</label><br>
                    </div>

                    @error('division')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit"
                class="text-white bg-primary-600 hover:scale-105 duration-200 hover:bg-primary-800 focus:ring-2 focus:outline-none focus:ring-primary-600 font-medium rounded-md text-base w-40 px-5 py-2.5 text-center">ارسل</button>

        </form>
    </div>
</div>