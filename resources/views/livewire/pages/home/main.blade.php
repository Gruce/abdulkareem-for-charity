{{-- <div>
    <div class=" grid grid-cols-2 grid-rows-8">

        {{-- Introduction
        <div class="col-span-1 row-span-3 bg-[#93A893] p-16">
            <h1 class="font-Alhurra font-bold text-7xl text-[#f2f2f2]">صندوق الاستاذ عبدالكريم الخيري</h1>
            <p class="font-Alhurra text-lg mt-10 leading-9 ">
                مبادرة ونشاط طلابي بحت ينطلق من طلبة كلية علوم الحـاسوب وتـكنلوجيا المعـلومات
                <br>
                الهدف منه رعاية الاعمال الخيرية داخل الكلية وتكون الاولوية في صرف الصندوق للطلبة
                <br>
                ذوي الدخل دون المحدود وبقية الاعمال الخيرية.



            </p>
            <div class="flex flex-row gap-80 mt-20">

                <div>
                    <a href="{{ route('donate') }}"
class="text-black text-base bg-[#f2f2f2] hover:bg-primary-600 hover:text-white focus:outline-none font-medium
hover:scale-110 duration-200 rounded-lg px-5 py-2.5 text-center mb-2">
تبرع الان
</a>
</div>


<div class="flex flex-col">
    <span class="text-center">
        <a href="{{ route('about') }}"
            class="  bg-[#f2f2f2] duration-200 hover:bg-primary-600 rounded-full px-6 py-2 text-center mb-2">
            <i class="fa-solid fa-info text-lg text-black"></i>
        </a>
    </span>
    <span class="mt-4 text-lg font-mono text-[#F2f2f2]">
        لمعرفة المزيد
    </span>
</div>

</div>
</div>

{{-- photo
        <div class="col-span-1 row-span-3 bg-[#548C62] relative h-[36rem]">
            
            <div class="absolute bottom-0 right-0 ">
                <div class="h-[34rem] w-[40rem] ">
                    <img class="h-full rounded-l-full" src="/img/home.jpg" alt="">
                </div>
            </div>
        </div>

        {{-- information 
        <div class="col-span-2 row-span-1 bg-[#548C62] ">@livewire('components.home.information')</div>
        
        {{-- Contect -
        <div class="col-span-2 row-span-4 bg-white text-9xl">04</div>
    </div>

</div> --}}
<div>
    <div class="flex flex-col h-screen">

        <!-- INTRO -->
        <div class="grid grid-cols-12 basis-4/12   justify-between ">

            <!-- Text -->
            <div class="col-span-5 pr-20 pt-16  ">
                <h1 class="text-secondary-900 text-8xl font-bold ">
                    تبرع بسهولة
                </h1>
                <p class="text-secondary-200 text-3xl mt-6">
                    مبادرة ونشاط طلابي بحت ينطلق من طلبة كلية علوم
                    <br>
                    الحـاسوب وتـكنلوجيا المعـلومات الهدف منه رعاية الاعمال
                    <br>
                    الخيرية داخل الكلية وتكون الاولوية في صرف الصندوق
                    <br>
                    للطلبة ذوي الدخل دون المحدود وبقية الاعمال الخيرية.

                </p>
                
            </div>
            

            {{-- Photo --}}
            
            <div class="col-span-7    ">
                <img src="/img/charity.png" class="w-11/12 h-auto m-auto">
            </div>
        </div>

        <div class="flex basis-2/12 ">@livewire('components.home.information')</div>
        <div class="flex basis-4/12 bg-red-600">تحت الصيانة </div>
        <div class="flex basis-2/12 bg-blue-600">تحت الصيانة </div>
    </div>
</div>
