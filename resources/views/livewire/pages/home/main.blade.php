<div>
    <div class="container mx-auto grid grid-cols-2 grid-rows-8">
        <div class="col-span-1 row-span-3 bg-[#EDF7DA] p-16">
            <h1 class="font-Kufi text-7xl text-primary-500">صندوق الاستاذ عبدالكريم الخيري</h1>
            <p class="font-bold font-IBM text-lg mt-10 leading-9 text-gray-800">
                مبادرة ونشاط طلابي بحت ينطلق من طلبة كلية علوم الحـاسوب وتـكنلوجيا المعـلومات
                <br>
                الهدف منه رعاية الاعمال الخيرية داخل الكلية وتكون الاولوية في صرف الصندوق للطلبة
                <br>
                ذوي الدخل دون المحدود وبقية الاعمال الخيرية.


            </p>
            <div class="flex flex-row gap-80 mt-20">
                <p class="mb-5 text-primary-500 text-2xl font-semibold">

                    <a href="{{ route('donate') }}"
                        class="text-white bg-primary-300 hover:bg-primary-600 focus:outline-none font-medium hover:scale-110 duration-200 rounded-lg text-sm px-5 py-2.5 text-center mb-2">
                        تبرع الان
                    </a>
                </p>
                <span>
                    <a href="{{ route('about') }}"
                        class=" bg-primary-300 duration-200 hover:bg-primary-600 rounded-full px-5 py-2">
                        <i class="fa-solid fa-info text-2xl"></i>
                    </a>
                </span>
            </div>
        </div>
        {{-- --}} {{-- --}} {{-- --}} {{-- --}}
        <div class="col-span-1 row-span-3 bg-[#A1D6B5] relative h-[36rem]">
            <ul class="flex gap-12 p-10 justify-center">
                <li>
                    <a href="/">عن الصندوق </a>
                </li>
                <li>
                    <a href="/">المتبرعين </a>
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


        <div class="col-span-2 row-span-1 bg-[#61BA9C] ">@livewire('components.home.information')</div>
        <div class="col-span-2 row-span-4 bg-[#EDF7DA] text-9xl">04</div>
    </div>


</div>