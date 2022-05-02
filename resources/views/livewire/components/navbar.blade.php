<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="#" class="flex items-center">
            <img src="{{ asset('/img/logo.png') }}" class="h-16 ">
            <span class="text-xl font-bold text-gray-700 ">صندوق الأستاذ عبدالكريم</span>
        </a>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                @foreach ($menu->items as $item)
                    <li class="mx-3">
                        @if ($item->hasSubmenu)
                            {{-- Has Submenu --}}
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown-{{$item->name}}">
                                <span>{{ $item->name }}</span>
                            </a>
                 
                            <div class="z-50 hidden my-4 text-base text-center list-none bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600" id="dropdown-{{$item->name}}" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1142.67px, 866px, 0px);">
                                <ul class="py-1" aria-labelledby="dropdown">
                                    @foreach ($item->submenu->items as $subitem)
                                        <li>
                                            <a href="{{route($subitem->route)}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                {{ $subitem->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            {{-- Has no submenu --}}
                            <a href="{{route($item->route)}}" class="block py-2 pl-3 pr-4 font-semibold {{$item->active ? 'text-primary-500 border-primary-100' : 'text-gray-700 hover:bg-gray-50 border-gray-100'}} border-b-2 ">
                                {{$item->name}}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
