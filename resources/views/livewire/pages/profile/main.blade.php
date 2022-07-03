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