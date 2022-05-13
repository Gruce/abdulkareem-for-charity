<div>
    <div class="container mx-auto grid grid-cols-2 grid-rows-8">

        {{-- Introduction --}}
        <div class="col-span-1 row-span-3 bg-tertiary-100 p-16">
            <h1 class="font-Kufi text-7xl text-[#D94C57]">صندوق الاستاذ عبدالكريم الخيري</h1>
            <p class="font-bold font-IBM text-lg mt-10 leading-9 text-gray-800">
                مبادرة ونشاط طلابي بحت ينطلق من طلبة كلية علوم الحـاسوب وتـكنلوجيا المعـلومات
                <br>
                الهدف منه رعاية الاعمال الخيرية داخل الكلية وتكون الاولوية في صرف الصندوق للطلبة
                <br>
                ذوي الدخل دون المحدود وبقية الاعمال الخيرية.



            </p>
            <div class="flex flex-row gap-80 mt-20">

                <div>
                    <a href="{{ route('donate') }}"
                        class="text-white text-base bg-secondary-500 hover:bg-secondary-800 focus:outline-none font-medium hover:scale-110 duration-200 rounded-lg  px-5 py-2.5 text-center mb-2">
                        تبرع الان
                    </a>
                </div>


                <div class="flex flex-col ">
                    <span class="text-center">
                        <a href="{{ route('about') }}"
                            class=" bg-secondary-500 duration-200 hover:bg-secondary-800 rounded-full px-5 py-2  text-center mb-2">
                            <i class="fa-solid fa-info text-2xl text-white"></i>
                        </a>
                    </span>
                    <span class="mt-4 text-lg font-mono">
                        لمعرفة المزيد
                    </span>
                </div>

            </div>
        </div>

        {{-- photo --}}
        <div class="col-span-1 row-span-3 bg-primary-300 relative h-[36rem]">
            <ul class="flex gap-12 p-10 justify-center text-gray-900">
                <li>
                    <a href="/">عن الصندوق </a>
                </li>
                <li>
                    <a href="/">.</a>
                </li>
                <li>
                    <a href="/">المتبرعين </a>
                </li>
                <li>
                    <a href="/">.</a>
                </li>
                <li>
                    <a href="/"> الحالات</a>
                </li>
            </ul>
            <div class="absolute bottom-0 right-0 ">
                <div class="h-[30rem] w-[36rem] ">
                    <img class="h-full rounded-l-full" src="/img/home.jpg" alt="">
                </div>
            </div>
        </div>

        {{-- information --}}
        <div class="col-span-2 row-span-1 bg-primary-300 ">@livewire('components.home.information')</div>
        
        {{-- Contect --}}
        <div class="col-span-2 row-span-4 bg-tertiary-100 text-9xl">04</div>
    </div>


</div>