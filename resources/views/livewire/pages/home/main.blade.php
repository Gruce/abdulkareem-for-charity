<div>
    <div class="flex flex-col h-screen">

        <!-- INTRO -->
        <div class="grid grid-cols-12 basis-4/12   justify-between ">
            <!-- Text -->
            <div class="col-span-5 pr-20 pt-16  ">
                <h1 class="text-secondary-900 text-7xl font-bold ">
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
                <img src="/img/charity.png" class="w-10/12 h-auto m-auto">
            </div>
        </div>

        {{-- information --}}
        <div class="flex basis-2/12 justify-center mt-14">@livewire('components.home.information')</div>

        {{-- Cases --}}
        <div class="flex basis-4/12 pr-20 pt-16">
            <span class="text-secondary-900 text-6xl font-bold ">
                اخر الحالات
            </span>
            <div class="my-20 flex gap-6">
                @livewire('components.case.card')
            </div>

        </div>

        {{-- Work for --}}
        <div class="flex basis-2/12  pr-20 pt-16">
            <span class="text-secondary-900 text-6xl font-bold ">
                نحن نعمل لأجل
            </span>
            <div class="my-20 flex gap-6 justify-center">
                @livewire('components.home.information',['state' => 1])
            </div>
        </div>
    </div>
</div>
