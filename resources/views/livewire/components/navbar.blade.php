 <nav>
    <div
        class="flex items-center justify-between w-full mx-auto text-gray-700 bg-gray-100 border-b-4 border-gray-100 rounded-lg md:px-10">

        {{-- Logo & Title --}}
        <div>
            <a href="/" class="flex items-center text-xl">
                <img src="{{ asset('/img/logo.png') }}" class="h-12 ">
                <span class="font-Alhurra text-2xl font-bold text-gray-700">صندوق الكريم</span>
            </a>
        </div>

        {{-- Pages/Home, Cases, About --}}
        <div>
            <ul class="items-center hidden pr-10 text-base font-semibold cursor-pointer md:flex">
                @foreach($menu->items as $item)
                <li class="px-6 py-4 ">
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
            </ul>
        </div>

        {{-- Pages/Login, Register --}}
        <div>
            <ul class="items-center hidden pr-10 text-base font-Alhurra cursor-pointer md:flex">
                @foreach($leftMenu->items as $item)
                <li class="px-6 py-4 ">
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

                {{-- Donate/Add Buttons --}}
                <div class="flex gap-4 @guest hidden @endguest">
                    <a href=" {{ route('donate') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 border-b-2">
                        تبرع
                    </a>
                    @admin
                    <a href="{{ route('add-case') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 border-b-2">
                        اضافة حالة
                    </a>
                    @endadmin




                    <div class="relative" x-data="{ isOpen: false }">
                        <button class="flex items-center focus:outline-none" @click="isOpen = !isOpen"
                            @keydown.escape="isOpen = false">
                            <i class="fa-solid fa-angle-down ml-2"></i>
                            <img src="{{ asset(auth()->user()->profile_photo_path ?? '/img/user.png') }}"
                                alt="Avatar Image" class="w-12 h-12 rounded-full">

                        </button>

                        <ul class="absolute left-0 mt-2 overflow-hidden font-normal bg-white border rounded-md shadow w-24 "
                            x-show="isOpen" @click.away="isOpen = false">
                            <li>
                                <a href="{{ route('profile') }}"
                                    class="flex justify-around items-center p-3 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">



                                    <span>حسابك</span>
                                    <i class="fa-solid fa-circle-user"></i>

                                </a>
                            </li>



                            <li class="">
                                <form method="POST" action="{{ route('logout') }}" class="" x-data>
                                    @csrf
                                    <button type="submit"
                                        class="flex justify-around items-center p-3 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 w-full">
                                        <span> الخروج</span>
                                        <i class="fa-solid fa-right-from-bracket"></i>

                                    </button>
                                </form>
                            </li>

                        </ul>

                    </div>
                </div>
            </ul>

        </div>

        {{-- Pages in Mobile --}}
        <div x-data="{ isOpen: false }" class="block md:hidden">
            <button class="px-4 py-3 mx-2 rounded focus:outline-none hover:bg-gray-200 group" <blade
                click|%3D%26%2334%3BisOpen%20%3D%20!isOpen%20%26%2334%3B%3E%0D>
                <div class="w-5 h-1 mb-1 bg-gray-600"></div>
                <div class="w-5 h-1 mb-1 bg-gray-600"></div>
                <div class="w-5 h-1 bg-gray-600"></div>
                <div class="absolute top-0 w-8/12 h-screen transition-all duration-300 bg-white border opacity-0 -right-full group-focus:right-0 group-focus:opacity-100"
                    x-show="isOpen" @click.away="isOpen = false">

                    <ul class="flex flex-col items-center w-full pt-10 text-base cursor-pointer">
                        @foreach($menu->items as $item)
                        <li class="w-full px-6 py-4 ">
                            @if($item->hasSubmenu)
                            {{-- Has Submenu --}}
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                id="user-menu-button" aria-expanded="false"
                                data-dropdown-toggle="dropdown-{{ $item->name }}">
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
                                class="block py-2 pl-3 pr-4 font-semibold {{ $item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-50 border-gray-100' }} border-b-2 ">
                                {{ $item->name }}
                            </a>
                            @endif
                        </li>
                        @endforeach


                        @foreach($leftMenu->items as $item)
                        <li class="px-6 py-4 ">
                            @if($item->hasSubmenu)
                            {{-- Has Submenu --}}
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                id="user-menu-button" aria-expanded="false"
                                data-dropdown-toggle="dropdown-{{ $item->name }}">
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
                                class="block py-2 pl-3 pr-4 font-semibold {{ $item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-50 border-gray-100' }} border-b-2 ">
                                {{ $item->name }}
                            </a>
                            @endif
                        </li>
                        @endforeach
                        <div class="flex gap-4 @guest hidden @endguest">
                            <a href=" {{ route('donate') }}"
                                class="block py-2 pl-3 pr-4 font-semibold text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 border-b-2">
                                تبرع
                            </a>
                            @admin
                            <a href="{{ route('add-case') }}"
                                class="block py-2 pl-3 pr-4 font-semibold text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 border-b-2">
                                اضافة حالة
                            </a>
                            @endadmin
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <button type="submit"
                                    class="block py-2 pl-3 pr-4 font-semibold text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 border-b-2">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </button>
                            </form>
                        </div>
                    </ul>
                </div>

            </button>

        </div>
    </div>
</nav> 