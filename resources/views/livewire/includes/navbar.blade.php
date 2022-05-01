<nav class="bg-gray-300 border-gray-200 px-2 py-4 sm:px-4 rounded">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="https://flowbite.com" class="flex items-center">
            <img src="/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">ABDULKAREEM-FOR-CHARITY</span>
        </a>


        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                @foreach ($menu as $menuitem)
                @if ($menuitem->route == 'login' || $menuitem->route == 'register')
                @continue
                @endif
                <li>
                    <a href="{{ route($menuitem->route) }}"
                        class="block py-2 pl-3 pr-4 rounded @if ($menuitem->active) text-primary-100 @else text-gray-700 @endif"
                        aria-current="page">

                        {{ $menuitem->name }}
                        <i class="{{ $menuitem->icon }} mr-1"></i>
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
                        class="bg-secondary-100 text-white m-4 py-2 pl-3 pr-4 rounded @if ($menuitem->active) text-primary-100 @else text-gray-700 @endif"
                        aria-current="page">

                        {{ $menuitem->name }}
                        <i class="{{ $menuitem->icon }} mr-1"></i>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route($menuitem->route) }}"
                        class="bg-primary-100 text-white py-2 pl-3 pr-4 rounded @if ($menuitem->active) text-primary-100 @else text-gray-700 @endif"
                        aria-current="page">

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
</nav>
