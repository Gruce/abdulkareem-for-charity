<div>

    <div>
        <div class=" p-4 w-full rounded-t-xl bg-gray-50 hover:bg-gray-100 transition duration-300">
            <div class="grid grid-cols-5 mb-5">
                <div class="col-span-2 flex flex-col">
                    <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1171&q=80"
                        alt="" class=" rounded-full h-32 w-32" />
                    <h3 class=" text-xl mr-2 mt-4"> يملك 20 سهما </h3>
                </div>

                <div class="col-span-3">
                    <h3 class="mt-6 text-center font-bold text-2xl ">محمد جواد كاظم</h3>
                    <h3 class="mt-2 text-center text-base ">طالب</h3>
                </div>
            </div>

            <ul class=" flex justify-start space-x-4 text-center text-lg" x-data="{ isOpen: false }">

                <button @click="isOpen = !isOpen"
                    class="m-2 text-white bg-primary-400 hover:bg-primary-500 focus:ring-1 focus:ring-cyan-300 font-medium rounded-full text-sm px-5 py-2.5 text-center ">
                    زيادة الاسهم
                </button>


                <form class="flex flex-row-reverse" x-show="isOpen">
                    <div>
                        <input type="number" id="shares"
                            class="py-5 bg-gray-50 border border-gray-300 ml-9 m-4 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block h-12 "
                            placeholder="ادخل عدد الاسهم التي تريد اضافتها">
                    </div>

                    <button type="submit"
                        class="text-white bg-primary-400 hover:bg-primary-500 focus:ring-1 focus:ring-cyan-300 font-medium rounded-full text-sm px-4 py-4  m-4">اضافة
                    </button>
                </form>
            </ul>

            <h5 class="text-lg tracking-tight pt-5 text-center">البريد الالكتروني: jawad6686@gmail.com
            </h5>
            <p class="text-sm font-normal text-gray-500 text-center">تاريخ الانضمام: 2022/10/1</p>

        </div>

    </div>
</div>
