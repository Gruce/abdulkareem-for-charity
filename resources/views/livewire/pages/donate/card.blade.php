<div>
    <div
        class="flex flex-col justify-center text-gray-800 px-4 my-12 text-center rounded-md w-11/12 border border-gray-500 mx-auto">
        <img alt=""
            class="self-center flex-shrink-0 w-24 h-24 mt-12 bg-center bg-cover rounded-full border-2 border-primary-600"
            src="@if ($item->profile_photo_path) {{ asset($item->profile_photo_path) }}@elseif($item->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif($item->gender != 1) {{ asset('/img/profile_man.png') }} @endif">
        <div class="flex-1 my-4">
            <p class="text-xl font-semibold leading-snug"> {{ $item->name }}</p>

            <p class="text-xs block mt-4">
                @if ($item->type == 1)
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
                @elseif($item->type == 2)
                تدريسي
                @elseif ($item->type == 3)
                موظف
                @else
                من خارج الكلية
                @endif
            </p>

        </div>
        <div class="flex flex-col text-right  p-3  border-t-2 border-gray-500 w-auto">
            <div>
                <span>الهاتف:</span>
                {{ $item->phone_number }}
            </div>
            <div>
                <span>التلجرام:</span>
                {{ $item->telegram_username }}
            </div>
        </div>
    </div>

</div>
