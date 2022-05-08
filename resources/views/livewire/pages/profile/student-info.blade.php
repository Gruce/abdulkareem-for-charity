<div>

    <div class="px-4 pt-4">
        <form action="#" class="flex flex-col space-y-8"  wire:submit.prevent="edit">

            <div>
                <h3 class="text-2xl font-semibold">المعلومات الاساسية</h3>
                <hr>
            </div>

            <div class="form-item">
                <label class="text-xl ">القسم</label>
                <select  wire:model="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
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
                    <select wire:model="study_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="1">صباحي</option>
                        <option value="2">مسائي  </option>
                    </select>
                    @error('study_type')
                    <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl ">المرحلة</label>
                    <select wire:model="stage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="1">الاولى</option>
                        <option value="2">الثانية  </option>
                        <option value="3">الثالثة</option>
                        <option value="4">الرابعة  </option>
                    </select>
                    @error('stage')
                    <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl ">الشعبة</label>
                    <select   wire:model="division" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="1">A</option>
                        <option value="2">B  </option>
                        <option value="3">C</option>
                        <option value="4">D  </option>
                    </select>
                    @error('division')
                    <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button  type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

        </form>
    </div>

</div>