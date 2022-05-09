{{-- <div class="h-screen w-full">
    <div class="flex justify-between items-center mb-5">
        <h3 class="text-xl font-bold leading-none text-black">المتبرعين</h3>
    </div>
    <div class="grid grid-cols-3">
        @forelse ($users as $item)


        <!-- component -->
        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <img class="w-36 h-36 mx-auto rounded-full -mt-20 border-8 border-primary-50"
                src="{{ asset($item->profile_photo_path) }}" alt="">
            <div class="text-center mt-2 text-3xl font-medium">{{ $item->name }}</div>
            <div class="text-center mt-2 font-light text-sm">{{ $item->email }}</div>
            <div class="text-center font-normal text-lg">{{ $item->type }}</div>
            <div class="px-6 text-center mt-2 font-light text-sm">
               
            </div>
            <hr class="mt-8">
            <div class="flex p-4">
                <div class="w-1/2 text-center">
                    <span class="font-bold">2022</span> انظم منذ
                </div>

                <div class="w-1/2 text-center">
                    <span class="font-bold">
                        @if ($item->shares_sum_share)
                        {{ $item->shares_sum_share }}
                        @else
                        0
                        @endif
                    </span> الأسهم
                </div>
            </div>
        </div>
        @empty
        <div class="text-center text-xl font-bold">لا يوجد متبرعين</div>
        @endforelse
    </div>
</div> --}}