{{-- <div>
    <div class="w-full mt-4 rounded my-24 overflow-hidden">
        <div class="top h-64 w-full overflow-hidden relative">
            <img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190619/ourmid/pngtree-colorful-gradient-dreamy-business-corporate-background-image_135286.jpg"
                alt="" class="bg w-full h-full rounded-t-lg object-cover object-center absolute z-0">
            <div class="flex flex-col justify-center items-center relative h-full bg-gray-200 bg-opacity-50 text-white">
                <img src="{{ asset($user->profile_photo_path ?? 'img/user.png') }}"
class="h-32 w-32 object-cover rounded-full">
<h1 class="text-2xl font-semibold text-black">{{ $user->name }}</h1>
<h4 class="text-sm font-semibold text-black">انضم منذ
    {{ date('Y', strtotime($user->created_at)) }}
</h4>
</div>
</div>

<div x-data="{ isOpen: true }" class="justify-start grid grid-cols-1 bg-white">
    <div
        class="w-full px-2 py-4 justify-start flex gap-2 space-x-4 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">

        <button @click="isOpen = true"
            class="text-sm text-white p-2 text-center rounded w-56 hover:scale-105 duration-200 bg-primary-500 focus:bg-primary-600 focus:ring-2 focus:ring-primary-700">المعلومات
            الاساسية</button>


        @if (auth()->user()->type == 1)
            <button @click="isOpen = false"
                class="text-sm text-white p-2 text-center rounded w-56 hover:scale-105 duration-200 focus:ring-2 focus:ring-primary-700 bg-primary-500 focus:bg-primary-600">معلومات
                الطالب</button>
        @endif
    </div>

    <div x-show="isOpen" class="h-full pb-12 ">
        <blade
            livewire|(%26%2339%3Bpages.profile.basic%26%2339%3B%2C%20%5B%26%2339%3Buser%26%2339%3B%20%3D%3E%20%24user%5D)%0D>
    </div>


    <div x-show="!isOpen" class="h-full pb-12">
        <blade
            livewire|(%26%2339%3Bpages.profile.student-info%26%2339%3B%2C%20%5B%26%2339%3Buser%26%2339%3B%20%3D%3E%20%24user%5D)%0D>
    </div>
</div>
</div>
</div> --}}



<div>
    <div class="bg-gray-200">
        <div class="grid flex justify-items-center ">
            <div class="lg:flex mt-6">
                {{-- card --}}
                <div class="justify-center mb-5">
                    <div class="w-96 rounded-2xl overflow-hidden shadow-md bg-white">

                        <div
                            class="flex flex-col justify-center items-center relative h-52 bg-gray-200 bg-opacity-50 text-white">
                            <img src="{{ asset($user->profile_photo_path ?? 'img/user.png') }}"
                                class="h-32 w-32 object-cover rounded-full">

                            <h5 class="text-2xl font-semibold text-black">{{ $user->name }}</h5>
                        </div>

                        <div>
                            <livewire:pages.profile.basic :user="$user" />
                            {{-- <div class="my-5 mx-28 hidden md:block">
                                <button type="submit"
                                class="text-white bg-primary-600 hover:scale-105 duration-200 hover:bg-primary-800 focus:ring-2 focus:outline-none focus:ring-primary-600 font-medium text-md w-40 px-5 py-2.5 text-center rounded-md">
                                حفظ
                            </button>
                            </div> --}}

                        </div>
                    </div>
                </div>

                <div class="flex flex-col lg:mr-5">
                    <div class="mb-5">
                        <div class="w-96 rounded-2xl overflow-hidden shadow-md bg-white">
                            <div class="">
                                <livewire:pages.profile.contact :user="$user" />
                            </div>
                        </div>
                    </div>

                    @if (auth()->user()->type == 1)
                        <div>
                            <div class="w-96 rounded-2xl overflow-hidden shadow-md bg-white">
                                <div class="">
                                    <livewire:pages.profile.student-info :user="$user" />
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- <div class="my-5 mx-28 lg:hidden mb-10">
                        <button type="submit"
                        class="text-white bg-primary-600 hover:scale-105 duration-200 hover:bg-primary-800 focus:ring-2 focus:outline-none focus:ring-primary-600 font-medium text-md w-40 px-5 py-2.5 text-center rounded-md">
                        حفظ
                    </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
