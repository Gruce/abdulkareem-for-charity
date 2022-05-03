<nav class="fixed top-0 left-0 bg-white w-full ">
    <div class="container m-auto flex justify-between items-center text-gray-700">

        {{-- Logo & Title --}}
        <div>
            <a href="/" class="flex items-center text-xl">
                <img src="{{ asset('/img/logo.png') }}" class="h-12 ">
                <span class=" font-bold text-gray-700 ">صندوق الأستاذ عبدالكريم</span>
            </a>
        </div>

        {{-- Pages/Home, Cases, About --}}
        <div>
            <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">
                @foreach ($menu->items as $item)
                <li class=" py-4 px-6">
                    @if ($item->hasSubmenu)
                    {{-- Has Submenu --}}
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" id="user-menu-button"
                        aria-expanded="false" data-dropdown-toggle="dropdown-{{$item->name}}">
                        <span>{{ $item->name }}</span>
                    </a>

                    <div class="z-50 hidden my-4 text-base text-center list-none bg-white divide-y divide-gray-100 rounded shadow w-36 "
                        id="dropdown-{{$item->name}}" data-popper-reference-hidden="" data-popper-escaped=""
                        data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1142.67px, 866px, 0px);">
                        <ul class="py-1" aria-labelledby="dropdown">
                            @foreach ($item->submenu->items as $subitem)
                            <li>
                                <a href="{{route($subitem->route)}}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                    {{ $subitem->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @else
                    {{-- Has no submenu --}}
                    <a href="{{route($item->route)}}"
                        class="block py-2 pl-3 pr-4 font-semibold {{$item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-50 border-gray-100'}} border-b-2 ">
                        {{$item->name}}
                    </a>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>

        {{-- Pages/Login, Register --}}
        <div>
            <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">
                @foreach ($leftMenu->items as $item)
                <li class=" py-4 px-6">
                    @if ($item->hasSubmenu)
                    {{-- Has Submenu --}}
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" id="user-menu-button"
                        aria-expanded="false" data-dropdown-toggle="dropdown-{{$item->name}}">
                        <span>{{ $item->name }}</span>
                    </a>

                    <div class="z-50 hidden my-4 text-base text-center list-none bg-white divide-y divide-gray-100 rounded shadow w-36 "
                        id="dropdown-{{$item->name}}" data-popper-reference-hidden="" data-popper-escaped=""
                        data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1142.67px, 866px, 0px);">
                        <ul class="py-1" aria-labelledby="dropdown">
                            @foreach ($item->submenu->items as $subitem)
                            <li>
                                <a href="{{route($subitem->route)}}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                    {{ $subitem->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @else
                    {{-- Has no submenu --}}
                    <a href="{{route($item->route)}}"
                        class="block py-2 pl-3 pr-4 font-semibold {{$item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-50 border-gray-100'}} border-b-2 ">
                        {{$item->name}}
                    </a>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>

        {{-- Pages in Mobile --}}
        <div x-data="{ isOpen: false}">
            <button class="block md:hidden py-3 px-4 mx-2 rounded focus:outline-none hover:bg-gray-200 group"
                @click="isOpen = !isOpen " >
                <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                <div class="w-5 h-1 bg-gray-600"></div>
                <div class="absolute top-0 -right-full h-screen w-8/12 bg-white border opacity-0
                            group-focus:right-0 group-focus:opacity-100 transition-all duration-300" x-show="isOpen"  @click.away="isOpen = false">

                    <ul class="flex flex-col items-center w-full text-base cursor-pointer pt-10">
                        @foreach ($menu->items as $item)
                        <li class=" py-4 px-6 w-full">
                            @if ($item->hasSubmenu)
                            {{-- Has Submenu --}}
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                id="user-menu-button" aria-expanded="false"
                                data-dropdown-toggle="dropdown-{{$item->name}}">
                                <span>{{ $item->name }}</span>
                            </a>

                            <div class="z-50 hidden my-4 text-base text-center list-none bg-white divide-y divide-gray-100 rounded shadow w-36 "
                                id="dropdown-{{$item->name}}" data-popper-reference-hidden="" data-popper-escaped=""
                                data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1142.67px, 866px, 0px);">
                                <ul class="py-1" aria-labelledby="dropdown">
                                    @foreach ($item->submenu->items as $subitem)
                                    <li>
                                        <a href="{{route($subitem->route)}}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                            {{ $subitem->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @else
                            {{-- Has no submenu --}}
                            <a href="{{route($item->route)}}"
                                class="block py-2 pl-3 pr-4 font-semibold {{$item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-50 border-gray-100'}} border-b-2 ">
                                {{$item->name}}
                            </a>
                            @endif
                        </li>
                        @endforeach


                        @foreach ($leftMenu->items as $item)
                        <li class=" py-4 px-6">
                            @if ($item->hasSubmenu)
                            {{-- Has Submenu --}}
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                id="user-menu-button" aria-expanded="false"
                                data-dropdown-toggle="dropdown-{{$item->name}}">
                                <span>{{ $item->name }}</span>
                            </a>

                            <div class="z-50 hidden my-4 text-base text-center list-none bg-white divide-y divide-gray-100 rounded shadow w-36 "
                                id="dropdown-{{$item->name}}" data-popper-reference-hidden="" data-popper-escaped=""
                                data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1142.67px, 866px, 0px);">
                                <ul class="py-1" aria-labelledby="dropdown">
                                    @foreach ($item->submenu->items as $subitem)
                                    <li>
                                        <a href="{{route($subitem->route)}}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                            {{ $subitem->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @else
                            {{-- Has no submenu --}}
                            <a href="{{route($item->route)}}"
                                class="block py-2 pl-3 pr-4 font-semibold {{$item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-50 border-gray-100'}} border-b-2 ">
                                {{$item->name}}
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