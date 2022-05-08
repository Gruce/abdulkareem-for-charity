<div>

    <div class=" ">

        <div class="p-4 w-1/2 h-full bg-gray-100 rounded-lg sm:p-8">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold leading-none text-لقشغ-900">المتبرعين</h3>
                
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y " >
                    @forelse ($users as $item)
                        <li  class="py-3 sm:py-4" x-data="{ isOpen: false}">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full bg-secondary-500"
                                    src="{{ asset($item->profile_photo_path) }}"
                                    >
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate ">
                                    {{ $item->name }}
                                </p>
                                <p class="text-sm text-gray-500 truncate ">
                                   {{$item->email}}
                                </p>
                            </div>
                            @admin
                            <button @click="isOpen = !isOpen" class="bg-primary-50">اضغطني عفيه</button>
                            <div x-show="isOpen">
                                <form action="">
                                    <label for="">ادخل عدد الاسهم </label>
                                    <input  type="number" placeholder="ادخل عدد الاسهم">
                                <button type"submit">اضغط اقوى</button></form>
                                
                            </div>
                            @endadmin
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                @if($item->shares_sum_share)
                                {{ $item->shares_sum_share }}
                                @else 0
                                @endif
                            </div>
                        </div>
                    </li>
                    @empty
                        <li>
                            fgfg
                        </li>
                    @endforelse
                    
                    
                </ul>
            </div>
        </div>

    </div>
</div>
