<div>
    <div class="flex flex-col  container mx-auto">

        {{-- Intro --}}
        <div class="basis-1/4 grid lg:grid-cols-12 justify-between">

            <!-- Text -->
            <div class="lg:col-span-7 text-right xl:mt-20 md:px-12">
                <h1 class="text-secondary-900 text-2xl md:text-4xl xl:text-5xl font-bold ">
                    صندوق الكرم
                </h1>
                <p class="leading-10 mt-6 md:mt-10 text-base md:text-xl xl:text-2xl text-gray-700 font-Alhurrareg px-2    ">
                    هو مبادرة ونشاط طلابي بحت ينطلق من طلبة كلية علوم الحاسوب
                    وتكنلوجيا المعلومات في جامعة البصرة. الهدف منه رعاية الاعمال الخيرية داخل الكلية وتكون الاولوية في
                    صرف الصندوق
                    للطلبة
                    ذوي الدخل دون المحدود وبقية الاعمال الخيرية.

                    سمي بأسم صندوق الكرم نسبة الى الأستاذ الراحل عبد الكريم حسين.
                </p>

            </div>

            {{-- Photo --}}
            <div class="lg:col-span-5 ">
                <img src="/img/About1.png" class="w-full mt-6 lg:mt-0 md:w-3/4 h-auto m-auto">
            </div>

        </div>

        {{-- الأستاذ --}}
        <div class="basis-1/4 grid lg:grid-cols-12 justify-between mt-20 xl:mt-8">

            {{-- Photo --}}
            <div class="basis-1/2 lg:col-span-5 ">
                <img src="/img/About2.png" class="w-3/4 h-auto m-auto">
            </div>

            <!-- Text -->
            <div class="basis-1/2 lg:col-span-7 mt-4 xl:mt-40 text-right md:px-9">
                <h1 class="text-secondary-900 text-2xl md:text-4xl xl:text-5xl font-bold ">
                    من هو الأستاذ عبدالكريم
                </h1>
                <p class="leading-10 mt-10 text-base md:text-xl xl:text-2xl text-gray-700 font-Alhurrareg px-2  ">
                    الأستاذ عبد الكريم حسين السوداني (1974 - 2021) تدريسي في كلية علوم الحاسوب وتكنلوجيا المعـلومات
                    وشغل منصب مدير وحدة شؤون الطلبة سابقا
                    عُرف عنه فعل الخير والمشاركة في النشاطات الخيرية والاهتمام بطلبته وتشجيعهم فأحبه طلبته و ارادوا
                    ابقاء ذكر
                    أستاذهم حتى بعد ان تَوَفَّاه الله لذا بدأوا بأنشاء مجموعة من الاعمال الخيرية داخل الكلية وربطها بأسم
                    الأستاذ و أحد هذه الاعمال هذا الصندوق الخيري.
                </p>

            </div>

        </div>

        {{-- جمع التبرعات --}}
        <div class="basis-1/4 grid lg:grid-cols-12 justify-between mt-12 lg:mt-20">

            <!-- Text -->
            <div class="basis-1/2 lg:col-span-5 xl:mt-32  text-right md:px-9">
                <h1 class="text-secondary-900 text-2xl md:text-4xl xl:text-5xl font-bold ">
                    كيف يتم جمع التبرعات؟
                </h1>
                <p class="leading-10 mt-10 text-base md:text-xl xl:text-2xl text-gray-700 font-Alhurrareg px-2  ">
                    يعمل الصندوق على نظام الأسهم حيث يمتلك كل متبرع عدد من الاسهم تدل على حجم تبرعاته
                    وسيظهر عدد اسهمه في صفحة<a href="{{ route('donors') }}" class="text-primary-500"> المتبرعين </a>
                    سعر السهم في الصندوق هو 2000 د.ع ثابت
                    ويتم شراء الأسهم من خلال صفحة
                    <a href="{{ route('donate') }}" class="text-primary-500">التبرع</a>
                    .
                </p>



            </div>

            {{-- Photo --}}
            <div class="basis-1/2 lg:col-span-7 ">
                <img src="/img/About3.png" class="w-full md:w-3/4 mt-10 h-auto m-auto">
            </div>

        </div>

        {{-- Team --}}
        <div class="basis-1/4 flex flex-col mt-20 py-10 space-y-40 xl:px-32">

            {{-- Developers --}}
            <div>
                <h1 class="text-secondary-900 text-2xl md:text-4xl xl:text-5xl font-bold text-center mb-20">
                    فريق المطورين
                </h1>

                {{-- Cards --}}
                <div class="flex flex-wrap gap-2 justify-center ">
                    @foreach ($developers as $team)
                    <livewire:pages.about.card :team="$team" key="{{ now() }}" />
                    @endforeach
                </div>
            </div>

            {{-- Managers --}}
            <div>
                <h1 class="text-secondary-900 text-2xl md:text-5xl font-bold text-center mb-20">
                    فريق الأداريين
                </h1>
                {{-- Cards --}}
                <div class="flex flex-wrap gap-2 justify-center">
                    @foreach ($managers as $team)
                    <livewire:pages.about.card :team="$team" key="{{ now() }}" />
                    @endforeach
                </div>
            </div>



        </div>


    </div>
</div>