<div>
    <div x-data="{ isOpen: false }" class="">

        <div class="flex flex-col justify-center max-w-sm p-6  rounded-xl sm:px-12 border-x-2 border-y border-gray-200">
            <img src="{{ asset($item->profile_photo_path ?? 'img/user.png') }}"
                class="w-32 h-32 mx-auto rounded-full bg-white-500 aspect-square">
            <div class="space-y-4 text-center divide-y divide-gray-300">
                <div class="my-2 space-y-1">
                    <h2 class="text-xl font-semibold sm:text-2xl pb-4">{{ $item->name }}</h2>
                    <p class="text-xs sm:text-base text-gray-700 text-center ">{{ $item->getShare() ?? 0 }} سهم
                        @if ($item->type == 1)
                        - طالب
                        @elseif($item->type == 2)
                        - تدريسي
                        @elseif ($item->type == 3)
                        - موظف
                        @endif
                    </p>
                </div>
                <div class="flex justify-center pt-2 align-center">
                    @admin
                    <div x-data="{ open: false }">
                        @if ($item->shares->count() > 0)
                        <button @click="open = ! open"><i
                                class="fa-solid fa-hand-holding-dollar h-8 w-8 mr-3 text-red-600 animate-pulse"></i>
                        </button>
                        @endif
                        <div x-show="open" @click.outside="open = false">
                            <div class="">
                                @foreach ($item->shares as $share)
                                <div
                                    class="px-5 py-2 text-3xl font-bold text-gray-600 bg-gray-200 rounded-lg flex justify-between">
                                    <div>
                                        <h3 class="text-xl mr-2 ">تبرع :
                                            <span>{{ $share->share }}</span>
                                        </h3>
                                    </div>
                                    <div>
                                        <button type="button" wire:click="accept({{ $share->id }}, {{ $share->state }})"
                                            class="focus:outline-none text-white bg-green-500 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-2 mb-2">قبول</button>
                                        <button type="button" wire:click="deleteShare({{ $share->id }})"
                                            class="focus:outline-none text-white bg-red-500 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2 mr-2 mb-2">حذف</button>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button wire:click="confirm({{ $item->id }})" class="mx-2">
                        <i
                            class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-600">
                        </i>
                    </button>
                    @endadmin
                </div>
            </div>
            <div class="flex justify-between mt-4">
                <div>
                    <p class="text-xs text-gray-600 mr-2">انضم {{ $item->created_at->diffForHumans() }}</p>
                </div>
                @admin
                @if ($item->phoneNumber)
                <div class="text-xs text-gray-600">
                    <i class="fa-solid fa-phone-flip "></i>
                    <span class="">{{ $item->phone_number }}</span>
                </div>
                @endif
                @endadmin
            </div>
        </div>

    </div>
</div>