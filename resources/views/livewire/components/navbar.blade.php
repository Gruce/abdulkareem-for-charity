<nav class="">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button data-collapse-toggle="mobile-menu-2" type="button" aria-controls="mobile-menu-2"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start ">
                <div class="flex-shrink-0 flex items-center ">
                    <a href="/" class="flex items-center text-xl">
                        <span class="hidden lg:block font-Alhurra text-xl md:text-2xl font-bold text-gray-700">صندوق
                            الكرم</span>
                        <img src="{{ asset('/img/logo.png') }}" class="h-12 mx-4 ">


                    </a>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        @foreach ($menu->items as $item)
                        <a href="{{ route($item->route) }}" @if($item->active) class="bg-primary-700 text-white px-3
                            py-2 rounded-md text-sm font-medium"
                            @else class="text-gray-700 hover:bg-primary-500 hover:text-white px-3 py-2 rounded-md
                            text-sm font-medium" @endif>
                            {{ $item->name }}</a>

                        @endforeach
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                @auth
                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                    {{-- Button --}}
                    <div>
                        <button type="button"
                            class=" flex text-sm rounded-full border-2 border-primary-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-500 focus:ring-white"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-10 w-10 rounded-full"
                                src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }}@elseif(auth()->user()->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif(auth()->user()->gender != 1) {{ asset('/img/profile_man.png') }} @endif">
                        </button>
                    </div>
                    {{-- content --}}
                    <div id="dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                        data-popper-placement="top"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44">
                        <div class="px-4 py-3 text-sm text-gray-900 ">
                            <div>{{auth()->user()->name}}</div>
                            
                        </div>
                        <ul class=" text-sm text-gray-700"
                                aria-labelledby="dropdownInformationButton">
                                <li>
                                    <a href="{{ route('profile') }}" class="block px-4 py-2  hover:bg-gray-100 ">
                                        <i class="fa-solid fa-user text-primary-500"></i>
                                        حسابك </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="" x-data>
                                        @csrf
                                        <button type="submit" class="block px-4 py-2 w-full text-right hover:bg-gray-100 ">
                                            <i class="fa-solid fa-person-walking-arrow-right text-red-500"></i>
                                             الخروج </button>
                                    </form>
                                </li>
                            </ul>
                    </div>
                </div>
                @else

                <div class="">
                    @foreach ($leftMenu->items as $item)


                    <a href="{{ route($item->route) }}"
                        class=" text-xs md:text-sm py-1 pl-3 pr-4 lg:mx-2 text-primary-700 @if($item->route == 'login') border border-primary-500 @else hidden lg:inline @endif rounded-lg">
                        {{ $item->name }}
                        <i class="fa-solid fa-{{ $item->icon }}"></i>

                    </a>


                    @endforeach
                </div>



                @endauth
            </div>

        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden hidden" id="mobile-menu-2">
        <div class="px-2 pt-2 pb-3 space-y-1">
            @foreach ($menu->items as $item)
            <a href="{{ route($item->route) }}" @if($item->active) class="bg-primary-500 text-white block px-3 py-2
                rounded-md text-base font-medium"
                @else class="text-gray-900 bg-gray-100 hover:text-black block px-3 py-2 rounded-md text-base
                font-medium" @endif>
                {{ $item->name }}</a>

            @endforeach

        </div>
    </div>
</nav>
