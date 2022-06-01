<div class=" p-6 sm:flex sm:space-x-6 border border-gray-500 rounded-md">
    <div class="flex-shrink-0 w-full mb-6 ml-4 h-44 sm:h-32 sm:w-32 sm:mb-0 ">
        <img src="@if ($admin->profile_photo_path) {{ asset($admin->profile_photo_path) }}@elseif($admin->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif($admin->gender != 1) {{ asset('/img/profile_man.png') }} @endif"
            class="object-cover md:object-center  h-40 md:w-full md:h-full rounded-full bg-gray-500">
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
                @elseif($admin->type == 4) من خارج الكلية
                @endif</span>
        </div>
        <div class="space-y-1">
            <span class="flex items-center space-x-2">
                <i class="fa-brands fa-telegram text-gray-600"></i>
                <span class="text-gray-400">@company.com</span>
            </span>
            <span class="flex items-center space-x-2">
                <span class="flex items-center space-x-2">
                    <i class="fa-solid fa-phone text-gray-600"></i>
                    <span class="text-gray-400 ">+25 381 77 983 </span>
                </span>
            </span>
        </div>
    </div>
</div>