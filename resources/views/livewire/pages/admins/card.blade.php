<div >
    <div class="py-4 px-2 rounded-xl transition duration-300 mx-auto border border-gray-300 hover:shadow-md hover:bg-gray-50">
        <div class="">
            <img src="@if ($item->profile_photo_path) {{ asset($item->profile_photo_path) }}@elseif($item->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif($item->gender != 1) {{ asset('/img/profile_man.png') }} @endif"
                class="mx-auto h-48" />
        </div>
        <div class="text-center">
            <h3 class="text-center text-3xl font-semibold mt-4">{{ $item->name }}</h3>
            <span class="text-sm">
                @if ($item->type == 1)
                طالب - @if ($item->student->department == 1)
                علوم
                @else
                نظم
                @endif
                - @if ($item->student->study_type == 1)
                صباحي
                @else
                مسائي
                @endif
                - @if ($item->student->stage == 1)
                أولى
                @elseif($item->student->stage == 2)
                ثانية
                @elseif($item->student->stage == 3)
                ثالثة
                @else
                رابعة
                @endif
                - @if ($item->student->division == 1)
                A
                @elseif($item->student->stage == 2)
                B
                @elseif($item->student->stage == 3)
                C
                @elseif($item->student->stage == 4)
                D
                @else
                E
                @endif
                @elseif($item->type == 2)
                تدريسي
                @elseif($item->type == 3)
                موظف
                @elseif($item->type == 4)
                من خارج الكلية
                @endif
            </span>
        </div>
        <ul class="mt-12 mb-8 flex justify-evenly text-center text-2xl">
            <li class="flex flex-col"><span class="mb-2">سهم</span> {{ $item->get_shares }}</li>
            <li class=" flex flex-col"><span class="mb-2">مبلغ</span> {{ $item->get_shares * 2000}}</li>

        </ul>
        @superAdmin
        <div class="text-center">
            <button wire:click="confirm_downgrade()" type="button"
                class="rounded-xl mb-2  bg-gradient-to-r from-red-400 to-red-500 hover:bg-gradient-to-br px-20 py-2 text-white">تخفيض
                المدير</button>
        </div>
        @endsuperAdmin
    </div>

</div>
