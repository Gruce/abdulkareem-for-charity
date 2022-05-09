
{{-- Donors Card --}}

<div class="h-screen w-full">
    <div class="flex justify-between items-center mb-5">
        <h3 class="text-xl font-bold leading-none text-black">المتبرعين</h3>
    </div>
    <div class="">
        @forelse ($users as $item)
            <div class="grid grid-rows-3 justify-start pt-10 gap-2">

                <div class="card w-96 h-auto mx-auto bg-white  shadow-md hover:shadow-xl">

                    <img class="w-32 mx-auto rounded-full -mt-20 border-8 border-white"
                        src="{{ asset($item->profile_photo_path) }}" alt="Profile Pic">
                    <div class="text-center mt-2 text-3xl font-medium">{{ $item->name }}</div>
                    <div class="text-center mt-2 font-light text-sm">{{ $item->email }}</div>
                    <div class="text-center font-normal text-lg">{{ $item->type }}</div>
                    <div class="px-6 text-center mt-2 font-light text-sm">
                        <p>
                            ضيفوا الي يعجبكم...........هيهيه
                        </p>
                    </div>
                    <hr class="mt-8">
                    <div class="flex p-4">
                        <div class="w-1/2 text-center">
                            <span class="font-bold">2022</span> انظم منذ
                        </div>
                        <div class="w-0 border border-gray-300">
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
            </div>
        @empty
            <div class="text-center text-xl font-bold">لا يوجد متبرعين</div>
        @endforelse
    </div>
</div>

{{-- Admin?? --}}

{{-- @admin
<button @click="isOpen = !isOpen" class="bg-primary-50">اضغطني عفيه</button>
<div x-show="isOpen">
    <form action="">
        <label for="">ادخل عدد الاسهم </label>
        <input type="number" placeholder="ادخل عدد الاسهم">
        <button type"submit">اضغط اقوى</button>
    </form>

</div>
@endadmin --}}
