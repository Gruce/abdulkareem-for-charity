<div >
        <div
            class="flex flex-col justify-center max-w-sm p-6 shadow-md rounded-xl sm:px-12 border-2 border-primary-100 ">
            <img src="{{ $team->photo }}" class="w-32 h-32 mx-auto rounded-full bg-white-500 aspect-square">
            <div class="space-y-4 text-center divide-y divide-gray-700">
                <div class="my-2 space-y-1">
                    <h2 class="text-xl font-semibold sm:text-2xl pb-4">{{ $team->name }}</h2>
                    <p class="text-xs sm:text-base text-gray-700 text-center">{{ $team->stage }} - {{ $team->department }}</p>
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
        </div>
    
</div>
