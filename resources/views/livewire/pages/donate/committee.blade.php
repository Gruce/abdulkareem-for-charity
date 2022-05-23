<div>
    <div class="flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl border border-gray-800 sm:px-12">

        <div class="transform rounded-full border-secondary-200">
            <img src="/img/about1.png" class="mx-auto h-32 border-2 border-secondary-800 rounded-full" />
            
            {{-- <img src="{{ $committee->photo ?? 'img/about1/png'}}" alt="" class="mx-auto h-32 border-2 border-secondary-800 rounded-full"> --}}
        </div>

        <div class="space-y-4 divide-y divide-gray-200">
            <div class="my-2 space-y-1">
                <h2 class="text-center text-xl font-semibold sm:text-2xl pb-4">
                    {{-- {{ $committee->name }} --}}
                    فاطمه نوفل
                </h2>
                <p class="text-xs sm:text-base text-gray-700 text-center">
                    {{-- {{ $committee->stage }} -
                    {{ $committee->department }} --}}
                    المرحلة الثالثة - علوم الحاسوب
                </p>
            </div>


            <div class="flex justify-end pt-2 space-x-4 align-center">
                <a href="#" aria-label="phone" class="p-2 rounded-md text-lg">
                    {{-- {{ $committee->phone }} --}}
                    0777777777777
                    <i class="fa-solid fa-phone"></i>
                </a>
            </div>
        </div>
    </div>
</div>
