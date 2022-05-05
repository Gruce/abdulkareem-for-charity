<div>
    {{-- Photo --}}
    <div class=" bg-[url('/img/ppp.JPG')]  bg-cover   bg-no-repeat bg-top bg-fixed max-w-9xl bg-end h-[32rem] ">

        <div class="grid pt-10 pb-10 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
            <div class="max-w-xs mt-8 mr-14 p-7">

                <span class="font-bold tracking-tight text-green-500 text-7xl text-fixed"> نحن نعيش السعادة عبر العطاء
                    لمن هو محتاج </span>
            </div>


        </div>
    </div>


    {{-- cards --}}
    <div class="grid  gap-8 mt-10 justify-center md:grid-cols-2  lg:grid-cols-3">

        @for ($i = 0; $i <= 2; $i++)
            <livewire:components.case.card />
        @endfor
    </div>
    <a href="#"
        class="inline-flex items-center py-2 px-3 text-lg font-medium text-center rounded-lg focus:ring-4 focus:outline-none text-gray-900 mt-8 hover:bg-gray-200">

        <i class="fa-solid fa-right-long mx-2"></i>
        المزيد من الحالات
    </a>



    {{-- Donation details --}}
    <div class="flex justify-around grid-cols-3 gap-4 bg-primary-500 mt-4 rounded">
        <div class="text-center p-9">
            <a href="#">
                <i
                    class="mb-3 bg-gray-50 rounded-full shadow-lg sm:text-2xl md:text-3xl lg:text-4xl sh-full hover:bg-gradient-to-r from-green-400 to-blue-200 p-7 fa-solid fa-hand-holding-dollar"></i>
                <h5 class="mb-2 font-bold tracking-tight sm:text-xl md:text-2xl lg:text-3xl ">500$</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 sm:text-xl md:text-2xl lg:text-3xl">عدد التبرعات الكلي.</p>
        </div>
        <div class="text-center p-9">
            <a href="#">
                <i
                    class="mb-3 bg-gray-50 rounded-full shadow-lg sh-full hover:bg-gradient-to-r from-green-400 to-blue-200 p-7 sm:text-2xl md:text-3xl lg:text-4xl fa-solid fa-handshake-simple"></i>
                <h5 class="mb-2 font-bold tracking-tight sm:text-xl md:text-2xl lg:text-3xl ">66</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 sm:text-xl md:text-2xl lg:text-3xl">عدد المتبرعين.</p>
        </div>
        <div class="text-center p-9">
            <a href="#">
                <i
                    class="mb-3 bg-gray-50 rounded-full shadow-lg sm:text-2xl sh-full hover:bg-gradient-to-r from-green-400 to-blue-200 p-7 md:text-3xl lg:text-4xl fa-solid fa-hand-holding-heart"></i>
                <h5 class="mb-2 font-bold tracking-tight sm:text-xl md:text-2xl lg:text-3xl ">33</h5>
            </a>

            <p class="mb-3 font-normal text-gray-700 sm:text-xl md:text-2xl lg:text-3xl"> الحالات التي تم علاجها.</p>
        </div>
    </div>

    {{-- Card --}}
    {{-- <div class="flex justify-between bg-white pr-11 ">
        <div class="container px-6 py-20 md:px-12 lg:px-20">
            <div class="items-center justify-center -space-y-4 md:flex md:space-y-0 md:-space-x-4 xl:w-10/12">
                <div class="relative z-10 -mx-4 group md:w-6/12 md:mx-0 lg:w-5/12">
                    <div aria-hidden="true"
                        class="absolute top-0 w-full h-full transition duration-500 bg-white shadow-xl bg-gradient-to-b from-pink-100 to-purple-200 rounded-2xl group-hover:scale-105 lg:group-hover:scale-110">
                    </div>
                    <div class="relative p-6 space-y-6 lg:p-8">
                        <a href="#">
                            <img class="w-full rounded-t-lg h-36 " src="/img/kid.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="relative group md:w-6/12 lg:w-7/12">
                    <div aria-hidden="true"
                        class="absolute top-0 w-full h-full transition duration-500 bg-white shadow-lg bg-gradient-to-b from-pink-100 to-purple-200 rounded-2xl group-hover:scale-105">
                    </div>
                    <div class="relative items-center p-6 pt-16 md:p-8 md:pl-12 md:rounded-r-2xl lg:pl-20 lg:p-16">
                        <div class="p-5 ">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">اجراء
                                    عملية جراحية</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                technology
                                acquisitions of 2021 so far, in reverse chronological order.</p>
                            <div class="w-full my-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                <div class="bg-blue-800 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                    style="width:45%"> 45%</div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <h5
                                        class="px-2 mb-2 font-bold tracking-tight text-gray-900 text-1xl dark:text-white">
                                        المبلغ : 1,000,000 د.ع</h5>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">
                                    عرض التفاصيل
                                </a>
                            </div>
                        </div> <button type="button"
                            class=" transition ease-in-out delay-170   hover:-translate-y-1 hover:scale-110  hover  focus:outline-none font-medium  text-xl text-w-4xl px-5 py-2.5 text-center inline-flex  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            المزيد من الحالات
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


</div>
