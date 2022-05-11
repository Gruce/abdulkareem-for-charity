<div>
     {{-- @forelse ($cases as $item)  --}}
    {{-- @if ($edit_id == $item->id) --}}
    <div class="rounded-t-lg  bg-white w-full hover:bg-gray-50 ">
        <a href="#!">
            <img class="rounded-t-lg" src="{{ asset($image_path) }}" alt="" />
        </a>
        <div class="p-6">
            <div class="flex justify-between">
                <h5 class="text-gray-900 text-xl font-medium mb-2"> {{ $title }}</h5>
                @auth
                <div>
                    <button wire:click="delete( {{ $cases->id }} )" class="mr-4">
                        <i class=" fa-solid fa-trash-can text-red-400 hover:text-red-600"></i>
                    </button>
                    <button wire:click="edit">
                        <i class="fa-solid fa-pen-to-square text-blue-400 hover:text-blue-600"></i>
                    </button>
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
        {{-- <div
            class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7 flex justify-end space-x-4">
            <button wire:click="save">
                <i class="fa-solid fa-check text-blue-400 hover:text-blue-600"></i>
            </button>
            <button wire:click="$set('edit_id', {{ null }})" class="mr-4">
                <i class=" fa-solid fa-angles-right text-red-400 hover:text-red-600"></i>
            </button>
        </div> --}}
    </div> 
    {{-- @else --}}
   
    {{-- @endif --}}
        {{-- @empty
        لا يوجد حالات
        @endforelse  --}}
    


</div>
