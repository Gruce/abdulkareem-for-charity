<nav class="bg-neutral-100 border-gray-200 px-2 sm:px-4 py-2.5 rounded ">
    <div class=" flex flex-wrap justify-between md:px-12 items-center ">
        {{-- Logo & Title --}}
        <div>
            <a href="/" class="flex items-center text-xl">
                <img src="{{ asset('/img/logo.png') }}" class="h-12 ">
                <span class="font-Alhurra text-2xl font-bold text-gray-700">صندوق الكريم</span>
            </a>
        </div>
        <div class="flex items-center md:order-2 @guest hidden @endguest">
            @auth
            <div class=" ">
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-100 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-200 "
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <i class="fa-solid fa-angle-down ml-2 mt-3"></i>
                    <img class="w-10 h-10 rounded-full"
                        src="{{ asset(auth()->user()->profile_photo_path ?? '/img/user.png') }}" alt="user photo">
                </button>

                <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow "
                    id="dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1246px, 801px);">
                    <div class="py-3 px-4">
                        <span class="block text-sm text-gray-900 ">{{ auth()->user()->name }}</span>
                        <span class="block text-sm font-medium text-gray-500 truncate ">{{ auth()->user()->email
                            }}</span>
                    </div>
                    <ul class="py-1" aria-labelledby="dropdown">

                        <li>
                            <a href="{{ route('profile') }}"
                                class=" py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 flex justify-between">
                                <span> حسابك</span>
                                <i class="fa-solid fa-circle-user"></i>
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="" x-data>
                                @csrf
                                <button type="submit"
                                    class="flex justify-around items-center p-3 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 w-full">
                                    <span> تسجيل الخروج</span>
                                    <i class="fa-solid fa-right-from-bracket"></i>

                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @endauth
            
            
            
        </div>
        <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                @foreach($menu->items as $item)
                <li class="px-6 py-2">
                    @if($item->hasSubmenu)
                    {{-- Has Submenu --}}
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" id="user-menu-button"
                        aria-expanded="false" data-dropdown-toggle="dropdown-{{ $item->name }}">
                        <span>{{ $item->name }}</span>
                    </a>

                    <div class="z-50 hidden my-4 text-base text-center list-none bg-white divide-y divide-gray-100 rounded shadow w-36 "
                        id="dropdown-{{ $item->name }}" data-popper-reference-hidden="" data-popper-escaped=""
                        data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1142.67px, 866px, 0px);">
                        <ul class="py-1" aria-labelledby="dropdown">
                            @foreach($item->submenu->items as $subitem)
                            <li>
                                <a href="{{ route($subitem->route) }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                    {{ $subitem->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @else
                    {{-- Has no submenu / edit button here! --}}
                    <a href="{{ route($item->route) }}"
                        class="block py-2 pl-3 pr-4 font-Alhurra1 {{ $item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 ' }} border-b-2">
                        {{ $item->name }}
                    </a>
                    @endif
                </li>
                @endforeach

                @foreach($leftMenu->items as $item)
                <li class="px-6 py-2  ">
                    @if($item->hasSubmenu)
                    {{-- Has Submenu --}}
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" id="user-menu-button"
                        aria-expanded="false" data-dropdown-toggle="dropdown-{{ $item->name }}">
                        <span>{{ $item->name }}</span>
                    </a>

                    <div class="z-50 hidden my-4 text-base text-center list-none bg-white divide-y divide-gray-100 rounded shadow w-36 "
                        id="dropdown-{{ $item->name }}" data-popper-reference-hidden="" data-popper-escaped=""
                        data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1142.67px, 866px, 0px);">
                        <ul class="py-1" aria-labelledby="dropdown">
                            @foreach($item->submenu->items as $subitem)
                            <li>
                                <a href="{{ route($subitem->route) }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                    {{ $subitem->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @else
                    {{-- Has no submenu --}}
                    <a href="{{ route($item->route) }}"
                        class="block py-2 pl-3 pr-4 {{ $item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 ' }} border-b-2 ">
                        {{ $item->name }}
                    </a>
                    @endif
                </li>
                @endforeach
                
            </ul>
        </div>
    </div>
</nav>