<div>

        <div class="px-4 pt-4">
            <form action="#" class="flex flex-col space-y-8"  wire:submit.prevent="edit">

                <div>
                    <h3 class="text-2xl font-semibold">المعلومات الاساسية</h3>
                    <hr>
                </div>

                <div class="form-item">
                    <label class="text-xl ">الاسم الكامل</label>
                    <input wire:model="name" type="text" value="{{$name}}" class="w-full appearance-none text-gray-900 text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200">
                    @error('name')
                    <span class="text-red-500 error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">



                    <div class="form-item w-full">
                        <label class="text-xl ">البريد الألكتروني</label>
                        <input wire:model="email" type="text" id="email"
                            class="w-full appearance-none text-gray-900  rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 ">
                            @error('email')
                            <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                    </div>
                </div>




                <div>
                    <h3 class="text-2xl font-semibold">معلومات الاتصال</h3>
                    <hr>
                </div>


                
                <div class="form-item">
                    <label class="text-xl ">رقم الهاتف</label>
                    <input wire:model="phone_number" type="text"
                        class="w-full appearance-none text-gray-900 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 ">
                        @error('phone_number')
                        <span class="text-red-500 error">{{ $message }}</span>
                        @enderror
                    </div>

                <button  type="submit" class="text-white bg-primary-300 hover:bg-primary-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>



            </form>
        </div>
    
</div>