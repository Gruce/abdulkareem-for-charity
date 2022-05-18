<div>

    <div x-data="{ isOpen: false }" class="grid grid-cols-4 gap-6 group">
        @forelse($users as $item)
        {{-- <div
            class="rounded-xl border-2 border-primary-100 hover:shadow-lg hover:border-primary-500 duration-300 p-4 w-full">
            <div class="grid grid-cols-5 mb-5">
                <div class="col-span-2 flex flex-col">
                    <img src="{{ asset($item->profile_photo_path ?? 'img/user.png') }}" alt=""
                        class=" rounded-full h-32 w-32" />
                    <h3 class=" text-xl mr-1 mt-4"> يملك {{ $item->getShare() ?? 0 }} سهماً </h3>
                </div>


                <div class="col-span-3">
                    <h3 class="mt-6 text-center font-bold text-2xl ">{{ $item->name }}</h3>
                    <h3 class="mt-2 font-Alhurra text-center text-base @if ($item->type == 4) hidden @endif">
                        @if($item->type == 1)
                        طالب
                        @elseif($item->type == 2)
                        تدريسي
                        @else
                        موظف
                        @endif
                    </h3>

                </div>

            </div>
            @admin
            <div x-data="{ open: false }">
                @if($item->shares->count() > 0)
                <button @click="open = ! open"><i
                        class="fa-solid fa-hand-holding-dollar h-10 w-10 mr-3 text-red-600 animate-pulse"></i>
                </button>
                @endif
                <div x-show="open" @click.outside="open = false">
                    <div class="">
                        @foreach($item->shares as $share)
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
            @endadmin

            @auth
            <h5 class="text-lg tracking-tight pt-5">البريد الالكتروني: {{ $item->email }}</h5>
            @endauth
            <div class="flex justify-between">
                <p class="text-sm font-normal text-gray-500">انضم {{ $item->created_at->diffForHumans() }}</p>
                @admin
                <button wire:click="confirm({{ $item->id }})" class="mx-2">
                    <i
                        class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-600"></i>

                </button>
                @endadmin
            </div>
        </div> --}}
        {{-- <div class="max-w-md p-8 sm:flex sm:space-x-6 bg-emerald-50 hover:bg-emerald-100 rounded-lg border-y border-x-4  border-primary-400">
            <div class="flex-shrink-0 w-full mb-6 h-44 sm:h-32 sm:w-32 sm:mb-0 ml-4">
                <img src="{{ asset($item->profile_photo_path ?? 'img/user.png') }}" alt=""
                    class="object-cover object-center w-full h-full rounded-full bg-cuan-600">
            </div>
            <div class="flex flex-col justify-around space-y-4 ">
                <div class="">
                    <h2 class="text-2xl font-semibold text-secondary-900">{{ $item->name }}</h2>
                    <span class="text-sm text-secondary-600">
                        @if($item->type == 1)
                        طالب
                        @elseif($item->type == 2)
                        تدريسي
                        @else
                        موظف
                        @endif
                        -
                        {{ $item->getShare() ?? 0 }} سهماً
                    </span>
                </div>
                @admin
                @if($item->phoneNumber)
                <div class="space-y-1">

                    <span class="flex items-center space-x-2 text-secondary-800">
                        <i class="fa-solid fa-phone-flip "></i>
                        <span class="">{{ $item->phoneNumber }}</span>
                    </span>

                </div>
                @endif

                <div x-data="{ open: false }">
                    @if($item->shares->count() > 0)
                    <button @click="open = !open "><i
                            class="fa-solid fa-bell text-primary-600 mt-2 mr-4 text-2xl hover:scale-110 duration-200 animate-pulse"></i>
                    </button>
                    <div x-show="open" @click.outside="open = false">
                        <div class="bg-primary-500  p-2 rounded-lg">
                            @foreach($item->shares as $share)
                            <div class="flex flex-col ">
                                <div class="mb-4 text-center text-gray-50">
                                    <span>اضافة {{ $share->share }} سهما</span>
                                </div>
                                <div class="flex justify-around">
                                    <button type="button" wire:click="accept({{ $share->id }}, {{ $share->state }})"
                                        class="focus:outline-none text-white bg-secondary-500 hover:bg-secondary-700 focus:ring-4 focus:ring-secbg-secondary-500 font-medium rounded-lg text-sm px-2 py-2  mb-2">قبول</button>
                                    <button type="button" wire:click="deleteShare({{ $share->id }})"
                                        class="focus:outline-none text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2  mb-2">حذف</button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                </div>

                @endadmin
                <div class="flex justify-between">
                    <p class="text-xs text-gray-600">انضم {{ $item->created_at->diffForHumans() }}</p>
                    @admin
                    <button wire:click="confirm({{ $item->id }})" class="mr-16">
                        <i
                            class="text-secondary-700 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-400"></i>

                    </button>


                    @endadmin
                </div>


            </div>

        </div>
        @empty
        لا يوجد متبرعين
        @endforelse --}}
        <div
        class="flex flex-col justify-center max-w-sm p-6 shadow-md rounded-xl sm:px-12 border-2 border-primary-100 ">
        <img src="{{ asset($item->profile_photo_path ?? 'img/user.png') }}" class="w-32 h-32 mx-auto rounded-full bg-white-500 aspect-square">
        <div class="space-y-4 text-center divide-y divide-gray-700">
            <div class="my-2 space-y-1">
                <h2 class="text-xl font-semibold sm:text-2xl pb-4">{{ $item->name }}</h2>
                <p class="text-xs sm:text-base text-gray-700 text-center @if ($item->type == 4) hidden @endif">{{ $item->getShare() ?? 0 }} سهماً -
                    @if($item->type == 1)
                    طالب
                    @elseif($item->type == 2)
                    تدريسي
                    @else
                    موظف
                    @endif</p>
                <p class="text-xs sm:text-base text-gray-700 text-center"></p>
            </div>
            <div class="flex justify-center pt-2 align-center">
                
                @admin
                <div x-data="{ open: false }">
                    @if($item->shares->count() > 0)
                    <button @click="open = ! open"><i
                            class="fa-solid fa-hand-holding-dollar h-10 w-10 mr-3 text-red-600 animate-pulse"></i>
                    </button>
                    @endif
                    <div x-show="open" @click.outside="open = false">
                        <div class="">
                            @foreach($item->shares as $share)
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
                        class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-600"></i>

                </button>
                @endadmin
            </div>

        </div>
    </div>
    @empty
        لا يوجد متبرعين
        @endforelse
    </div>


</div>
