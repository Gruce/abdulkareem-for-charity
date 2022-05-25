<div class=" grid grid-cols-12 justify-between">
    <div class="basis-1/2 col-span-5 pt-2 pr-24 ">
        <h1 class="text-secondary-900 text-6xl font-bold">
            {{ $title }}
        </h1>
        <div class="w-full  text-center mt-10">
            <div class="w-full bg-gray-300 rounded-full">
                <div class="bg-primary-500 text-xs font-medium text-blue-100 text-center h-2.5 p-0.5 leading-none rounded-full"
                    style="width:{{ ($received_price * 100) / $target }}%"></div>
            </div>
            <div class="flex justify-between px-3 mt-2 text-xl text-secondary-200">
                <div>الهدف 1,000,000</div>
                <div>( 75% )</div>
                <div>الواصل 750,000</div>
            </div>
            <div class="h-0.5 w-full rounded-full bg-gray-300 my-7 "></div>
        </div>
        <div class="text-xl text-gray-600">
            {{ $description ?? 'لا يوجد وصف' }} 
        </div>
        <div class="mt-4 xl:mt-10 mr-10 xl:mr-4 flex gap-5">
            <a href="{{ route('cases') }}"
                class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white border hover:border-transparent border-green-500 text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">رجوع</a>
            <a href="{{ route('donate') }}"
                class="text-white text-base xl:text-2xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">تبرع
                الان</a>
        </div>
    </div>

    <div class="basis-1/2 col-span-7 rounded-3xl">
        <img src="{{ asset($image_path ?? 'img/caseImage.webp') }}" class="w-3/4 h-auto my-20 border-4 border-primary-500 rounded-3xl m-auto">
    </div>
</div>
