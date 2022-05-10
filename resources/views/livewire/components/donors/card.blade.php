<div>

    <div>
        <div class="shadow-sm shadow-gray-400 hover:shadow-gray-500 hover:shadow-lg p-4 w-full rounded-xl bg-gray-50 hover:bg-gray-200 transition duration-300">
            <div class="grid grid-cols-5 mb-5">
                <div class="col-span-2 flex flex-col">
                    <img src="{{ asset($photo ?? 'img/user.png') }}"
                        alt="" class=" rounded-full h-32 w-32" />
                    <h3 class=" text-xl mr-2 mt-4"> يملك {{ $shares  ?? 0}} سهماً </h3>
                </div>

                <div class="col-span-3">
                    <h3 class="mt-6 text-center font-bold text-2xl ">{{ $name }}</h3>
                    <h3 class="mt-2 font-Kufi text-center text-base @if($type == 4) hidden @endif">@if($type == 1) طالب @elseif($type == 2) تدريسي @else موظف @endif</h3>
                </div>
            </div>


            @admin
            <ul class="flex flex-row justify-start space-x-4 text-center text-lg gap-2" x-data="{ isOpen: false}">
                <button @click="isOpen = !isOpen"
                    class="text-white bg-primary-400 hover:bg-primary-500 focus:ring-1 focus:ring-cyan-300 font-medium rounded-xl text-sm px-5 py-1 text-center">
                    زيادة الاسهم
                </button>
                <form wire:submit.prevent="add" class="flex flex-row" x-show="isOpen">
                    <div>

                        <input wire:model="shares" type="number" id="shares"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-400 focus:border-blue-500 block h-12"
                            placeholder="ادخل عدد الاسهم">
                    </div>
                    <button type="submit"
                        class="mt-2 w-full text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:ring-cyan-300 font-medium rounded-sm text-sm px-2.5 py-1 text-center mr-2 mb-2">+
                    </button>
                </form>
            </ul>
            @endadmin
            @auth
            <h5 class="text-lg tracking-tight pt-5 ">البريد الالكتروني: {{ $email }}</h5>
            @endauth
            <p class="text-sm font-normal text-gray-500 ">انضم منذ: {{$date}}</p>

        </div>

    </div>
</div>