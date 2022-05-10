<div>
    <div class="rounded-t-lg  bg-white w-full hover:bg-gray-50 ">
        <a href="#!">
            <img class="rounded-t-lg" src="{{ asset($image_path) }}" alt="" />
        </a>
        <div class="p-6">
            <div class="flex justify-between">
                <h5 class="text-gray-900 text-xl font-medium mb-2"> {{ $title }}</h5>
                @auth
                    <div>
                        <a wire:click="confirm({{$case}})">
                            <i class="fa-solid fa-trash"></i>
                        </a>
        
                        {{-- <a href="">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a> --}}
                    </div>
                @endauth
            </div>
            <div class=" xs:28">
                <p class="text-gray-700 text-base mb-4">
                    {{ $description }}
                </p>
                <p>هدف الحملة : {{$target}} IQ</p>
            </div>
            <a href="#!" class="text-primary-500 hover:text-primary-500 transition duration-300 ease-in-out mb-4"> عرض
                التفاصيل</a>
        </div>
        <div class="w-full  ">
            <div class="bg-primary-500 text-xs font-medium text-gray-700 text-center p-0.5 leading-none rounded-b"
                style="width: 100%"> {{$received_price}}</div>
        </div>
    </div>


</div>
