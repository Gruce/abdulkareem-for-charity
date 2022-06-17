<div>
    <div class="bg-secondary-300 ">
        <div class=" overflow-hidden w-full lg:w-10/12 mx-auto border-b">
            <div class="top h-64 w-full overflow-hidden relative">
                <img src="/img/profile_background.png" alt=""
                    class="bg w-full h-full rounded-t-lg object-cover object-center absolute z-0 border-2 border-primary-600">
                <div
                    class="flex flex-col justify-center items-center relative h-full bg-gray-200 bg-opacity-50 text-white">
                    <img src="{{ asset($user->profile_photo_path ?? 'img/user.png') }}"
                        class="h-32 w-32 object-cover rounded-full">
                    <h1 class="text-3xl font-semibold text-gray-900">{{ $user->name }}</h1>
                    <h4 class="text-sm mt-2  text-black">انضم منذ {{ date('Y', strtotime($user->created_at)) }}
                    </h4>
                </div>
            </div>


            <div class=" bg-white border-b border-gray-200 ">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-evenly" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent  hover:text-primary-600 hover:border-primary-300 "
                            id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="false">المعلومات الاساسية</button>
                    </li>
                    @if (auth()->user()->type == 1)
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent  hover:text-primary-600 hover:border-primary-300 "
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">معلومات الطالب</button>
                    </li>
                    @endif


                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 bg-white " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @livewire('pages.profile.basic', ['user' => $user])
                </div>
                <div class="hidden p-4 bg-white " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    @livewire('pages.profile.student-info', ['user' => $user])
                </div>


            </div>

        </div>
    </div>

</div>


{{-- <div x-data="{ isOpen: true }" class="justify-start  bg-white ">
    <div
        class=" w-full px-2 py-4 justify-start flex gap-2 space-x-4 md:space-y-4 md:flex-row md:col-span-2 md:justify-start ">

        <button @click="isOpen = true"
            class="text-sm text-white p-2 text-center rounded w-56 hover:scale-105 duration-200 focus:ring-2 focus:ring-primary-700 bg-primary-500 focus:bg-primary-600">المعلومات
            الاساسية</button>


        @if (auth()->user()->type == 1)
        <button @click="isOpen = false"
            class="text-sm text-white p-2 text-center rounded w-56 hover:scale-105 duration-200 focus:ring-2 focus:ring-primary-700 bg-primary-500 focus:bg-primary-600">معلومات
            الطالب</button>
        @endif
    </div>
    <div class=" ">
        <div x-show="isOpen" class="mx-auto">
            @livewire('pages.profile.basic', ['user' => $user])
        </div>


        <div x-show="!isOpen" class="h-full pb-12">
            @livewire('pages.profile.student-info', ['user' => $user])
        </div>
    </div>
</div> --}}
