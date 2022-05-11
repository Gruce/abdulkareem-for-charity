<div>
    @forelse ($events as $item)
    <div class="rounded-t-lg  bg-white w-full hover:bg-gray-50 ">
        <a href="#!">
            <img class="rounded-t-lg" src="{{ asset($item->image_path) }}" alt="" />
        </a>
        <div class="p-6">
            <div class="flex justify-between">
                <h5 class="text-gray-900 text-xl font-medium mb-2"> {{ $item->title }}</h5>
                @admin
                    <div>
                        <a wire:click="confirm({{$item->id}})">
                            <i class="text-red-600 fa-solid fa-trash"></i>
                        </a>

                        <a href={{route('edit-case', ['case_id'=> $item->id])}}>
                            <i class="text-green-500 fa-solid fa-pen-to-square"></i>
                        </a>
                    </div>
                @endadmin
            </div>
            <div class=" xs:28">
                <p class="text-gray-700 text-base mb-4">
                    {{ $item->description }}
                </p>
                <p>هدف الحملة : {{$item->target}} IQ</p>
            </div>
            <a href="#!" class="text-primary-500 hover:text-primary-500 transition duration-300 ease-in-out mb-4"> عرض
                التفاصيل</a>
        </div>
        <div class="w-full  ">
            <div class="bg-primary-500 text-xs font-medium text-gray-700 text-center p-0.5 leading-none rounded-b"
                style="width: 100%"> {{$item->received_price}}</div>
        </div>
    </div>
    @empty
    <div class="">
    لايوجد حالات
    </div>
    @endforelse


</div>
