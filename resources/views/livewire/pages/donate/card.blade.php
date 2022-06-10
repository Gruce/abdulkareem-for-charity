<div>
    <div
        class="flex flex-col justify-center w-full px-8 my-12 text-center rounded-md md:w-96 lg:w-80 xl:w-64 border border-primary-500 mx-auto">
        <img alt="" class="self-center flex-shrink-0 w-24 h-24 mt-12 bg-center bg-cover rounded-full "
            src="@if ($item->profile_photo_path) {{ asset($item->profile_photo_path) }}@elseif($item->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif($item->gender != 1) {{ asset('/img/profile_man.png') }} @endif">
        <div class="flex-1 my-4">
            <p class="text-xl font-semibold leading-snug"> {{ $item->name }}</p>
            @if ($item->type == 1)
                <p class="text-xs block mt-4">
                    @if ($item->student->stage == 1)
                        المرحلة الاولى
                    @elseif($item->student->stage == 2)
                        المرحلة الثانية
                    @elseif($item->student->stage == 3)
                        المرحلة الثالثة
                    @else
                        المرحلة الرابعة
                        @endif - @if ($item->student->department == 1)
                            علوم حاسوب
                        @else
                            نظم المعلومات
                        @endif
                </p>
            @endif
        </div>
        <div class="flex flex-col items-center p-3 space-x-3 border-t-2 border-primary-500 w-auto">
            <div>
                الهاتف: {{ $item->phone_number }}
            </div>
            <div>
                التلجرام: {{ $item->telegram_username }}
            </div>
        </div>
    </div>

</div>
