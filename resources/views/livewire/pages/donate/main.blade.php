<div class=" grid grid-cols-12 justify-between">
    <div class="basis-1/2 col-span-5 pt-2 text-center">
        <h1 class="text-secondary-900 text-6xl mr-10 font-bold ">
            طريقة التبرع
        </h1>
        <ul class="list-disc list-inside text-secondary-200 text-right mr-24 mt-5 text-2xl">
            <li class="py-2">يتم التبرع عن طريق شراء الاسهم</li>
            <li class="py-2">سعر السهم 2000 دينار عراقي</li>
            <li class="py-2">ادخل عدد الاسهم التي تود شرائها</li>
            <li class="py-2">يتم دفع الاسهم نقداً لأحد الممثلين</li>
            <li class="py-2">تضاف الاسهم الى حسابك بعد التأكد من عملية الدفع </li>
        </ul>
        <form wire:submit.prevent="save" id="login_form" action="api_login"
            class="p-8 max-w-lg h-auto mx-auto rounded-3xl  mt-14  bg-white border border-gray-600">
            <div class="text-center ">
                <h3 class="text-3xl font-bold mb-5 ">ما نقص مال من صدقة</h3>
                <div class="">
                    <input wire:model="share" id="item_count" type="number" value="1"
                        class="block px-2.5 pb-2.5  pt-4 w-full h-14 text-lg text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none  focus:outline-none focus:ring-0  focus:border-primary-500 peer"
                        placeholder="ادخل عدد الاسهم" min=1 max=25 />
                </div>
                <button
                    class="text-white text-2xl mt-4 bg-primary-500 hover:bg-primary-800 border border-transparent hover:border-green-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-1 mr-2 mb-2"
                    type="submit">

                    <span class="" id="login_default_state">اشتري<span id="subtotal"></span></span>
                </button>
                <span class="text-sm"></span>
            </div>
        </form>
    </div>

    <div class="basis-1/2 col-span-7 ">
        <img src="/img/donate.png" class="w-3/4 h-auto m-auto">
    </div>


</div>
<div>
    <h2 class="text-center mt-32 font-semibold sm:text-4xl md:text-4xl lg:text-6xl xl:text-6xl">فريق الصندوق</h2>

    <p class="mt-10 mr-20 text-secondary-200 sm:text-base md:text-md lg:text-2xl">
        اسماء الفريق المسؤول عن استلام المبالغ داخل الكلية
    </p>

    <div class="grid grid-cols-4 gap-8 mr-32 mt-10">
        {{-- @foreach ($committees as $committee)
        <livewire:pages.donate.committee :committee="$committee" key="{{ now() }}" />
        @endforeach --}}
        <livewire:pages.donate.committee />
    </div>

    <div class="justify-center mt-4 xl:mt-10 mr-10 xl:mr-4 flex">
        <a href=""
            class="text-white text-base xl:text-xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-green-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2">
            <i class="fa-solid fa-plus"></i>
            إضافة عضو
        </a>
    </div>
</div>

<div>
