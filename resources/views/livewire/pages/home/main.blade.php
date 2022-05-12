<div>
    {{-- @guest
    <livewire:pages.home.guest.main />
    @endguest

    @user
    User
    @enduser

    @admin
    <livewire:pages.home.admin.main />
    @endadmin --}}

    <div class="container mx-auto grid grid-cols-2 grid-rows-8">
        <div class="col-span-1 row-span-3 bg-stone-300 p-16">
            <h1 class=" font-bold text-4xl text-primary-500">صندوق الاستاذ عبدالكريم الخيري</h1>
            <p class="font-semibold text-lg mt-10 leading-9 text-gray-600">
                مبادرة ونشاط طلابي بحت ينطلق من طلبة كلية علوم الحـاسوب وتـكنلوجيا المعـلومات
                <br>
                الهدف منه رعاية الاعمال الخيرية داخل الكلية وتكون الاولوية في صرف الصندوق للطلبة
                <br>
                ذوي الدخل دون المحدود وبقية الاعمال الخيرية.
                <span>
                    <a href="{{ route('about') }}" class="font-bold text-primary-500">
                        للمزيد من التفاصيل اضغط هنا
                    </a>
                </span>

            </p>
            <div class="mt-20">
                <p class="mb-5 text-primary-500 text-2xl font-semibold">
                    من اجل أستمرار العطاء اضغط هنا للتبرع
                    <a href="{{ route('donate') }}"
                        class="text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-4 focus:ring-primary-600 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2">
                        تبرع من هنا
                    </a>
                </p>
            </div>
        </div>

        <div class="col-span-1 row-span-3 bg-secondary-300 relative h-[36rem]">

            <div class="absolute bottom-0 right-0  ">
                <div class="h-[30rem] w-[40rem] ">
                    <img class="h-full" src="/img/home.jpg" alt="">
                </div>
            </div>
        </div>
        

        <div class="col-span-2 row-span-1 bg-primary-800 ">@livewire('components.home.information')</div>
        <div class="col-span-2 row-span-4 bg-purple-200 text-9xl">04</div>
    </div>


</div>