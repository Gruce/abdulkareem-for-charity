<div>

    <div class="px-4 pt-4">
        <form action="#" class="flex flex-col space-y-8" wire:submit.prevent="edit">

            <div class="p-2">
                <h3 class="text-2xl font-semibold">معلومات الطالب</h3>
                <hr>
            </div>

            <div class="form-item">
                <label class="text-xl">القسم</label>
                <select wire:model="department"
                    class="bg-gray-50 border border-gray-300  text-sm rounded-md focus:ring-primary-600 focus:border-primary-500 block ">
                    <option value="1">علوم الحاسوب</option>
                    <option value="2">نظم المعلومات </option>
                </select>
                @error('department')
                    <span class="text-red-500 error">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl ">نوع الدراسة</label>
                    <select wire:model="study_type"
                        class="bg-gray-50 border border-gray-300  text-sm rounded-md focus:ring-primary-600 focus:border-primary-500 block">
                        <option value="1">صباحي</option>
                        <option value="2">مسائي </option>
                    </select>
                    @error('study_type')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl ">المرحلة</label>
                    <select wire:model="stage"
                        class="bg-gray-50 border border-gray-300  text-sm rounded-md focus:ring-primary-600 focus:border-primary-500 block">
                        <option value="1">الاولى</option>
                        <option value="2">الثانية </option>
                        <option value="3">الثالثة</option>
                        <option value="4">الرابعة </option>
                    </select>
                    @error('stage')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl ">الشعبة</label>
                    <select wire:model="division"
                        class="bg-gray-50 border border-gray-300  text-sm rounded-md focus:ring-primary-600 focus:border-primary-500 block ">
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option>
                    </select>
                    @error('division')
                        <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit"
                class="text-white bg-primary-300 hover:scale-105 duration-200 hover:bg-primary-500 focus:ring-2 focus:outline-none focus:ring-primary-600 font-medium rounded-md text-sm w-40 px-5 py-2.5 text-center">ارسل</button>

        </form>
    </div>

</div>
