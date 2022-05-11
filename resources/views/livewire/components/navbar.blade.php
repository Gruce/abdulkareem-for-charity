<nav class="sticky top-0 w-full">
    <div
        class="flex items-center justify-between w-full mx-auto text-gray-700 bg-gray-100 border-b-4 border-gray-100 rounded-lg md:px-10">

        {{-- Logo & Title --}}
        <div>
            <a href="/" class="flex items-center text-xl">
                <img src="{{ asset('/img/logo.png') }}" class="h-12 ">
                <span class="font-Kufi text-gray-700">صندوق الأستاذ عبدالكريم</span>
            </a>
        </div>

        {{-- Pages/Home, Cases, About --}}
        <div>
            <ul class="items-center hidden pr-10 text-base font-semibold cursor-pointer md:flex">
                @foreach ($menu->items as $item)
                    <li class="px-6 py-4 ">
                        @if ($item->hasSubmenu)
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
                                    @foreach ($item->submenu->items as $subitem)
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
            </ul>
        </div>

        {{-- Pages/Login, Register --}}
        <div>
            <ul class="items-center hidden pr-10 text-base font-semibold cursor-pointer md:flex">
                @foreach ($leftMenu->items as $item)
                    <li class="px-6 py-4 ">
                        @if ($item->hasSubmenu)
                            {{-- Has Submenu --}}
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                id="user-menu-button" aria-expanded="false"
                                data-dropdown-toggle="dropdown-{{ $item->name }}">
                                <span>{{ $item->name }}</span>
                            </a>

                            <div class="z-50 hidden my-4 text-base text-center list-none bg-white divide-y divide-gray-100 rounded shadow w-36 "
                                id="dropdown-{{ $item->name }}" data-popper-reference-hidden=""
                                data-popper-escaped="" data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1142.67px, 866px, 0px);">
                                <ul class="py-1" aria-labelledby="dropdown">
                                    @foreach ($item->submenu->items as $subitem)
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
            </ul>
        </div>

        {{-- Donate/Add Buttons --}}

        <div class="flex gap-4 @auth
@else
hidden 
@endauth">
            <div>
                <a href="{{ route('donate') }}"
                    class="block text-white hover:scale-105 duration-200 hover:border-2 hover:border-primary-400 bg-primary-300 hover:bg-primary-600 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2">
                    تبرع
                </a>

            </div>

            @admin
            <div>
                <a href="{{ route('add-case') }}"
                    class="block text-white hover:scale-105 duration-200 hover:border-2 hover:border-primary-400 bg-primary-300 hover:bg-primary-600 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 ">
                    اضافة حالة
                </a>
            </div>
            @endadmin


            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button type="submit"
                    class="text-white hover:scale-105 duration-200 hover:border-2 hover:border-primary-400 bg-primary-300 hover:bg-primary-600 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 ">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </form>
        </div>

        {{-- Pages in Mobile --}}
        <div x-data="{ isOpen: false }" class="block md:hidden">
            <button class="px-4 py-3 mx-2 rounded focus:outline-none hover:bg-gray-200 group"
                @click="isOpen = !isOpen ">
                <div class="w-5 h-1 mb-1 bg-gray-600"></div>
                <div class="w-5 h-1 mb-1 bg-gray-600"></div>
                <div class="w-5 h-1 bg-gray-600"></div>
                <div class="absolute top-0 w-8/12 h-screen transition-all duration-300 bg-white border opacity-0 -right-full group-focus:right-0 group-focus:opacity-100"
                    x-show="isOpen" @click.away="isOpen = false">

                    <ul class="flex flex-col items-center w-full pt-10 text-base cursor-pointer">
                        @foreach ($menu->items as $item)
                            <li class="w-full px-6 py-4 ">
                                @if ($item->hasSubmenu)
                                    {{-- Has Submenu --}}
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        id="user-menu-button" aria-expanded="false"
                                        data-dropdown-toggle="dropdown-{{ $item->name }}">
                                        <span>{{ $item->name }}</span>
                                    </a>

                                    <div class="z-50 hidden my-4 text-base text-center list-none bg-white divide-y divide-gray-100 rounded shadow w-36 "
                                        id="dropdown-{{ $item->name }}" data-popper-reference-hidden=""
                                        data-popper-escaped="" data-popper-placement="top"
                                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1142.67px, 866px, 0px);">
                                        <ul class="py-1" aria-labelledby="dropdown">
                                            @foreach ($item->submenu->items as $subitem)
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


                        @foreach ($leftMenu->items as $item)
                            <li class="px-6 py-4 ">
                                @if ($item->hasSubmenu)
                                    {{-- Has Submenu --}}
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        id="user-menu-button" aria-expanded="false"
                                        data-dropdown-toggle="dropdown-{{ $item->name }}">
                                        <span>{{ $item->name }}</span>
                                    </a>

                                    <div class="z-50 hidden my-4 text-base text-center list-none bg-white divide-y divide-gray-100 rounded shadow w-36 "
                                        id="dropdown-{{ $item->name }}" data-popper-reference-hidden=""
                                        data-popper-escaped="" data-popper-placement="top"
                                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1142.67px, 866px, 0px);">
                                        <ul class="py-1" aria-labelledby="dropdown">
                                            @foreach ($item->submenu->items as $subitem)
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
                    </ul>
                </div>

            </button>

        </div>
    </div>
</nav>
