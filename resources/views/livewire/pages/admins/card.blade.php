<div class=" p-6 hover:bg-gray-50 sm:flex sm:space-x-6 border border-gray-500 rounded-md">
    <div class="flex-shrink-0 w-full mb-6 ml-4 h-44 sm:h-32 sm:w-32 sm:mb-0 ">
        <img src="@if ($admin->profile_photo_path) {{ asset($admin->profile_photo_path) }}@elseif($admin->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif($admin->gender != 1) {{ asset('/img/profile_man.png') }} @endif"
            class="object-cover object-center w-full h-full rounded-full bg-gray-500">
    </div>
    <div class="flex flex-col space-y-4 ">
        <div>
            <h2 class="text-2xl font-semibold">{{ $admin->name }}</h2>
            <span class="text-sm text-gray-400">@if($admin->type == 1)
                طالب - @if($admin->student->department == 1) علوم @else نظم @endif
                - @if($admin->student->study_type == 1) صباحي @else مسائي @endif
                - @if($admin->student->stage == 1) أولى @elseif($admin->student->stage == 2) ثانية @elseif($admin->student->stage == 3) ثالثة @else رابعة @endif
                - @if($admin->student->division == 1) A @elseif($admin->student->stage == 2) B @elseif($admin->student->stage == 3) C @elseif($admin->student->stage == 4) D @else E @endif
                @elseif($admin->type == 2) تدريسي
                @elseif($admin->type == 3) موظف
                @endif</span>
        </div>
        <div class="space-y-1">
            <span class="flex items-center space-x-2">
                <i class="fa-brands fa-telegram text-gray-600"></i>
                <span class="text-gray-400">@company.com</span>
            </span>
            <span class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-label="Phonenumber" class="w-4 h-4">
                    <path fill="currentColor"
                        d="M449.366,89.648l-.685-.428L362.088,46.559,268.625,171.176l43,57.337a88.529,88.529,0,0,1-83.115,83.114l-57.336-43L46.558,362.088l42.306,85.869.356.725.429.684a25.085,25.085,0,0,0,21.393,11.857h22.344A327.836,327.836,0,0,0,461.222,133.386V111.041A25.084,25.084,0,0,0,449.366,89.648Zm-20.144,43.738c0,163.125-132.712,295.837-295.836,295.837h-18.08L87,371.76l84.18-63.135,46.867,35.149h5.333a120.535,120.535,0,0,0,120.4-120.4v-5.333l-35.149-46.866L371.759,87l57.463,28.311Z">
                    </path>
                </svg>
                <span class="text-gray-400">+25 381 77 983</span>
            </span>
        </div>
    </div>
</div>