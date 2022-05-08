<div>

    <div class="px-4 pt-4">
        <form action="#" class="flex flex-col space-y-8"  wire:submit.prevent="edit">

            <div>
                <h3 class="text-2xl font-semibold">المعلومات الاساسية</h3>
                <hr>
            </div>

            <div class="form-item">
                <label class="text-xl ">القسم</label>
                <select  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="">علوم الحاسوب</option>
                    <option value="">نظم المعلومات </option>
                </select>
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                <div class="form-item w-full">
                    <label class="text-xl ">نوع الدراسة</label>
                    <select  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="">صباحي</option>
                        <option value="">مسائي  </option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">



                <div class="form-item w-full">
                    <label class="text-xl ">المرحلة</label>
                    <select  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="">الاولى</option>
                        <option value="">الثانية  </option>
                        <option value="">الثالثة</option>
                        <option value="">الرابعة  </option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">



                <div class="form-item w-full">
                    <label class="text-xl ">الشعبة</label>
                    <select  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="">A</option>
                        <option value="">B  </option>
                        <option value="">C</option>
                        <option value="">D  </option>
                    </select>
                </div>
            </div>
            <button  type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

        </form>
    </div>

</div>