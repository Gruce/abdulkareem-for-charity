<div class="bg-white">
    <div class="flex flex-col container mx-auto ">

        <!-- INTRO -->
        <div class="basis-4/12 grid grid-cols-1 xl:grid-cols-12 justify-between mt-10 md:mt-0 ">
            <!-- Text -->
            <div class=" xl:col-span-5  md:pt-12 lg:pt-8 xl:pt-10  ">
                <h1 class="text-secondary-900 text-4xl xl:text-5xl font-bold mr-6">
                    صندوق الكرم
                </h1>
                <p class="text-secondary-200 text-lg xl:text-2xl mt-6 px-6">
                    مبادرة ونشاط طلابي بحت ينطلق من طلبة كلية علوم الحـاسوب وتكنولوجيا المعـلومات الهدف منه رعاية
                    الأعمال الخيريّة داخل الكليّة وتكون الأولوية في صرف الصندوق للطلبة ذوي الدخل دون المحدود وبقيّة
                    الأعمال الخيريّة.</p>
                <div class="mt-4 xl:mt-10 mr-16 xl:mr-4 flex gap-5">
                    <a href="{{ route('donate') }}"
                        class="text-white text-base xl:text-2xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">تبرع
                        الان</a>
                    <a href="{{ route('cases') }}"
                        class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white  border hover:border-transparent border-green-500 text-primary-500 focus:ring-2 focus:ring-primary-300  rounded-lg  px-5 py-2.5 mr-2 mb-2 ">الحالات</a>
                </div>
            </div>
            {{--Photo--}}

            <div class=" xl:col-span-7 mt-6 xl:mt-0 ">
                <img src="/img/charity.png" class="w-10/12 h-auto m-auto">
            </div>
        </div>

        {{--information--}}
        <div class=" basis-2/12 mt-6 xl:mt-10  ">
            @livewire('pages.home.info')
        </div>

        {{-- Cases --}}
        <div class=" basis-4/12  mt-10 xl:mt-16">
            @if($events->count() > 0)
            <span class="text-secondary-900 text-4xl xl:text-5xl  font-bold pr-4  ">
                احدث الحالات
            </span>
            <div class="my-6 xl:my-12  grid  grid-cols-1 md:grid-cols-2  xl:grid-cols-4 gap-16 xl:gap-0 ">
                @foreach ($events as $event)
                @livewire('pages.cases.card', ['event' => $event], key($event->id . "hi"))
                @endforeach
            </div>
            @endif
        </div>

        {{--Work for--}}
        <div class=" basis-2/12  mt-10 xl:mt-12 ">
            <span class="text-secondary-900 text-4xl xl:text-5xl  font-bold pr-4  ">
                نحن نعمل لأجل
            </span>
            <div class="my-6 xl:my-12">
                @livewire('pages.home.activities')
            </div>
        </div>

    </div>
</div>