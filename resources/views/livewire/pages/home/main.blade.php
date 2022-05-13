
<div>
    <div class="container mx-auto grid grid-cols-2 grid-rows-8">

        {{-- Introduction --}}
        <div class="col-span-1  row-span-3 bg-[#0eb19b] p-16">
            <h1 class="font-Kufi text-7xl text-[#f2f2f2]">صندوق الاستاذ عبدالكريم الخيري</h1>
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
                        class="text-black text-base bg-[#f2f2f2] hover:bg-[#1c5f61] focus:outline-none hover:scale-110 duration-200 rounded-lg font-bold px-5 py-2.5 text-center hover:text-white mb-2">
                        تبرع الان
                    </a>
                </div>
                <div class="flex flex-col ">
                    <span class="text-center">
                        <a href="{{ route('about') }}"
                            class="bg-[#f2f2f2] duration-200 hover:bg-[#369093] rounded-full px-5 py-2 text-center mb-2">
                            <i class="fa-solid fa-info text-2xl text-black"></i>
                        </a>
                    </span>
                    <span class="mt-4 text-lg font-mono">
                        لمعرفة المزيد
                    </span>
                </div>

            </div>
        </div>

        {{-- photo --}}
        <div class="col-span-1 row-span-3 bg-[#f2f2f2] relative h-[36rem]">
            <ul class="flex gap-12 p-5 justify-center text-black text-md">
                <li>
                    <a href="{{ route('about') }}">عن الصندوق </a>
                </li>
                <li>
                    <a href="/">.</a>
                </li>
                <li>
                    <a href="{{ route('donors') }}">المتبرعين </a>
                </li>
                <li>
                    <a href="/">.</a>
                </li>
                <li>
                    <a href="{{ route('cases') }}"> الحالات</a>
                </li>
            </ul>
            <div class="absolute bottom-0 right-0 ">
                <div class="h-[32rem] w-[36rem] ">
                    <img class="h-full rounded-l-full" src="/img/home.jpg" alt="">
                </div>
            </div>
        </div>

        {{-- information --}}
        <div class="col-span-2 row-span-1 bg-[#f2f2f2] ">@livewire('components.home.information')</div>

        {{-- Contect --}}
        <div class="col-span-2 row-span-4 bg-tertiary-100 text-9xl">04</div>
    </div>
</div>
