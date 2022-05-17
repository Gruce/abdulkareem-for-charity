<div>
    <div class="flex flex-col h-screen">

        <!-- INTRO -->
        <div class="grid grid-cols-12 basis-4/12   justify-between ">
            <!-- Text -->
            <div class="col-span-5 pr-24 pt-20  ">
                <h1 class="text-secondary-900 text-6xl font-bold ">
                    صندوق الكريم
                </h1>
                <p class="text-secondary-200 text-2xl mt-6">
                    مبادرة ونشاط طلابي بحت ينطلق من طلبة كلية علوم
                    <br>
                    الحـاسوب وتـكنلوجيا المعـلومات الهدف منه رعاية الاعمال
                    <br>
                    الخيرية داخل الكلية وتكون الاولوية في صرف الصندوق
                    <br>
                    للطلبة ذوي الدخل دون المحدود وبقية الاعمال الخيرية.
                </p>
                <div class="mt-10 mr-4 flex gap-5">
                    <a href="{{ route('donate') }}"
                        class="text-white text-2xl hover:scale-110 duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">تبرع
                        الان</a>
                    <a href="{{ route('cases') }}"
                        class="hover:text-white text-2xl hover:scale-110 duration-200 hover:bg-primary-500 bg-white  border hover:border-transparent border-green-500 text-primary-500 focus:ring-4 focus:ring-primary-300  rounded-lg  px-5 py-2.5 mr-2 mb-2 ">الحالات</a>
                </div>
            </div>
            {{--Photo--}}

            <div class="col-span-7">
                <img src="/img/charity.png" class="w-10/12 h-auto m-auto">
            </div>
        </div>

        {{--information--}}
        <div class="flex basis-2/12 justify-center mt-14">@livewire('components.home.information')</div>

        {{--Cases--}}
        <div class=" basis-4/12 pr-24 pt-16">
            <span class="text-secondary-900 text-6xl font-bold ">
                اخر الحالات
            </span>
            <div class="my-20 flex gap-6">
                @foreach ($events as $event )
                @livewire('components.case.card',['event'=>$event])
                @endforeach
            </div>
        </div>

        {{--Work for--}}
        <div class="y basis-2/12  pr-20 pt-16">
            <span class="text-secondary-900 text-6xl font-bold ">
                نحن نعمل لأجل
            </span>
            <div class="my-20 flex gap-6 justify-center">
                    @livewire('components.home.information',['state' => true])
            </div>
        </div>
        
    </div>
</div>

