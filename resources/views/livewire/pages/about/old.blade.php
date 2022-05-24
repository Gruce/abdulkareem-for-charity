


<div class="basis-1/4 grid grid-cols-12 justify-between mt-12">

    <!-- Text -->
    <div class="basis-1/2 col-span-5 pt-20  text-center">
        <h1 class="text-secondary-900 text-5xl font-bold ">
            كيف يتم جمع التبرعات؟
        </h1>
        <p class="leading-10 mt-10 text-xl text-gray-700 font-Alhurrareg px-1 md:px-9 text-right">
            يعمل الصندوق على نظام الأسهم حيث السهم الواحد = 2000 دينار
            <br>
            يتم شراء الأسهم من خلال النقر على 
            <a href="{{ route('donate') }}" class="text-primary-500">تبرع الان</a>
            إقرأ التعليمات الموجودة لشراء الأسهم 
            <br>
            يوجد أسفل صندوق شراء الأسهم اسماء الفريق المسؤول عن استلام المبالغ مع أرقام الهواتف
            <br>
            يمكنك تصفح الحالات و قراءة التفاصيل اكثر من خلال النقر على 
            <a href="{{ route('cases') }}" class="text-primary-500">الحالات</a>
        </p>

        <div class="mt-4 xl:mt-10 mr-10 xl:mr-4 flex gap-5">
            <a href="{{ route('donate') }}"
                class="text-white text-base xl:text-2xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">تبرع
                الان</a>
            <a href="{{ route('cases') }}"
                class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white  border hover:border-transparent border-green-500 text-primary-500 focus:ring-4 focus:ring-primary-300  rounded-lg  px-5 py-2.5 mr-2 mb-2 ">الحالات</a>
        </div>

    </div>

    {{-- Photo --}}
    <div class="basis-1/2 col-span-7 ">
        <img src="/img/About3.png" class="w-3/4 h-auto m-auto">
    </div>

</div>

<div class="basis-1/4 flex flex-col mt-20 py-10 space-y-40 px-32">

    {{-- Managers --}}
    <div>
        <h1 class="text-secondary-900 text-6xl font-bold text-center mb-20">
            فريق الأداريين
        </h1>
        {{-- Cards --}}
        <div class="grid grid-cols-4 gap-8 ">
            @foreach ($managers as $team)
            <livewire:pages.about.card :team="$team" key="{{ now() }}" />
            @endforeach
        </div>
    </div>

    {{-- Developers --}}
    <div>
        <h1 class="text-secondary-900 text-6xl font-bold text-center mb-20">
            فريق المطورين
        </h1>

        {{-- Cards --}}
        <div class="grid grid-cols-4 gap-8 ">
            @foreach ($developers as $team)
            <livewire:pages.about.card :team="$team" key="{{ now() }}" />
            @endforeach
        </div>
    </div>

</div>