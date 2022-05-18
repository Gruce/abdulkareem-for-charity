<!-- <div class="grid grid-cols-2">
    <div class="col-span-1 mr-20 mt-20">
        <div class="font-bold text-5xl text-primary-800 mb-10">
            بِسْمِ اللَّـهِ الرَّحْمَـٰنِ الرَّحِيمِ
        </div>
        <div class="font-IBM text-2xl font-semibold leading-10">
            من ذا الذي يقرض الله قرضاً حسناً فيضاعفه له أضعافاً كثيرةً
            <br>
            و الله يقبضُ ويبسطُ و إليه تُرجعون
        </div>
    </div>
    <div class="col-span-1 mt-10 ml-40">
        <section class="flex flex-col justify-start min-h-auto max-w-md mx-auto">
            <div class="p-6 bg-gray-100 rounded ">
                <div class="flex items-center justify-center font-black m-3 mb-12">

                    <h1 class="tracking-wide text-3xl text-gray-900">استنزل الرزق بالصدقة</h1>
                    <i class="fa-solid fa-heart h-10 w-10 mr-3 text-red-600 animate-pulse"></i>

                </div>
                <form wire:submit.prevent="save" id="login_form" action="api_login"
                    class="flex flex-col justify-center">

                    <div class="inline-flex items-center self-start">
                        أشتري
                    </div>
                    <div class="flex py-2">
                        <button type="button" onclick="minus()" class="bg-yellow-600 p-1.5 font-bold rounded">
                            <i class="fa-solid fa-minus w-4 h-4"></i>
                        </button>

                        <input wire:model="share" id="item_count" type="number" value="1"
                            class="w-full font-bold font-mono mx-1.5
                                block border border-gray-300 rounded-md text-sm shadow-sm
                                focus:outline-none
                                focus:border-primary-ring-primary-400
                                focus:ring-1
                                focus:ring-primary-300
                                focus:invalid:border-red-500  focus:invalid:ring-red-500">
                        <button type="button" onclick="plus()" class="bg-green-600 p-1.5 font-bold rounded">
                            <i class="fa-solid fa-plus w-4 h-4"></i>
                        </button>
                    </div>

                    <label class="text-sm font-medium">ملاحظة (اختياري)</label>
                    <textarea wire:model="note"
                        class="
                    mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400
                    focus:outline-none
                    focus:border-primary-ring-primary-400
                    focus:ring-1
                    focus:ring-primary-300
                    focus:invalid:border-red-500 focus:invalid:ring-red-500"
                        name="messages" placeholder="السهم الواحد = 2000 دينار عراقي"></textarea>
                    <button
                        class="px-4 py-1.5 rounded-md shadow-lg bg-gradient-to-r from-green-500 to-primary-600 font-medium text-gray-100 block transition duration-300"
                        type="submit">

                        <span id="login_default_state">تبرع<span id="subtotal"></span></span>
                    </button>
                </form>

            </div>

        </section>
    </div>

</div> -->


<div class="basis-1/4 grid grid-cols-12 justify-between mt-16">

    <!-- Text -->
    <div class="basis-1/2 col-span-5 pt-2  text-center">
        <h1 class="text-secondary-900 text-6xl mr-10 font-bold ">
            طريقة التبرع
        </h1>
        <ul class="list-disc list-inside text-secondary-200 text-right mr-24 mt-10 text-2xl">
            <li class="py-2">يتم التبرع عن طريق شراء الاسهم</li>
            <li class="py-2">سعر السهم 2000 دينار عراقي</li>
            <li class="py-2">ادخل عدد الاسهم التي تود شرائها</li>
            <li class="py-2">يتم دفع الاسهم نقداً لأحد الممثلين</li>
            <li class="py-2">تضاف الاسهم الى حسابك بعد التأكد من عملية الدفع </li>
        </ul>
        <div class="p-8 max-w-lg h-auto mx-auto rounded-3xl  mt-14  bg-white border border-gray-600">
            <div class="text-center ">
                <h3 class="text-3xl font-bold mb-5 ">ما نقص مال من صدقة</h3>
                <div class="">
                    <input type="number" id="floating_outlined"
                        class="block px-2.5 pb-2.5  pt-4 w-full h-14 text-lg text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none  focus:outline-none focus:ring-0  focus:border-primary-500 peer"
                        placeholder="ادخل عدد الاسهم" min=2 max=25 />
                </div>
                <div class="mt-8">
                    <a href=""
                        class="text-white text-2xl bg-primary-500 hover:bg-primary-800 border border-transparent hover:border-green-500  focus:ring-4 focus:ring-primary-300 rounded-lg px-5 py-1 mr-2 mb-2 ">
                        شراء الاسهم </a>
                </div>
                <span class="text-sm"></span>
            </div>
        </div>
    </div>

    {{-- Photo --}}
    <div class="basis-1/2 col-span-7 ">
        <img src="/img/donate.png" class="w-3/4 h-auto m-auto mt-16">
    </div>
</div>
