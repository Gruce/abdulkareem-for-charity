<div>
    <div class="w-full relative mt-4 shadow-2xl rounded my-24 overflow-hidden">
        <div class="top h-64 w-full bg-blue-600 overflow-hidden relative">
            <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                alt="" class="bg w-full h-full object-cover object-center absolute z-0">
            <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
                <img src="{{ asset($user->profile_photo_path ?? 'img/download.jpg') }}"
                    class="h-24 w-24 object-cover rounded-full">
                <h1 class="text-2xl font-semibold">{{$user->name}}</h1>
                <h4 class="text-sm font-semibold">انضم منذ {{date('Y', strtotime($user->created_at))}}</h4>
            </div>
        </div>
        
        <div x-data="{isOpen: true}" class="grid grid-cols-12 bg-white ">

            <div 
                class="col-span-12 w-full px-3 py-6 justify-start flex space-x-4 border-b border-solid  md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">

                <button @click="isOpen = true"  class="text-sm p-2 text-center rounded font-bold w-40 bg-primary-300 hover:scale-105 hover:bg-primary-200 focus:bg-primary-500 hover:text-white focus:ring-2 focus:ring-black focus:text-white">المعلومات
                    الاساسية</button>

                    
                @if (auth()->user()->type == 1)
                <button @click="isOpen = false"
                    class="text-sm p-2 text-center rounded font-bold w-40 bg-primary-300 hover:scale-105 focus:ring-2 focus:ring-black hover:bg-primary-200 focus:bg-primary-500 hover:text-white focus:text-white">معلومات
                    الطالب</button>
                @endif
                    

            </div>


            
            <div x-show="isOpen"
                class=" md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
                @livewire('pages.profile.basic', ['user' => $user])
            </div>

            
            <div x-show="!isOpen"
                class=" md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
                @livewire('pages.profile.student-info', ['user' => $user])
            </div>
            
            


        </div>
    </div>
</div>