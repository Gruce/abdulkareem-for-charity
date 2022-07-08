<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class=" flex flex-wrap md:justify-between md:space-y-3 xl:justify-between justify-between  items-center">

        {{-- Logo & Title --}}
        <div class="mb-2 md:mb-4 order-1">
            <a href="/" class="flex items-center text-xl">
                <img src="{{ asset('/img/logo.png') }}" class="h-12 mx-4 ">
                <span class="font-Alhurra text-xl md:text-2xl font-bold text-gray-700">صندوق الكرم</span>
            </a>
        </div>

        {{-- Left --}}
        <div class="@guest md:hidden @endguest md:order-3 flex">
            {{-- dropdwon button and box info --}}
            <div class="flex items-center md:order-2 ">
                {{-- Profile Dropdown --}}
                @auth

                <div class="flex justify-around items-center md:order-2 md:-mt-4 @guest hidden @endguest ml-2">
                    @admin
                    <div class="hidden   md:flex justify-around   ml-10  text-gray-500 text-base text-center ">

                        <div class="flex flex-col mx-2 border-b border-gray-200">
                            <span>@money($total, 'IQD') </span>
                            <span class="text-2xs -mt-2">الكلي</span>
                        </div>
                        <div class="flex flex-col mx-2 border-b border-gray-200">
                            <span>@money($current_price, 'IQD') </span>
                            <span class="text-2xs -mt-2">الحالي</span>
                        </div>

                        <div class="flex flex-col mx-2 border-b border-gray-200">
                            <span>@money($payments, 'IQD')</span>
                            <span class="text-2xs -mt-2">مصروف</span>
                        </div>
                    </div>
                    @endadmin
                    <div class=" ">
                        <button type="button" class="flex mr-3 text-sm border-2 border-transparent  md:mr-0"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                            <span class="sr-only">Open user menu</span>
                            <i class="fa-solid fa-angle-down ml-2 mt-3"></i>
                            <img class="w-8 h-8 xl:w-10 xl:h-10 rounded-full border-2 border-primary-600"
                                src="{{ asset(auth()->user()->profile_photo_path ?? '/img/user.png') }}"
                                alt="user photo">
                        </button>

                        <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow "
                            id="dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                            data-popper-placement="top"
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


            </div>

            {{-- Mobile buttion --}}
            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <i class="fa-solid fa-ellipsis text-2xl"></i>

            </button>
        </div>


        {{-- List and sign in/up --}}
        <div class="hidden justify-center items-center w-full md:flex  md:flex-initial md:w-full xl:w-auto md:order-3 xl:order-2"
            id="mobile-menu-2">
            <ul class="flex flex-col mt-4 md:flex-row  md:-mt-1 md:text-sm md:font-medium ">
                @foreach ($menu->items as $item)
                <li class="md:mx-8">

                    <a href="{{ route($item->route) }}" class="block py-2 pl-3 pr-4 text-center font-Alhurra1
                        {{ $item->active ? " text-primary-500 border-primary-100"
                        : 'text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 ' }}
                        border-b">
                        {{ $item->name }}

                    </a>

                </li>
                @endforeach

                @foreach ($leftMenu->items as $item)
                <li class="md:mx-8  md:hidden ">

                    {{-- Has no submenu --}}
                    <a href="{{ route($item->route) }}"
                        class="block py-2 pl-3 pr-4 text-center {{ $item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-300 rounded-lg border-gray-100 hover:scale-110 duration-200 ' }} border-b ">
                        {{ $item->name }}
                    </a>

                </li>
                @endforeach

            </ul>


        </div>

        {{-- leftmenu --}}
        <div class="hidden  w-full md:flex mt-1 md:w-auto md:order-2 xl:order-3">

            <ul class="flex flex-col mt-4 md:flex-row  md:-mt-4  md:text-sm md:font-medium ">


                @foreach ($leftMenu->items as $item)
                <li class="mx-8 ">

                    <a href="{{ route($item->route) }}"
                        class=" py-2 pl-3 pr-4 text-white bg-primary-500 hover:bg-primary-600 rounded-lg border-gray-100 hover:scale-110 duration-200  border-b-2 ">
                        {{ $item->name }}
                        <i class="fa-solid fa-{{ $item->icon }}"></i>

                    </a>

                </li>
                @endforeach

            </ul>

        </div>

    </div>
</nav>

