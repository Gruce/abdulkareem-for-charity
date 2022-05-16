<div>

    <div x-data="{ isOpen: false }" class="grid grid-cols-4 gap-6 group">
        @forelse($users as $item)
            <div
                class="rounded-xl border-2 border-primary-100 hover:shadow-lg hover:border-primary-500 duration-300 p-4 w-full">
                <div class="grid grid-cols-5 mb-5">
                    <div class="col-span-2 flex flex-col">
                        <img src="{{ asset($item->profile_photo_path ?? 'img/user.png') }}"
                            alt="" class=" rounded-full h-32 w-32" />
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
                                            <button type="button"
                                                wire:click="accept({{ $share->id }}, {{ $share->state }})"
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
                    <button wire:click="confirm({{ $item->id }})" class="mx-2">
                        <i
                            class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-600"></i>

                    </button>
                </div>
            </div>
        @empty
            لا يوجد متبرعين
        @endforelse

    </div>


</div>
