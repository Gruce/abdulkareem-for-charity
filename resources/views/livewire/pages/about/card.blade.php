<div>

    <div
        class="flex flex-col justify-center max-w-sm my-10 p-6 shadow-md rounded-xl sm:px-12 border-2 border-secondary-800 ">
        <div class="-mt-8 -translate-y-1/2 transform rounded-full border-secondary-800">
            <img src="{{ $team->photo }}" class="mx-auto h-32 border-2 border-secondary-800 rounded-full" />
        </div>
        <div class="space-y-4 text-center divide-y divide-gray-700 -mt-14">
            <div class="my-2 space-y-1">
                <h2 class="text-xl font-semibold sm:text-2xl pb-4">{{ $team->name }}</h2>
                <p class="text-xs sm:text-base text-gray-700 text-center">{{ $team->stage }} -
                    {{ $team->department }}</p>
                <p class="text-xs sm:text-base text-gray-700 text-center"></p>
            </div>
            <div class="flex justify-center pt-2 align-center">
                <a rel="noopener noreferrer" href="{{ $team->github }}" aria-label="GitHub" target="_blank"
                    class="p-2 rounded-md text-gray-900 hover:text-violet-400">
                    <i class="fa-brands fa-github">
                        {{ $team->github }}
                    </i>
                </a>
                {{-- <a rel="noopener noreferrer" href="#" aria-label="Instagram"
                    class="p-2 rounded-md text-gray-900 hover:text-violet-400">
                    <i class="fa-brands fa-instagram"></i>
                </a> --}}
                <a rel="noopener noreferrer" href="{{ $team->linkedln }}" aria-label="Linkedin" target="_blank"
                    class="p-2 rounded-md text-gray-900 hover:text-violet-400">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a rel="noopener noreferrer" href="{{ $team->email }}" aria-label="Email" target="_blank"
                    class="p-2 rounded-md text-gray-900 hover:text-violet-400">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </div>
    </div>

</div>
