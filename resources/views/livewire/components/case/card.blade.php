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
                            <i class="text-xl text-red-500 fa-solid fa-trash hover:scale-110 duration-200 hover:text-red-600"></i>
                        </a>

                        <a href="#">
                            <i class="text-xl text-green-500 fa-solid fa-pen-to-square hover:scale-110 hover:rotate-12 duration-200 hover:text-green-600"></i>
                        </a>
                    </div>
                @endadmin
            </div>
            <div class=" xs:28">
                <p class="text-gray-700 text-base mb-4">
                    {{ $item->description }}
                </p>
                <p>هدف الحملة : {{$item->target}} IQD</p>
                <p>المبلغ الواصل : {{$item->received_price}} IQD</p>
            </div>
        </div>
        <div class="w-full">
            <div class="bg-primary-500 text-xs font-medium text-gray-700 text-center p-1.5 leading-none rounded-b"
                style="width: 100%"></div>
        </div>
    </div>
    @empty
    <div class="">
    لايوجد حالات
    </div>
    @endforelse


</div>
