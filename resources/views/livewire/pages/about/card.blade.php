<div>
    <div
        class="flex flex-col justify-center w-full px-8  my-12 text-center rounded-md md:w-96 lg:w-80 xl:w-64 border mx-auto">
        <img alt="" class="self-center flex-shrink-0 w-24 h-24 -mt-12 bg-center bg-cover rounded-full border-2 border-primary-600"
            src="{{ $team->photo }}">
        <div class="flex-1 my-4">
            <p class="text-xl font-semibold leading-snug">{{ $team->name }}</p>
            <p class="text-xs block mt-4">{{ $team->stage }} - {{ $team->department }}</p>
        </div>
        @if ($team->type == 1)
            <div class="flex items-center justify-around p-3 space-x-3 border-t-2">
                <a rel="noopener noreferrer" target="_blank" href="mailto:{{ $team->email }}" title="Email"
                    class="">
                    <i class="fa-solid fa-envelope"></i>
                </a>

                <a rel="noopener noreferrer" target="_blank" href="{{ $team->github }}" title="GitHub"
                    class="">
                    <i class="fa-brands fa-github"></i>
                </a>
            </div>
        @else
        <div class="flex justify-end pt-2 space-x-4 align-center text-gray-700 ">
            <a aria-label="number" class="p-2 rounded-md text-lg mx-auto">
                {{ $team->adjective }}
            </a>
        </div>
        @endif

    </div>
</div>
