<div>
    <div class="flex flex-col absolute h-screen">

        <!-- INTRO -->
        <div class="grid grid-cols-1 xl:grid-cols-12 basis-4/12 justify-between ">
            <!-- Text -->
            <div class=" xl:col-span-5 xl:pr-24 xl:pt-20  ">
                <h1 class="text-secondary-900 text-4xl xl:text-6xl font-bold ">
                    صندوق الكريم
                </h1>
                <p class="text-secondary-200 text-lg xl:text-2xl mt-6">
                    مبادرة ونشاط طلابي بحت ينطلق من طلبة كلية علوم

                    الحـاسوب وتـكنلوجيا المعـلومات الهدف منه رعاية الاعمال

                    الخيرية داخل الكلية وتكون الاولوية في صرف الصندوق

                    للطلبة ذوي الدخل دون المحدود وبقية الاعمال الخيرية.
                </p>
                <div class="mt-4 xl:mt-10 mr-10 xl:mr-4 flex gap-5">
                    <a href="{{ route('donate') }}"
                        class="text-white text-base xl:text-2xl hover:scale-110 duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">تبرع
                        الان</a>
                    <a href="{{ route('cases') }}"
                        class="hover:text-white text-base xl:text-2xl hover:scale-110 duration-200 hover:bg-primary-500 bg-white  border hover:border-transparent border-green-500 text-primary-500 focus:ring-4 focus:ring-primary-300  rounded-lg  px-5 py-2.5 mr-2 mb-2 ">الحالات</a>
                </div>
            </div>
            {{--Photo--}}

            <div class=" xl:col-span-7 mt-6 xl:mt-0 ml-6 ">
                <img src="/img/charity.png" class="w-10/12 h-auto m-auto">
            </div>
        </div>

        {{--information--}}
        <div class=" basis-2/12 mt-6 xl:mt-14 justify-around grid grid-cols-3 ml-10">
            @livewire('components.home.information')</div>

        {{-- Cases --}}
        <div class=" basis-4/12 xl:px-20 xl:ml-8 mt-10 xl:mt-16">
            <span class="text-secondary-900 text-4xl xl:text-6xl font-bold ">
                اخر الحالات
            </span>
            <div class="my-6 xl:my-20 ml-10 xl:ml-0 grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 ">
                @foreach ($events as $event)
                @livewire('components.case.card', ['event' => $event])
                @endforeach
            </div>
        </div>

        {{--Work for--}}
        <div class=" basis-2/12  mt-10 xl:mt-16 xl:ml-16">
            <span class="text-secondary-900 text-4xl xl:text-6xl  font-bold  xl:pr-20">
                نحن نعمل لأجل
            </span>
            <div class="my-6 xl:my-20 grid grid-cols-2 xl:grid-cols-5 gap-6 ">
                @livewire('components.home.information',['state' => true])
            </div>
        </div>

    </div>
</div>