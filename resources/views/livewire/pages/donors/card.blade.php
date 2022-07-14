<div>
    <div class="flex flex-col justify-center max-w-xs p-6 shadow-sm rounded-xl border border-gray-200 mx-auto">
        <img src="@if ($item->profile_photo_path) {{ asset($item->profile_photo_path) }}@elseif($item->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif($item->gender != 1) {{ asset('/img/profile_man.png') }} @endif"
            alt="" class="w-32 h-32 mx-auto rounded-full aspect-square border-2 border-primary-600">
        <div class="space-y-4 text-center divide-y divide-gray-200">
            <div class="my-2 space-y-1">
                <h2 class="text-xl font-semibold sm:text-2xl text-gray-800">{{ $item->name }}</h2>
                <p class="px-5 text-xs sm:text-base text-gray-500">{{ $item->getShare() ?? 0 }} سهم
                    @if ($item->type == 1)
                    - طالب
                    @elseif($item->type == 2)
                    - تدريسي
                    @elseif ($item->type == 3)
                    - موظف
                    @endif
                </p>
            </div>
            @admin
            <div wire:ignore.self x-data="{ isOpen: false }" class="flex flex-col justify-between pt-2 space-x-4 ">
                <div class="flex justify-between h-8">
                    <div class="flex align-center">
                        <p class="text-xs text-gray-600 mr-2 self-center">انضم {{ $item->created_at->diffForHumans() }}
                        </p>
                    </div>
                    <div class="flex  justify-between text-base">

                        @if (count($item->pay()) > 0)
                        <button @click="isOpen = !isOpen" class="mx-2 p-1">
                            <i
                                class="fa-solid fa-bell text-amber-400 duration-150 hover:animate-none animate-spin hover:text-amber-500 "></i>
                        </button>
                        @endif

                        @superAdmin
                        <button wire:click.prevent="confirm_upgrade()" class="mx-2 p-1">
                            <i
                                class="fa-solid fa-person-circle-plus text-stone-400  duration-200 hover:text-amber-400"></i>

                        </button>


                        <button wire:click.prevent="confirm()" class="mx-2 p-1">
                            <i class=" fa-solid fa-trash text-stone-400 duration-200 hover:text-red-500">
                            </i>
                        </button>
                        @endsuperAdmin
                    </div>
                </div>
                <div x-show="isOpen" class="text-gray-500 text-base p-2  flex flex-col">

                    <span>الطلبات</span>

                    @foreach ($item->shares as $share)
                    @if (!$share->state)
                    <div class="flex justify-between">
                        <div>
                            <span class="text-xs">طلب اضافة {{ $share->share }} سهم</span>
                        </div>
                        <div class="flex ">
                            <button type="button" wire:click="confirm_accepet({{ $share->id }}, {{ $share->state }})"
                                class="mx-2 text-primary-500"><i class="fa-solid fa-check"></i>
                            </button>
                            <button type="button" wire:click="confirm_delete({{ $share->id }})"
                                class="mx-2 text-red-500"><i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                    @endif
                    @endforeach



                </div>

            </div>
            @endadmin
        </div>
    </div>
</div>
