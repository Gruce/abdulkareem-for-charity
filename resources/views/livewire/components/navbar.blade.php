<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class=" flex flex-wrap md:flex-col md:space-y-3 xl:flex-row justify-between xl:justify-around items-center">

        {{-- Logo & Title --}}
        <div>
            <a href="/" class="flex items-center text-xl">
                <img src="{{ asset('/img/logo.png') }}" class="h-12 mx-4">
                <span class="font-Alhurra text-2xl font-bold text-gray-700">صندوق الكرم</span>
            </a>
        </div>

        <div class="flex items-center md:order-2 ">
            {{-- Profile Dropdown --}}
            @auth

            <div class="flex justify-around items-center md:order-2 @guest hidden @endguest ml-2">
              @admin
                <div
                    class="hidden   md:flex justify-around   ml-10  text-gray-500 text-base text-center ">

                    <div class="flex flex-col mx-2 border-b border-gray-200">
                        <span>@money($total, 'IQD')</span>
                        <span class="text-2xs -mt-2">الكلي</span>
                    </div>
                    <div class="flex flex-col mx-2 border-b border-gray-200">
                        <span>@money($current_price, 'IQD')</span>
                        <span class="text-2xs -mt-2">الحالي</span>
                    </div>

                    <div class="flex flex-col mx-2 border-b border-gray-200">
                        <span>{{ $payments }}</span>
                        <span class="text-2xs -mt-2">مصروف</span>
                    </div>
                </div>
                @endadmin
                <div class=" ">
                    <button type="button"
                        class="flex mr-3 text-sm border-2 border-transparent focus:border-b-primary-200 md:mr-0"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                        <span class="sr-only">Open user menu</span>
                        <i class="fa-solid fa-angle-down ml-2 mt-3"></i>
                        <img class="w-8 h-8 xl:w-10 xl:h-10 rounded-full"
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
            </div>
            @endauth

            {{-- Mobile buttion --}}
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
        </div>
        <div class="hidden justify-center items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 md:flex-row  md:mt-0 md:text-sm md:font-medium xl:mr-28">
                @foreach($menu->items as $item)
                <li class="mx-8">
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
                    <a href="{{ route($item->route) }}" class="block py-2 pl-3 pr-4 font-Alhurra1 {{ $item->active ? "
                        text-primary-500
                        border-primary-100 " : 'text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 ' }} border-b">
                        {{ $item->name }}

                    </a>
                    @endif
                </li>
                @endforeach

                @foreach($leftMenu->items as $item)
                <li class="mx-8  md:hidden">
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
        <div class="hidden justify-center items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">

            <ul class="flex flex-col mt-4 md:flex-row  md:mt-0 md:text-sm md:font-medium">


                @foreach($leftMenu->items as $item)
                <li class="mx-8 ">
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
