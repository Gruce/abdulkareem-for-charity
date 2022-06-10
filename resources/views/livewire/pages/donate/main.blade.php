<div>
    <div class="flex flex-col px-4 py-8 md:px-0 md:py-0">
        <div class="basis-1/4 grid lg:grid-cols-12 justify-between">
            <div class="sm:grid-cols-12 lg:col-span-5 pt-2 text-center">
                <h1 class="text-secondary-900 text-4xl md:text-4xl xl:text-5xl font-bold">
                    طريقة التبرع
                </h1>
                <ul
                    class="list-disc list-inside text-secondary-200 text-right mt-5  text-xl md:text-xl md:mr-3 xl:text-2xl xl:mr-20">
                    <li class="py-2">يتم التبرع عن طريق شراء الاسهم</li>
                    <li class="py-2">سعر السهم 2000 دينار عراقي</li>
                    <li class="py-2">ادخل عدد الاسهم التي تود شرائها</li>
                    <li class="py-2">يتم دفع الاسهم نقداً لأحد الممثلين</li>
                    <li class="py-2">تضاف الاسهم الى حسابك بعد التأكد من عملية الدفع </li>
                </ul>
                <form wire:submit.prevent="save" id="login_form" action="api_login"
                    class="p-8 w-11/12 h-60 mx-auto rounded-3xl mt-10 bg-white border border-gray-600 md:max-w-lg">
                    <div class="text-center ">
                        <h3 class="text-2xl xl:text-3xl font-bold mb-5 ">ما نقص مال من صدقة</h3>
                        <div class="">
                            <input wire:model="share" id="item_count" type="number" value="1"
                                class="block px-2.5 pb-2.5  pt-4 w-full h-14 text-lg text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none  focus:outline-none focus:ring-0  focus:border-primary-500 peer"
                                placeholder="ادخل عدد الاسهم" min=1 />
                            @error('share')
                                <span class="error text-red-700 rounded-lg mt-3">يجب ملئ هذا الحقل</span>
                            @enderror
                        </div>
                        <button
                            class="text-white text-xl xl:text-2xl mt-4 bg-primary-500 hover:bg-primary-800 border border-transparent hover:border-green-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-1 mr-2 mb-2"
                            type="submit">

                            <span class="" id="login_default_state">اشتري<span
                                    id="subtotal"></span></span>
                        </button>
                        <span class="text-sm"></span>
                    </div>
                </form>
            </div>

            <div class="basis-1/2 lg:col-span-7 mt-5">
                <img src="/img/donate.png" class="w-3/4 h-auto m-auto">
            </div>
        </div>
        {{-- card --}}
        <h3 class="text-secondary-900 text-3xl md:text-3xl xl:text-4xl font-bold mt-10 mr-28">
            فريق الصندوق
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 mt-2">
            @forelse($admins as $item)
                <livewire:pages.donate.card :item="$item" key="{{ now() }}" />
            @empty
                <div class="text-2xl font-medium text-gray-700">
                    لايوجد فريق
                </div>
            @endforelse
        </div>
    </div>
