{{-- <nav class=" px-2 py-4 sm:px-4 ">
    <div class=" flex flex-wrap items-center justify-between px-10 py-2">
        <a href="#" class="flex items-center">

            <span class="self-center text-2xl font-[Poppins]">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2qEsdwLTJtP9JrqHJgstDvhQR-fIPAJkSYb0F7Xijmt2bnI-K7E7011UPmvqg8PKLHwM&usqp=CAU"
                    class="h-16 inline">
                صندوق الأستاذ عبدالكريم</span>
        </a>


        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                @foreach ($menu as $menuitem)
                @if ($menuitem->route == 'login' || $menuitem->route == 'register')
                @continue
                @endif
                <li>
                    <a href="{{ route($menuitem->route) }}"
                        class="text-lg duration-500 block p-2 m-2 @if ($menuitem->active) bg-primary-100  rounded-full  text-white  @else text-gray-700 hover:text-primary-100 @endif"
                        aria-current="page">

                        {{ $menuitem->name }}
                        @if ($menuitem->active) <i class="{{ $menuitem->icon }} mr-1"></i> @endif

                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div>
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8  md:mt-0 md:text-sm md:font-medium">
                @foreach ($menu as $menuitem)
                @if ($menuitem->route == 'login' || $menuitem->route == 'register')
                @if ($menuitem->route == 'login')
                <li>
                    <a href="{{ route($menuitem->route) }}"
                        class="bg-secondary-100 text-white font-[Poppins] 
                            duration-500 px-6 py-2 mx-4 p-2 rounded @if ($menuitem->active) text-primary-100 @else text-gray-700 @endif"
                        aria-current="page">

                        {{ $menuitem->name }}
                        <i class="{{ $menuitem->icon }} mr-1"></i>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route($menuitem->route) }}"
                        class="bg-primary-100 text-white font-[Poppins] 
                            duration-500 px-6 py-2 mx-4 rounded @if ($menuitem->active) text-primary-100 @else text-gray-700 @endif" aria-current="page">

                        {{ $menuitem->name }}
                        <i class="{{ $menuitem->icon }} mr-1"></i>
                    </a>
                </li>
                @endif
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav> --}}

<!-- component -->
<nav class="bg-gray-100 w-100 px-8 md:px-auto">
    <div class="md:h-16 h-28 md:px-4  flex items-center justify-between flex-wrap md:flex-nowrap ">
        <!-- Logo -->
        <div class="text-indigo-500 md:order-1 flex items-center">
            <!-- Heroicon - Chip Outline -->
            <img src="{{ asset('/img/logo.png') }}" class="h-16 ">
            <span class="text-xl font-bold text-gray-700  ">صندوق الأستاذ عبدالكريم</span>
            
        </div>
        <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
            <ul class="flex font-semibold justify-between">

                @foreach ($menu as $menuitem)
                @if ($menuitem->route == 'login' || $menuitem->route == 'register')
                @continue
                @endif
                <li
                    class="md:px-4 md:py-2  @if ($menuitem->active) text-primary-100  rounded-full    @else text-gray-700 hover:text-primary-100 @endif">
                    <a href="{{ route($menuitem->route) }}">
                        {{ $menuitem->name }}@if ($menuitem->active)<i class="{{ $menuitem->icon }} mr-1"></i>@endif
                    </a>

                </li>
                @endforeach

            </ul>
        </div>
        <div class="order-2 md:order-3 flex gap-2">
            @foreach ($menu as $menuitem)
            @if ($menuitem->route == 'login' || $menuitem->route == 'register')
            @if ($menuitem->route == 'login')
            <a href="{{ route($menuitem->route) }}"class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-xl flex items-center gap-2">
                
                <span>تسجيل الدخول</span>
                <i class="fa-solid fa-right-to-bracket"></i>
                
            </a>
            @else
            <a href="{{ route($menuitem->route) }}" class="px-4 py-2 bg-primary-100 hover:bg-indigo-600 text-white rounded-xl flex items-center gap-2">
                
                <span>انشاء حساب</span>
                <i class="fa-solid fa-user"></i>
                
            </a>
            @endif
            @endif
            @endforeach
        </div>
    </div>
</nav>