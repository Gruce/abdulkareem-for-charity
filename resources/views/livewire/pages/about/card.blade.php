<div>

    <div class="text-center text-gray-500 dark:text-gray-40 p-4">
        <img class="mx-auto mb-4 w-28 h-28 rounded-full  border-2 border-primary-600" src="{{ asset($team['photo']) }}" alt="{{ $team['name'] }}">
        <h3 class="mb-1 text-xl font-bold tracking-tight text-gray-900 ">
            {{ $team['name']}}
        </h3>
        <p>{{ $team['job_title'] }}</p>

        <ul class="flex justify-around mt-4 ">
            <li>
                <a target="_blank" href="mailto:{{ $team['email'] }}" title="Email" class="text-[#39569c] hover:text-gray-900">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </li>
            <li>
                <a target="_blank" href="{{ $team['github'] }}" title="GitHub" class="text-gray-900 hover:text-gray-900" >
                    <i class="fa-brands fa-github"></i>
                </a>
            </li>   
        </ul>
    </div>
</div>
