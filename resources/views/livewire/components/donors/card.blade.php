<div>

    <div>
        <div class=" p-4 w-full rounded-t-xl bg-gray-50 hover:bg-gray-200 transition duration-300">
            <div class="grid grid-cols-5 mb-5">
                <div class="col-span-2 flex flex-col">
                    <img src="{{ asset($photo ?? 'img/user.png') }}"
                        alt="" class=" rounded-full h-32 w-32" />
                    <h3 class=" text-xl mr-2 mt-4"> يملك {{ $shares  ?? 0}} سهما </h3>
                </div>

                <div class="col-span-3">
                    <h3 class="mt-6 text-center font-bold text-2xl ">{{ $name }}</h3>
                    <h3 class="mt-2 text-center text-base ">طالب</h3>
                </div>
            </div>



            <ul class=" flex justify-start space-x-4 text-center text-lg" x-data="{ isOpen: false}">
                <button @click="isOpen = !isOpen"
                    class="mt-2 ml-10 text-white bg-primary-400 hover:bg-primary-500 focus:ring-1 focus:ring-cyan-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    زيادة الاسهم
                </button>
                <form class="flex flex-row-reverse" x-show="isOpen">
                    <div>
                        <input type="number" id="shares"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block h-12 "
                            placeholder="ادخل عدد الاسهم التي تريد اضافتها">
                    </div>
                    <button type="submit"
                        class="mt-2 w-full text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:ring-cyan-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">اضافة
                    </button>
                </form>
            </ul>

            <h5 class="text-lg tracking-tight pt-5 text-center">البريد الالكتروني: jawad6686@gmail.com
            </h5>
            <p class="text-sm font-normal text-gray-500 text-center">تاريخ الانضمام: 2022/10/1</p>

        </div>

    </div>
</div>