<div>
    <div class="flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl border border-gray-800 sm:px-12">

        <div class="transform rounded-full border-secondary-200">
            <img src="/img/about1.png" class="mx-auto h-32 border-2 border-secondary-800 rounded-full" />

            {{-- <img src="{{ $committee->photo ?? 'img/about1/png'}}" alt="" class="mx-auto h-32 border-2 border-secondary-800 rounded-full"> --}}
        </div>

        <div class="space-y-4 divide-y divide-gray-200">
            <div class="my-2 space-y-1">
                <h2 class="text-center text-xl font-semibold sm:text-2xl pb-4">
                    {{ $committee->name }}

                </h2>
                <p class="text-xs sm:text-base text-gray-700 text-center">

                    @if ($committee->department == 1)
                        صباحي
                    @elseif($committee->department == 2)
                        مسائي
                    @endif
                    @if ($committee->stage == 1)
                        - المرحلة الاولى
                    @elseif($committee->stage == 2)
                        - المرحلة الثانية
                    @elseif ($committee->stage == 3)
                        - المرحلة الثالثة
                    @elseif ($committee->stage == 4)
                        - المرحلة الرابعة
                    @endif



                </p>
            </div>


            <div class="flex justify-end pt-2 space-x-4 align-center text-gray-700 ">
                <a href="#" aria-label="number" class="p-2 rounded-md text-lg">
                    {{ $committee->phone_num }}
                    <i class="fa-solid fa-phone mr-4 "></i>
                </a>
            </div>
            @admin
            <button wire:click="confirm({{ $committee->id }})" class="mx-2">
                <i class="text-red-400 fa-solid fa-trash text-xl hover:scale-110 duration-200 hover:text-red-600">
                </i>
            </button>

            <a href="{{ route('edit-committee', ['committee_id' => $committee->id])}}">
                <i
                    class="text-secondary-600 fa-solid fa-pen-to-square text-xl hover:rotate-12 duration-200 hover:text-secondary-700"></i>
            </a>
            @endadmin
        </div>
    </div>
</div>
