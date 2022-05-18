<div>

    {{-- <div x-data="{ isOpen: false }" class="grid grid-cols-4 gap-6 group">
        @forelse($users as $item)
        <div class="max-w-md p-8 sm:flex sm:space-x-6 bg-emerald-50 hover:bg-emerald-100 rounded-lg border-y border-x-4  border-primary-400">
            <div class="flex-shrink-0 w-full mb-6 h-44 sm:h-32 sm:w-32 sm:mb-0 ml-4">
                <img src="{{ asset($item->profile_photo_path ?? 'img/user.png') }}" alt=""
                    class="object-cover object-center w-full h-full rounded-full bg-cuan-600">
            </div>
            <div class="flex flex-col justify-around space-y-4 ">
                <div class="">
                    <h2 class="text-2xl font-semibold text-secondary-900">{{ $item->name }}</h2>
                    <span class="text-sm text-secondary-600">
                        @if ($item->type == 1)
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
                @if ($item->phoneNumber)
                <div class="space-y-1">

                    <span class="flex items-center space-x-2 text-secondary-800">
                        <i class="fa-solid fa-phone-flip "></i>
                        <span class="">{{ $item->phoneNumber }}</span>
                    </span>

                </div>
                @endif

                <div x-data="{ open: false }">
                    @if ($item->shares->count() > 0)
                    <button @click="open = !open "><i
                            class="fa-solid fa-bell text-primary-600 mt-2 mr-4 text-2xl hover:scale-110 duration-200 animate-pulse"></i>
                    </button>
                    <div x-show="open" @click.outside="open = false">
                        <div class="bg-primary-500  p-2 rounded-lg">
                            @foreach ($item->shares as $share)
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
        @endforelse

    </div> --}}
    {{-- gggggggggggggggggggggggggggggggggggggggggggggggggggggggg --}}
    <div>
            <div
                class="max-w-md p-8 sm:flex sm:space-x-6 bg-emerald-50 hover:bg-emerald-100 rounded-lg border-y border-x-4  border-primary-400 ">

                <img src="{{ asset($item->profile_photo_path ?? 'img/user.png') }}"
                    class="w-32 h-32 mx-auto rounded-full bg-white-500 aspect-square">
                <div class="space-y-4 text-center divide-y divide-gray-700">
                    <div class="my-2 space-y-1">
                        <h2 class="text-xl font-semibold sm:text-2xl pb-4">{{ $item->name }}</h2>
                        <p class="text-xs sm:text-base text-gray-700 text-center">
                            @if ($item->type == 1)
                                طالب
                            @elseif($item->type == 2)
                                تدريسي
                            @else
                                موظف
                            @endif - {{ $item->getShare() ?? 0 }} سهماً
                        </p>
                        <p class="text-xs sm:text-base text-gray-700 text-center"></p>
                    </div>
                    <div class="flex justify-center pt-2 align-center">
                        <a rel="noopener noreferrer" href="#" aria-label="GitHub"
                            class="p-2 rounded-md text-gray-900 hover:text-violet-400">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Instagram"
                            class="p-2 rounded-md text-gray-900 hover:text-violet-400">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Linkedin"
                            class="p-2 rounded-md text-gray-900 hover:text-violet-400">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Email"
                            class="p-2 rounded-md text-gray-900 hover:text-violet-400">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>
            @empty
                لا يوجد متبرعين
        @endforelse
    </div>
</div>
